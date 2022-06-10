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
}
