<?php

namespace App\Http\Controllers\Admin;

use App\Models\ImageModel;
use Illuminate\Http\Request;
use App\Models\TemporaryModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return \view('admin.banqueImg.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->image = \substr($request->image,0,26);
        $validator = Validator::make($request->all(), [
            'libelle' => 'required|min:2',
        ]);
        
        $tmp_file = TemporaryModel::where('folder', $request->image)->first();

        if($validator->fails() && $tmp_file)
        {
            Storage::deleteDirectory('library/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($validator->fails() )
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($tmp_file)
        {
             Storage::copy('library/tmp/'.$tmp_file->folder.'/' . $tmp_file->file,'library/' . $tmp_file->folder.'/'. $tmp_file->file);
            ImageModel::create([
                'name' => $request->libelle,
                'image_url' =>$tmp_file->folder . '/' . $tmp_file->file
            ]);

            Storage::deleteDirectory('library/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return redirect()->back()->with('success', 'Nouvelle Image ajoutée à la Galerie !');
        }
        return redirect()->back()->with('failure', 'Soummetez une image');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function tmpUpload(Request $request)
    {
        if($request->hasFile('image'))
        {

            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $folder = uniqid('img', true);
            $image->storeAs('library/tmp/' . $folder, $file_name);
            $tmp = TemporaryModel::create([
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $tmp->folder;
        }
        return '';
    }

    public function tmpDelete()
    {
        $tmp_file = TemporaryModel::where('folder',request()->getContent())->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('library/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return \response('');
        }
    }
}
