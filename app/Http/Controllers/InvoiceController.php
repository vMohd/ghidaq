<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Promo;
use Illuminate\Support\Facades\DB;


class InvoiceController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}



    public function showdetails($invoiceId)
    {
        $invoice = Invoice::where('invoice_id', $invoiceId)->first();
    
        if (!$invoice) {
            return redirect()->route('error-page');
        }
    
        return view('invoicedetails', compact('invoice'));
    }

    public function showdorders()
    {
        $userEmail = auth()->user()->email;
        $invoices = Invoice::where('user_email', $userEmail)->get();
        
    
        if (!$invoices) {
            return redirect()->route('error-page');
        }
    
        return view('orders', compact('invoices'));
    }
    
    public function store(Request $request)
    {
        $validator = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:12',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'district' => 'required',
            'price' => 'numeric',
            'total' => 'numeric',
           'promoCode' => 'nullable',
            'promoCodeValue' => 'nullable|numeric',
        ], [
            'fullname.required' => 'The fullname field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Invalid email format.',
            'phone.required' => 'The phone field is required.',
            'phone.digits' => 'The phone number must be 12 digits.',
            'address.required' => 'The address field is required.',
            'country.required' => 'The country field is required.',
            'city.required' => 'The city field is required.',
            'district.required' => 'The district field is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'total.numeric' => 'The total must be a numeric value.',
        ]);

        //if (!auth()->check()) {
          //  abort(403, 'Unauthorized action.');
        //}

            if (!auth()->check()) {
         return back()->with(['error' => 'Login First To Checkout !']);
         
        }

        $id = $request->input('itemId');
        $promoCode = $request->input('promoCode');
        $promoCodeValue = $request->input('promoCodeValue');

        $item = Item::find($id);

        if (!$item) {
            return redirect()->route('error-page');
        }
    
        if ($validator) {
        $invoice = new Invoice();
        $invoice->user_email = auth()->user()->email;
        $invoice->order_itemId = $id;
        $invoice->order_itemName = $item->name;
        $invoice->fullname = $request->input('fullname');
        $invoice->email = $request->input('email');
        $invoice->phone = $request->input('phone');
        $invoice->address = $request->input('address');
        $invoice->country = $request->input('country');
        $invoice->city = $request->input('city');
        $invoice->district = $request->input('district');
        $invoice->price = $item->price;
        $invoice->total = $invoice->total = max($item->price - $promoCodeValue, 0);
        $invoice->promoCodeValue = $promoCodeValue;
        $invoice->promoCode = $promoCode;
        $invoice->date = now()->format('Y/m/d');

        $invoiceId = mt_rand(10000000, 99999999);

        while (Invoice::where('invoice_id', $invoiceId)->exists()) {
        $invoiceId = mt_rand(10000000, 99999999); 
        }

        $invoice->invoice_id = $invoiceId;
        $invoice->save();

        return view('invoice', compact('invoice'));
    } else {
        return back()->withErrors($validator)->withInput();
    }
    }
    
}