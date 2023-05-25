<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Promo;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}

    
    public function checkout($id)
    
    {

        $item = Item::find($id);
    
        if (!$item) {
            return redirect()->route('error-page');
        }
    
        $promoCode = session('promoCode');
        $promoCodeValue = session('promoCodeValue');
    
        session()->forget(['promoCode', 'promoCodeValue']);

        return view('checkout', compact('item', 'promoCode', 'promoCodeValue', 'id'));
    }
}

