<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Http\Request;
use Vanguard\Http\Controllers\Controller;
use Vanguard\ProductModel;
use Vanguard\ServiceModel;

class SearchController extends Controller
{
    public function index()
    {
        $search =  '%' .request()->search . '%'; 

        $product = ProductModel::where('serviceTitle', 'LIKE',  $search)
                    ->orWhere('serviceExcerpt', 'LIKE',  $search)
                    ->orWhere('serviceBody', 'LIKE',  $search)
                    ->orderBy('created_at', 'desc')
                    ->paginate(8);

        $service = ServiceModel::where('serviceTitle', 'LIKE',  $search)
                    ->orWhere('serviceExcerpt', 'LIKE',  $search)
                    ->orWhere('serviceBody', 'LIKE',  $search)
                    ->orderBy('created_at', 'desc')
                    ->paginate(8);

        $data = [
            'product' => $product,
            'service' => $service,
        ];

        return view('front.search', $data);
    }
}
