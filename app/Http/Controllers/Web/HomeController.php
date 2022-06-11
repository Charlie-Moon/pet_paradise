<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Vanguard\Http\Controllers\Controller;
use Vanguard\ProductModel;
use Vanguard\ServiceModel;
use Vanguard\SlideModel;

class HomeController extends Controller
{
    /**
     * Displays the application dashboard.
     *
     * @return Factory|View
     */
    public function index()
    {
        $slide = SlideModel::all();
        $product = ProductModel::all();
        $service = ServiceModel::all();
        return view('front.index', compact('product', 'service', 'slide'));
    }

    public function product()
    {
        $product = ProductModel::paginate(2);
        return view('front.product', compact('product'));
    }

    public function productDetail($id)
    {
        $product = ProductModel::find($id);
        return view('front.product.detail',compact('product'));
    }

    public function service()
    {
        $service = ServiceModel::all();
        return view('front.service', compact( 'service'));
    }

    public function serviceDetail($id) {
        $product = ServiceModel::find($id);
        return view('front.service.detail',compact('service'));
    }
}
