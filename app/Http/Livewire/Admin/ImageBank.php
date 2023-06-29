<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ImageModel;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImageBank extends Component
{
    use WithFileUploads;

    public $images ;
    public $image;
    public $libelle;
    public $newImage ;

    public function mount()
    {
        $this->images = ImageModel::all();
    }


    public function uploadImage()
    {
        // Traitement de l'upload de l'image ici

        // Émettre un événement Livewire pour indiquer que le fichier a été téléchargé avec succès
        $this->emit('fileUploaded');
    }
    protected $listeners = ['fileUpload'];

    public function deleteImage($imageId)
    {
        $image = ImageModel::find($imageId);
        if($image)
        {
            Storage::delete($image->image_url);
            $image->delete();
            $this->images = ImageModel::latest()->get();
            session()->flash('success', 'Image deleted successfully');
        }else{
            session()->flash('failure', 'Image not found');

        }
    }

    public function fileUpload($file)
    {
        $attributes([
            'name' => $file->getClientOriginalName(),
            'image_url' => $file->storeAs('library', $filename, 'public')
        ]);

        ImageModel::create($attributes);

        $this->images = ImageModel::latest()->get();
    }

    public function save()
    {
        dd($this->image);
    }
    public function render()
    {

        return view('livewire.admin.image-bank');
    }
}
