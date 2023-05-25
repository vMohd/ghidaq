<?php

namespace App\Http\Controllers;
use App\Models\Promo;
use App\Models\Item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function redeemPromo(Request $request)
    {
        $request->validate([
            'promo_code' => 'required|string',
        ]);
    
        $promoCode = $request->input('promo_code');
    
        $promo = Promo::where('code', $promoCode)->first();

        $itemId = $request->input('itemId');

        $item = Item::find($itemId);
        $price = $item->price;
    
        if (!$promo) {
            return redirect()->back()->with(['error-promo' => 'Invalid promo code.']);
        }
    
        if ($promo->discount >= $price) {
            session(['promoCode' => $promoCode, 'promoCodeValue' => $price]);
        } else {
            session(['promoCode' => $promoCode, 'promoCodeValue' => $promo->discount]);
        }
        
        return redirect()->back()->with('success-promo', 'Promo code applied successfully.');
        }


        public function store(Request $request)
        {
            $customMessages = [
                'code.required' => 'The promo code is required.',
                'code.string' => 'The promo code must be a string.',
                'code.unique' => 'The promo code already exists.',
                'discount.required' => 'The discount value is required.',
                'discount.numeric' => 'The discount value must be a number.',
                'password.required' => 'The password is required.',
                'password.string' => 'The password must be a string.',
                'password.in' => 'Invalid password.',
            ];
        
            $validatedData = $request->validate([
                'code' => [
                    'required',
                    'string',
                    Rule::unique('promos')->ignore($request->id),
                ],
                'discount' => 'required|numeric',
                'password' => 'required|string|in:admin',
            ], $customMessages);
        
            try {
                $promo = new Promo();
                $promo->code = $validatedData['code'];
                $promo->discount = $validatedData['discount'];
                $promo->save();
        

                $message = 'Promo added successfully: ' . $promo->code . ' (Discount: ' . $promo->discount . ')';

                return redirect()->back()->with('success', $message);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['code' => 'An error occurred while saving the promo.']);
            }
        }
    }