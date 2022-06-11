<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Vanguard\Http\Controllers\Controller;
use Vanguard\ProductModel;
use Vanguard\ServiceModel;
use Vanguard\SlideModel;

class ServiceController extends Controller
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
        $service = ServiceModel::all();
        return view('admin.service.index',compact('service'));
    }

    public function add($id = 0){
        if ($id ==0){
            $service = new ServiceModel();
        }else{
            $service = ServiceModel::find($id);
        }
        return view('admin.service.add', compact('service'));
    }

    public function store(Request $request){
        $id = $request->id;
        if($id){
            $service = ServiceModel::find($id);
        }else{
            $service = new ServiceModel();
        }

        if($request->file('serviceImage')){
            $file= $request->file('serviceImage');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $service->serviceImage = $filename;
        }

        $service->serviceTitle = $request->serviceTitle;
        $service->serviceBody = $request->serviceBody;
        $service->serviceExcerpt = $request->serviceExcerpt;
        $service->save();

        return redirect(route('service'));
    }

    public function delete($id){
        $product = ServiceModel::find($id);
        $product->delete();
        return redirect(route('service'));
    }
}
