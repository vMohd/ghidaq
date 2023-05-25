@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - Add')
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
   </div>
 </div>  

              <div class="jumbotron jumbotron-fluid py-5 bgc2">
                <div class="container py-4 px-2 px-md-5 my-3 cc3">
                  <h2>Add New Promo</h2>
                  <form method="POST" action="{{ route('add-promo') }}">
                      @csrf
                      <div class="form-group">
                          <label for="code">Promo Code:</label>
                          <input type="text" class="form-control" id="code" name="code" required>
                      </div>
                      <div class="form-group">
                          <label for="discount">Discount:</label>
                          <input type="number" class="form-control" id="discount" name="discount" required>
                      </div>
                      <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                          @error('password')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                          @if(session('success'))
                          <p class="text-success">{{ session('success') }}</p>
                      @endif
                      @if($errors->any())
                          <p class="text-danger">{{ $errors->first() }}</p>
                      @endif
                      </div><br>
                      <button type="submit" class="btn btn-primary">Add Promo</button>
                  </form>
                  </div>
                </div>
              </div>
            
@endsection
