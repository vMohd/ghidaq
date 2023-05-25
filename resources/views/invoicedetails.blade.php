@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - Order Details')
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
   <h3 class="mb-3">Order Details</h3>
   </div>
 </div>  

              <div class="jumbotron jumbotron-fluid py-5 bgc2">
                <div class="container py-4 px-2 px-md-5 my-3 cc3">
                    <div class="card mb-5">
                      <div class="card-header h5">Order Details</div>
                      <div class="card-body">
                        <p class="card-text">Order ID: <span>{{ $invoice->id }}</span></p>
                        <p class="card-text">Email: <span>{{ $invoice->email }}</span></p>
                        <p class="card-text">Phone: <span>{{ $invoice->phone }}</span></p>
                        <p class="card-text">Date Added: <span>{{ $invoice->date }}</span></p>
                      </div>
                    </div>
                  
                    <div class="card mb-5">
                      <div class="card-header h5">Shipping Address</div>
                      <div class="card-body">
                        <p class="card-text">Name: <span>{{ $invoice->fullname }}</span></p>
                        <p class="card-text">Address: <span>{{ $invoice->address }}</span></p>
                        <p class="card-text">City: <span>{{ $invoice->city }}</span></p>
                        <p class="card-text">District: <span>{{ $invoice->district }}</span></p>
                        <p class="card-text">Country: <span>{{ $invoice->country }}</span></p>                   
                      </div>
                    </div>
                  
                    <div class="card mb-5">
                      <div class="card-header h5">Products</div>
                      <div class="card-body">
                        <table>
                          <tr>
                            <th>PRODUCT NAME</th>
                            <th style="padding-left: 10px; padding-right: 10px;">ID</th>
                            <th style="padding-left: 10px; padding-right: 10px;">PRICE</th>
                          </tr>
                          <tr>
                            <td>{{ $invoice->order_itemName }}</td>
                            <td style="padding-left: 10px; padding-right: 10px;">{{ $invoice->order_itemId }}</td>
                            <td style="padding-left: 10px; padding-right: 10px;">{{ $invoice->price }} SAR</td>
                          </tr>
                        </table>
                      </div>                
                      <div class="card-footer">
                        <p>Total: {{ $invoice->price }} SAR</p>
                        <hr class="mb-2">
                        <p>Shipping: Free</p>
                        @if($invoice->promoCode)
                        <hr class="mb-2">
                        <p>Promo Code: ({{ $invoice->promoCode }}) <span>{{ $invoice->promoCodeValue }} -SAR</span></p>
                        @endif
                        <hr class="mb-2">
                        <p>Final Total: {{ $invoice->total }} SAR</p>
                      </div>
                    </div>
                  
                </div>
              </div>
            
@endsection
