<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();

        return view('shop.index', compact('shops'));
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'location' => 'required',
            'address' => 'required',
        ]);

        $name = $request->name;
        $location = $request->location;
        $address = $request->address;

        Shop::create([
            'name' => $name,
            'location' => $location,
            'address' => $address
        ]);

        return redirect()->back();
    }

    public function show()
    {

    }
}
