<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_model;
use App\Wishlist_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $products = Products_model::all();
        return view('frontend.home', compact('products'));
    }

    public function shop()
    {
         $products = Products_model::all();
        return view('frontend.shop', compact('products'));
    }

    public function showCates($id)
    {
        $category_products = Products_model::where('category_id',$id)->get();

        $id_ = $id ;

        return view('frontend.category_list_pro',compact('category_products','id_'));
    }

    public function detailPro($id)
    {
        $products = DB::table('products')->where('id',$id)->get();

        return view('frontend.product_detail',compact('products'));
    }

    
}
