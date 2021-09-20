<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{

    public function product_card(){
        $allProducts = Product::all();
        $saleProducts = [];
        foreach($allProducts as $item){
            if ($item->sale != 0) {
                array_push($saleProducts, $item);
            }
        }
        $count = count($saleProducts)-1;
        $currentSaleProduct = $saleProducts[rand(0, $count)];
        $category_arr = [];
        $category = Category::find(3);
        $softenToys = $category->products;
        array_push($category_arr, $category->id);
        $category = Category::find(5);
        $interactiveToys = $category->products;
        array_push($category_arr, $category->id);
        $category = Category::find(4);
        $characterToys = $category->products;
        array_push($category_arr, $category->id);
        $category = Category::find(1);
        $toyAccessories = $category->products;
        array_push($category_arr, $category->id);
        $category = Category::find(2);
        $sizeToys = $category->products;
        array_push($category_arr, $category->id);
        return view('start_page.index', compact('softenToys', 'interactiveToys', 'characterToys', 'toyAccessories', 'sizeToys', 'currentSaleProduct', 'category_arr'));
    }

    public function setAllCardsForCategory($idCategory){
        $brands = Trademark::all();
        $category = Category::find($idCategory);
        $products = $category->products()->paginate(12);
        return view('catalog_page.catalog', compact('products', 'category', 'brands'));
    }

    public function filtersCategory($idCatalog, Request $request){
        $brands = Trademark::all();
        $category = Category::find($idCatalog);
        $range_arr = [];
        $products = null;
        $range = null;
        $min = null;
        $max = null;

        $query = Product::query();

        $query->whereHas('categories', function ($q) use($category){
            $q->where('name', '=', $category->name);
        });

        if ($request->filled('price_range')){
            $range = $request->price_range;
            $range_arr = explode(';', $range);
            $min = $range_arr[0];
            $max = $range_arr[1];
            $query
                ->where('price', '>=', $range_arr[0])
                ->where('price', '<=', $range_arr[1])->orderBy('price', 'asc');
        }
        if ($request->filled('in_stock')){
            $query
                ->where('amount', '>', 0);
        }

        if ($request->filled('to_order')){
            $query
                ->where('amount', '=', 0);
        }

        if($request->filled('radio')) {
            if ($request->radio == 'all') {
;
            } elseif ($request->radio == 'new') {
                $query
                    ->where('new', '>', 0);
            } elseif ($request->radio == 'sale') {
                $query
                    ->where('sale', '>', 0);
            }
        }

        if ($request->filled('gender')){

            if($request->gender == 'male'){
                $query
                    ->where('gender', '=', 'Для мальчиков');
            }
            elseif($request->gender == 'female'){
                $query
                    ->where('gender', '=', 'Для девочек');
            }
        }

        if($request->filled('age')){
            if($request->age == 7){

            }
            else{
                $query
                    ->where('age', '=', $request->has('age'));
            }
        }

        if ($request->filled('brand_checkbox')){
            $arr = $request['brand_checkbox'];
            $brand = DB::table('trademarks')->update(['checked' => false]);
            $brand = DB::table('trademarks')->where('trademark_name', '=', $arr[0])->update(['checked' => true]);
            $query->where(function ($q) use($arr){
                $q->where('trademark_id', '=', $arr[0]);
                for ($i = 0; $i < count($arr); $i++){
                    $brand = DB::table('trademarks')->where('trademark_name', '=', $arr[$i])->update(['checked' => true]);
                    $q->orWhere('trademark_id', '=', $arr[$i]);
                }
            });
        }
        if ($request->filled('country_checkbox')) {
            $arr = $request['country_checkbox'];
            $country = DB::table('countries')->update(['checked' => false]);
            $country = DB::table('countries')->where('country_name', '=', $arr[0])->update(['checked' => true]);

            $query->where(function ($q) use ($arr) {
                $q->where('country_id', '=', $arr[0]);
                for ($i = 0; $i < count($arr); $i++) {
                    $country = DB::table('countries')->where('country_name', '=', $arr[$i])->update(['checked' => true]);
                    $q->orWhere('country_id', '=', $arr[$i]);
                }
            });
        }

        $products = $query->paginate(12)->withQueryString();
        return view('catalog_page.catalog', compact('products', 'brands', 'category', 'min', 'max'));
    }
}
