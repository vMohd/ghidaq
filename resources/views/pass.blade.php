@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - Password')
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
                  <h2>Password Entry</h2>
                  <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enter Password</h5>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form method="POST" action="{{ route('chk-pass') }}">
                          @csrf
                          <div class="mb-3">
                              <label for="password" class="form-label">Password:</label>
                              <input type="password" class="form-control" id="password" name="password">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      
                    </div>
                </div>
                </div>
              </div>
            
@endsection
