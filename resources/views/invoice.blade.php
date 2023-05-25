@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - Order Invoice')
@section('color1', '#1b2f26')
@section('color2', '#DBAD7E')

@section('custom_styles')
    @parent
    
    <style>
          .bgc1 {
            background-color: #1b2f26;
        }
        .bgc2 {
            background-color: #c3ac88;
        }

        .cc1 {
          color: #FFE6CC;
        }

        .cc2 {
          color: #DBAD7E;
        }
        
        .cc3 {
          color: #5c3e26;
        }

    </style>
@endsection

@section('content')


<div class="jumbotron jumbotron-fluid py-2 bgc1">
  <div class="container text-center cc1">
   <h2 class="mb-5 cc2">Ghidaq Luxury Jewelry</h2>
   <h3 class="mb-3">Order Invoice</h3>
   </div>
 </div>  

              <div class="jumbotron jumbotron-fluid py-5 bgc2">
                <div class="container py-4 px-2 px-md-5 my-3 cc3">
                  <h1 class="text-center mb-5">Thank for your purchase </h1>
                    <div class="card justify-content-between align-items-center">
                      <div class="card-body">
                        <p class="card-text h5">{{ $invoice->fullname }}</p>
                        <p class="card-text h5">Invoice #<span>{{ $invoice->invoice_id }}</span></p>
                        <p class="card-text h5">{{ $invoice->date }}</p>
                        <a href="invoice/{{ $invoice->invoice_id }}">Show Details</a>
                        <hr class="mb-3">
                        <table>
                          <tr>
                            <th>PRODUCT NAME</th>
                            <th style="padding-left: 10px; padding-right: 10px;">PRICE</th>
                          </tr>
                          <tr>
                            <td>{{ $invoice->order_itemName }}</td>
                            <td style="padding-left: 10px; padding-right: 10px;">{{ $invoice->price }}</td>
                          </tr>
                        </table>
                        <hr class="mb-2">
                        <p class="h5">Total: {{ $invoice->price }} SAR</p>
                        <hr class="mb-2">
                        <p class="h5">Shipping: Free</p>
                        @if($invoice->promoCode)
                        <hr class="mb-2">
                        <p>Promo Code: ({{ $invoice->promoCode }}) <span>{{ $invoice->promoCodeValue }} -SAR</span></p>
                        @endif
                        <hr class="mb-2">
                        <p class="h5">Final Total: {{ $invoice->total }} SAR</p>
                    </div>
                  </div>
                </div>
              </div>
            
@endsection
