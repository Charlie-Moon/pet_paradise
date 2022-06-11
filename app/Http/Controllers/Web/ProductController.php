<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Vanguard\Http\Controllers\Controller;
use Vanguard\ProductModel;

class ProductController extends Controller
{
   /**
     * Displays the application dashboard.
     *
     * @return Factory|View
     */

    public function index()
    {
        if (session()->has('verified')) {
            session()->flash('success', __('E-Mail verified successfully.'));
        }
        $products = ProductModel::all();
        return view('admin.product.index',compact('products'));
    }

    public function add($id = 0){
        if ($id ==0){
            $product = new ProductModel();
        }else{
            $product = ProductModel::find($id);
        }
        return view('admin.product.add', compact('product'));
    }

    public function store(Request $request){
        $id = $request->id;
        if($id){
            $product = ProductModel::find($id);
        }else{
            $product = new ProductModel();
        }

        if($request->file('serviceImage')){
            $file= $request->file('serviceImage');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $product->serviceImage = $filename;
        }

        $product->serviceTitle = $request->serviceTitle;
        $product->serviceBody = $request->serviceBody;
        $product->serviceExcerpt = $request->serviceExcerpt;
        $product->save();

        return redirect(route('product'));
    }

    public function delete($id){
        $product = ProductModel::find($id);
        $product->delete();
        return redirect(route('product'));
    }
    
    public function front() {
        $product = ProductModel::all();
        return view('front.products.index',compact('product'));
    }
}
