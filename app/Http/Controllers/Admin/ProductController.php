<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\TemporaryModel;
use App\Actions\DecryptAndFind;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.boutique.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = ProductType::all();
        return view('admin.boutique.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->image = \substr($request->image,0,26);
        $tmp_file = TemporaryModel::where('folder','like', "%$request->image%")->first();
        if($tmp_file)
        {
            Storage::copy('library/tmp/'.$tmp_file->folder.'/' . $tmp_file->file,'library/' . $tmp_file->folder.'/'. $tmp_file->file);
            Product::create( $request->validated() + [
                'main_image' =>$tmp_file->folder . '/' . $tmp_file->file
            ]);

            Storage::deleteDirectory('library/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return redirect()->back()->with('success', 'Nouveau Produit crée !');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $idProduct)
    {
        $product = (new DecryptAndFind())->handle(Product::class, $idProduct, 'id');
        return \view('admin.boutique.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $idProduct)
    {
        $product = (new DecryptAndFind())->handle(Product::class, $idProduct, 'id');
        $state = 'Indisponible';
       $product->is_available = !$product->is_available;

       if($product->is_available)
       {
        $state='Disponible';
       }
       $product->save();

        return redirect()->back()->with('warning', "Le produit $product->name est désormais $state !");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $idProduct)
    {
        $product = (new DecryptAndFind())->handle(Product::class, $idProduct, 'id');
        $product->delete();
        return \redirect()->back()->with('success', 'Suppression effectuée');
    }
}
