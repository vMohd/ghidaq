@extends('layouts.app')

@section('title', 'Ghidaq Jewellery - Error')
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
         <div class="container text-center cc1 py-1">
          <h2 class="mb-5 cc2">Ghidaq Luxury Jewelry</h2>
          </div>
        </div>  

              <div class="jumbotron jumbotron-fluid py-5 bgc2">
                <div class="container text-center text-danger mt-5 mb-5 py-4">
                      <h1 class="display-5 fw-bold">Oops! Something went wrong.</h1>
                      <h2>We encountered an error while processing your request. Please try again later.</h2>
                </div>
              </div>
              
            
@endsection
