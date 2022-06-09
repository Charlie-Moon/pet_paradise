<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
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
}
