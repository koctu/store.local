<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function direct_index(){
        return view('start_page.index');
    }

    public function direct_catalog(){
        return view('catalog_page.catalog');
    }

    public function direct_basket(){
        return view('basket_page.basket');
    }
}
