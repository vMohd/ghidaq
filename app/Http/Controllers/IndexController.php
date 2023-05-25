<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class IndexController extends Controller
{
    public function index()
    {

        if (!Item::exists()) {
            return redirect()->route('error-page');
        }



        $items = Item::all();
        return view('index', compact('items'));
    }
}
