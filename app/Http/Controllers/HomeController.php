<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
class HomeController extends Controller
{
   public function index()
   {
    $data=food::all();
    return view("home",compact("data"));
   }
   public function redirects()
   {
    $usertype = Auth::user()->usertype;
    if($usertype == '0'){
      $data=food::all();
      $user_id = Auth::id();
      $count=cart::where('user_id',$user_id)->count();
      return view("home",compact("data",'count'));

    }
    else{
      return view("admin.adminhome");
    }
   }
   public function addcart(Request $request,$id){
    if (Auth::id()){
      $user_id = Auth::id();
      $foodid = $id;
      $quantity = $request->quantity;

      $cart = new cart;
      $cart->user_id = $user_id;
      $cart->food_id = $foodid;
      $cart->quantity = $quantity;
      $cart->save();
      
      return redirect()->back();
    }
    else{
      return redirect('/login');
    }

   }
   public function showcart(Request $request,$id){

    
    $data = Cart::where('user_id', $id)
    ->join('food', 'carts.food_id', '=', 'food.id')
    ->select('food.id as foodid', 'food.title', 'carts.quantity', 'food.price')
    ->get();
   
    
    return view('showcart',compact('data'));

   }
   public function removeCartItem($foodid) {
    // Delete the item from the cart table using Eloquent
    Cart::where('food_id', $foodid)->delete();

    // Redirect back to the cart page or wherever you want
    return redirect()->back();
  }
  public function orderconfirm(Request $request){
    foreach($request->foodname as $key =>$foodname){
      $data = new order;
      $data->foodname = $foodname;
      $data->price = $request->price[$key];
      $data->quantity = $request->quantity[$key];
      $data->name = $request->name;
      $data->phone = $request->phone;
      $data->address = $request->address;
      $data->save();
    }
    return redirect()->back();
  }
}
