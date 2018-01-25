<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{	
	public function __construct(){
		if(!\Session::has('cart')) \Session::put('cart',array());
	}
    // show cart
	public function show()
	{

	 return view('cart');
	}
    // Add item
	public function addItem($id,$name,$price ){
		Cart::add('$id', '$name', 1, $price);
	}
    // Delete item

    // Update item

    //Trash cart

    // total
}
