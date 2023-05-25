@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - Checkout')
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
          <h3 class="mb-3">Ghidaq Checkout</h3>
          </div>
        </div>  

              <div class="jumbotron jumbotron-fluid py-5 bgc2">
                <div class="container px-4 py-4 cc3">
                      <h2 class="mb-5">Your Products:</h2>
                      <div class="card">
                        <div class="row d-flex">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="/img/{{ $item->image }}" class="img-fluid" alt="Item Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                                    <p class="card-text mb-5">{{ $item->description }}</p>
                                    <p class="card-price fw-bold h5">{{ $item->price }} SAR</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <hr class="mb-4">                  
                    <div class="row">
                      <div class="col-md-4 order-md-2 mb-4 my-5">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">Your Cart</h4>
                            <ul class="list-group mb-3">
                                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                          <h6 class="my-0">{{ $item->name }}</h6>
                                      </div>
                                      <span class="text-muted">{{ $item->price }}SAR</span>
                                  </li>
                                  @if($promoCode)
                                  <li class="list-group-item d-flex justify-content-between bg-light">
                                      <div class="text-success">
                                          <h6 class="my-0">Promo code</h6>
                                          <small>{{ $promoCode }}</small>
                                      </div>
                                      <span class="text-success">{{ $promoCodeValue }} -SAR</span>
                                  </li>
                              @endif
                          <li class="list-group-item d-flex justify-content-between">
                            <span>Total (SAR)</span>
                            @if ($promoCode && $promoCodeValue >= $item->price)
                            <strong>0 SAR</strong>
                        @else
                            <strong>{{ $item->price - $promoCodeValue }} SAR</strong>
                        @endif
                          </li>
                        </ul>
                  
                        <form class="card p-2" action="{{ route('redeem-promo') }}" method="POST">
                          @csrf
                          @if(session('success-promo'))
                              <p class="text-success">{{ session('success-promo') }}</p>
                          @endif
                          @if(session('error-promo'))
                              <p class="text-danger">{{ session('error-promo') }}</p>
                          @endif
                          <div class="input-group">
                            <input type="hidden" name="itemId" value="{{ $id }}">
                              <input type="text" class="form-control" name="promo_code" placeholder="Promo code" maxlength="15" required>
                              <div class="input-group-append mx-2">
                                  <button type="submit" class="btn btn-outline-secondary">Redeem</button>
                              </div>
                          </div>
                      </form>                                           
                      </div>


                      <div class="col-md-8 order-md-1 my-4">
                        <h4 class="mb-3">Billing Address</h4>
                        <form action="{{ route('invoice') }}" method="POST">
                          @csrf
                          <input type="hidden" name="itemId" value="{{ $id }}">
                          <input type="hidden" name="promoCode" value="{{ $promoCode }}">
                          <input type="hidden" name="promoCodeValue" value="{{ $promoCodeValue }}">                      
                          <div class="row">
                            <div class="mb-3">
                              <label for="fullname">Full name</label>
                              <input type="text" class="form-control" id="fullname" name="fullname" value="{{ auth()->check() ? auth()->user()->name : old('fullname') }}" placeholder="Enter Your Full name" maxlength="25" required>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" value="{{ auth()->check() ? auth()->user()->phone : old('phone') }}" placeholder="9665XXXXXXXXX" maxlength="12" required>
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->check() ? auth()->user()->email : old('email') }}" placeholder="you@example.com" maxlength="60" required>
                          </div>

                  
                          <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Al Arouba Street, Olaya, Riyadh, 12333" maxlength="120" required>
                          </div>
                  
                          <div class="row">
                            <div class="col-md-5 mb-3">
                              <label for="country">Country</label>
                              <select class="form-select d-block w-100" id="country" name="country" aria-label="Select Your Country" required>
                                <option selected>Kingdom of Saudi Arabia</option>
                              </select>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="City">City</label>
                              <select class="form-select d-block w-100" id="city" name="city" aria-label="Select Your City" required>
                                <option>Riyadh</option>
                                <option>Jeddah</option>
                                <option>Mecca</option>
                                <option>Medina</option>
                                <option>Dammam</option>
                                <option>Tabuk</option>
                                <option>Abha</option>
                                <option>Al-Khobar</option>
                                <option>Taif</option>
                                <option>Buraidah</option>
                                <option>Hail</option>
                                <option>Najran</option>
                                <option>Yanbu</option>
                                <option>Jubail</option>
                                <option>Qatif</option>
                                <option>Ha'il</option>
                                <option>Rafha</option>
                                <option>Turaif</option>
                                <option>Unaizah</option>
                                <option>Sakakah</option>
                                <option>Arar</option>
                                <option>Jizan</option>
                                <option>Al-Bahah</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="zip">District</label>
                              <input type="text" class="form-control" id="district" name="district" value="{{ old('district') }}" placeholder="Olaya" maxlength="20" required>
                            </div>
                          </div>
                          </div>
                          <hr class="mb-4">
                          @if(session('success'))
                          <p class="text-success">{{ session('success') }}</p>
                      @endif
                      @if($errors->any())
                          <p class="text-danger">{{ $errors->first() }}</p>
                      @endif
                      <br>
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
            
            
@endsection

