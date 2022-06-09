<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Request;
use Vanguard\Http\Controllers\Controller;

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

        return view('admin.product.index');
    }

    public function add(){

        return view('admin.product.add');
    }

    public function store(Request $request){
        dd($request->name);
    }
}
