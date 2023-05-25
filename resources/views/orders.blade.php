@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - My Orders')
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
   <h3 class="mb-3">My Orders</h3>
   </div>
 </div>  

              <div class="jumbotron jumbotron-fluid py-5 bgc2">
                <div class="container py-4 px-2 px-md-5 my-3 cc3">
                  <h2>Orders Details</h2>
                  <hr class = "fw-bold mb-3">
                    <div class="card mb-5">
                    <div class="card-body">
                      @if(!is_null($invoices))
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Invoice ID</th>
                                  <th>Name</th>
                                  <th>Status</th>
                                  <th>Total</th>
                                  <th>Date</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($invoices as $invoice)
                                  @if($invoice->user_email == auth()->user()->email)
                                  <tr>
                                      <td>#{{ $invoice->invoice_id }}</td>
                                      <td>{{ $invoice->fullname }}</td>
                                      <td>Shipped</td>
                                      <td>{{ $invoice->total }} SAR</td>
                                      <td>{{ $invoice->date }}</td>
                                      <td>
                                          <a href="invoice/{{ $invoice->invoice_id }}">Show Details</a>
                                      </td>
                                  </tr>
                                  @endif
                              @empty
                                  <tr>
                                      <td colspan="6">No orders found.</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                      @else
                      <p>No orders found!</p>
                      @endif
                  </div>
                  
                      </div>
                    </div>
                  
                </div>
              </div>
            
@endsection
