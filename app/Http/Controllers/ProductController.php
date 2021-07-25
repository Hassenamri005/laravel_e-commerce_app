<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product', ["products"=>$data]);
    }

    function details($id){
        $data = Product::find($id);
        return view('details', ['data'=>$data]);
    }

    function addToCart(Request $req){
        //check if user is logged in or redirect him to login page
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->quantity = $req->quantity;
            $cart->save();
            return redirect("/");
        }else{
            return redirect('/login'); 
        }
    }

    static function cartItemNumbers(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function search(Request $req){
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    function cartList(){
        $userId = isset(Session::get('user')['id']);
        if($userId!=null){
            $products = DB::table('cart')
            ->join('products', 'cart.product_id', "=", "products.id")
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id', 'cart.quantity as cart_quantity')
            ->get();
            return view('cartList', ['products'=>$products]);
        }else{
            return redirect('/');
        }  
    }

    function removeProductFromCart($id){
        Cart::destroy($id);
        return redirect('/cart-list');
    }

   function orderNow(Request $req){
      $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', "=", "products.id")
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id', 'cart.quantity as cart_quantity')
        ->get();
        //return view('cartList', ['products'=>$products]);
        return view('ordernow', [ 'products'=>$products]);
   }

   function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        // get all user cart products
        $allCart = Cart::where('user_id', $userId)->get();
        // save products from user cart to order table
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->quantity = $cart['quantity'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->fullName = $req->fullName;
            $order->num_tel = $req->num_tel;
            $order->adress = $req->adress;
            $order->save();
            // remove products from user cart after send order
            Cart::where('user_id', $userId)->delete();
        } 
        $req->input();
        return redirect('/');
   }

   function myOrders(){
        $userId = isset(Session::get('user')['id']);
        if($userId!=null){
            $products = DB::table('orders')
            ->join('products', 'orders.product_id', "=", "products.id")
            ->where('orders.user_id', $userId)
            ->select('products.*', 'orders.*')
            ->get();
            return view('myorders', ['products'=>$products]);
        }else{
            return redirect('/');
        }
        
   }

}
