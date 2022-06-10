<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Vanguard\Http\Controllers\Controller;
use Vanguard\ProductModel;
use Vanguard\ServiceModel;
use Vanguard\SlideModel;

class SlideController extends Controller
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
        $slide = SlideModel::all();
        return view('admin.slide.index',compact('slide'));
    }

    public function add($id = 0){
        if ($id ==0){
            $slide = new SlideModel();
        }else{
            $slide = SlideModel::find($id);
        }
        return view('admin.slide.add', compact('slide'));
    }

    public function store(Request $request){

        $id = $request->id;
        if($id){
            $slide = SlideModel::find($id);
        }else{
            $slide = new SlideModel();
        }

        if($request->file('serviceImage')){
            $file= $request->file('serviceImage');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $slide->serviceImage = $filename;
        }

        $slide->serviceTitle = $request->serviceTitle;
        $slide->serviceExcerpt = $request->serviceExcerpt;
        $slide->save();

        return redirect(route('slide'));
    }

    public function delete($id){
        $product = SlideModel::find($id);
        $product->delete();
        return redirect(route('slide'));
    }
}
