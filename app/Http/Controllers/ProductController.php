<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    public function index()
    {
        $products=DB::table('products')->latest()->paginate(3);
        // $products=Product::all()->latest()->paginate(3);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }


    protected function store(Request $request)
    {

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image'],
        ]);
        $imgpath=request('image')->store('apercu', 'public');
        $products= Product::create([
            'title'=> request('title'),
            'price'=> request('price'),
            'description'=> request('description'),
            'image'=> $imgpath,

        ]);
        session()->flash('message', 'Produit ajouté avec succes');
        session()->flash('notification.type', 'success');

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product, $id)
    {

        request()->validate([
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image'],
        ]);
        $imgpath=request('image')->store('apercu', 'public');
        $product= DB::table('products')
        ->where('id', $id)
        ->update([
            'title'=> request('title'),
            'price'=> request('price'),
            'description'=> request('description'),
            'image'=> $imgpath,

        ]);
        session()->flash('message', 'Produit modifié avec succes');
        session()->flash('notification.type', 'warning');


        return redirect()->route('index');

    }

    public function show($id)
    {
        $prod=Product::all()->where('id', $id)->first() ;
        return view('product.show', compact('prod'));
    }

    public function delete($id)
    {

        $prod=DB::table('products')->where('id', $id)->delete();

        session()->flash('message', 'Produit supprimé avec succes');
        session()->flash('notification.type', 'danger');


        return redirect()->route('index');
    }

}
