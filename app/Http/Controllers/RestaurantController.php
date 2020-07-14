<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Restaurant;

class RestaurantController extends Controller
{
    //
    function index()
    {
        return view('home');
    }

    function list()
    {
        $listRestaurant = Restaurant::all();
        return view('list', ['listRestaurant' => $listRestaurant]);
    }

    function add(Request $req)
    {
        $restaurant = new Restaurant;
        $restaurant->name = $req->name;
        $restaurant->email = $req->email;
        $restaurant->address = $req->address;
        $restaurant->created_at = $req->created_at || '';
        $restaurant->updated_at = $req->updated_at || '';
        $restaurant->save();
        return redirect('home');
    }
}
