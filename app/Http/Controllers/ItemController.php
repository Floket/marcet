<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('main', compact('items'));
    }

    public function search($search)
    {
        $items = Item::where('names','like',"$search");
        return view('main', compact('items'));
    }

    public function show($name)
    {
        $item = Item::find($name);
        return view('game', compact('item'));
    }

}
