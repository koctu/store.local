<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
        public function basket(){
        $orderId = session('orderId');
        if (!is_null($orderId)){
            $order = Order::find($orderId);
            $var = true;
            return view('basket_page.basket', compact('order', 'var'));
        }
        else{
            $var = false;
            return view('basket_page.basket', compact('var'));
        }

    }

    public function basketAdd($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            $order = Order::create();
            session(['orderId' => $order->id]);
        }
        else{
            $order = Order::find($orderId);

        }

        if ($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;

            $pivotRow->count++;
            $pivotRow->update();
        }
        else{
            $order->products()->attach($productId);
        }

        return redirect()->route('direct_basket');
    }

    public function basketRemove($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            return redirect()->route('direct_basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2){
                $order->products()->detach($productId);
            }
            else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('direct_basket');
    }

    public function basketRemoveAll($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            return redirect()->route('direct_basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $order->products()->detach($productId);
        }

        return redirect()->route('direct_basket');
    }

    public function basketConfirm(Request $request){
        $orderId = session('orderId');
        if (is_null($orderId)){
            return redirect()->route('direct_index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->shop, $request->payment);
        session()->invalidate();
        session()->regenerate();
        return redirect()->route('getCardStPage');
    }

}
