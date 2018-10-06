<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store()
    {

    }

    public function show()
    {

    }
}
