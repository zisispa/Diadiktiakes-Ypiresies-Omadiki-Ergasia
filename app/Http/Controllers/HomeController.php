<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Region;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (auth()->user()) {

            $shops = Shop::where('region_id', auth()->user()->region_id)->get();
        }

        $shops = Shop::where('region_id', 2)->get();

        return view('pages.Homepage.homepage', [
            'regions' => Region::all(),
            'products' => Product::all(),
            'shops' => $shops
        ]);
    }
}
