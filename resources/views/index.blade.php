@extends('layouts.app')

@section('title', 'Ghidaq Jewellery')
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
        .bgc3 {
          background-color: #1B201E
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
        .cc4 {
          color: #1b2f26;
        }

        .cc5 {
          color: #C4BAA6
        }
        
        .cc6 {
          color: #1B201E
        }


    </style>
@endsection


<header class="py-1 bgc2 " id="discount-header">
  <div class="container bgc2">
    <div class="d-flex align-items-start">
    <i class="fa-solid fa-xmark fa-2x" onclick="document.getElementById('discount-header').style.display='none';"></i>
        <p class="fw-bold h5 cc4 mx-auto">Use Code: ( First ) To Get 500 SAR Discount at Checkout.</p>
      </div>
  </div>
</header>

<script>
  document.getElementById("discount-header").style.display = "block";
</script>

@section('content')


<div class="jumbotron jumbotron-fluid py-5" style="background-color: #1b2f26">
  <div class="container text-center" style="color: #FFE6CC">
    <h2 class="mb-5" style="color: #DBAD7E">Ghidaq Luxury Jewelry</h2>
    <h3 class="display-3 mb-5">Put yourself forward with stylish jewelry that's made for you.</h3>
    <p class="h4">Discover our exquisite collection of fine jewelry crafted with passion and precision.</p>
      <img src="/img/banner.png" alt="Ghidaq" class="img-fluid mt-5">
    </div>
  </div>

  <section id="product">
      <div class="jumbotron jumbotron-fluid py-5 bgc2">
          <div class="container px-4 px-lg-5 cc4">
            <small>Discover</small>
            <h1 class="mb-3" style="color: #1b2f26">Ghidaq Collection</h1>
            <div class="spacer"></div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
              @foreach ($items as $item)
              <div class="col-md-4" style="background-color: transparent;">
                  <div class="card mb-4 bg-transparent">
                      <img src="/img/{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}">
                      <div class="card-body text-center">
                          <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                          <p class="card-text">{{ $item->description }}</p>
                          <p class="card-price">{{ $item->price }} SAR</p>
                          <a href="checkout/{{ $item->id }}" class="btn btn-outline-primary">Buy Now</a>
                      </div>
                  </div>
              </div>            
              @endforeach    
        </div>
      </div>
      </div>
    </section>




      <div class="jumbotron jumbotron-fluid py-5 bgc1" >
        <div class="container px-4 cc1">
          <h1 class="mb-3">Upcoming Collection</h1>
          <div class="spacer"></div>
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center text-center">
          <div class="col-md-4 mb-4">
            <div class="card bg-transparent">
              <img class="card-img-top" src="/img/img9.png" alt="Upcoming Item 1">
              <div class="card-body">
                <h3 class="card-title">Ghidaq Ring In 18K White Gold With Akoya Pearls And Blue Sapphires</h3>
                <p class="card-text">Bring the beautiful power of music to your look with this 18k white gold ring.</p>
                <p class="card-price">5000 SAR and up</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-transparent">
              <img class="card-img-top" src="/img/img10.png" alt="Upcoming Item 2">
              <div class="card-body">
                <h3 class="card-title">Ghidaq Necklace 18K White Gold With Akoya Pearls, Diamonds And Blue Sapphires</h3>
                <p class="card-text">This 18k white gold necklace is inspired by musical notes, with Akoya pearls, diamonds and blue sapphires.</p>
                <p class="card-price">4000 SAR and up</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-transparent">
              <img class="card-img-top" src="/img/img11.png" alt="Upcoming Item 3">
              <div class="card-body">
                <h3 class="card-title">Ghidaq Earrings 18K White Gold With Akoya Pearls And Blue Sapphires</h3>
                <p class="card-text">Strike a dazzling note with this pair of 18k white gold earrings inspired by the beauty and rhythm of music. Just like a composer.</p>
                <p class="card-price">3000 SAR and up</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <section id="about">
          <header class="py-3 bgc2">
            <div class="container px-2 px-md-5 my-2">
                <div class="text-center cc4">
                    <h1 class="fw-bold">Ghidaq <i class="far fa-gem fa-lg"></i></h1>
                    <p class="lead fw-normal text-black-50">We are passionate about jewellery and to inspire the imagination.</p>
                </div>
            </div>
        </header>

        <div class="jumbotron jumbotron-fluid py-5" style="background-color: #1b2f26;">
          <div class="container mb-5" style="color: #FFE6CC">
            <div class="row">
              <div class="col-md-6">
                <img src="/img/pr.png" alt="Ghidaq" class="img-rounded" style="width: 450px; height: 450px;">
            </div>                              
              <div class="col-md-6">
                <h1 class="display-3 mb-2">Committed to Creating memories</h1><br>
                <p class="h3">About Us</p>
                <p class="h5 mb-4">Ghidaq Jewellery is a renowned luxury jewellery brand dedicated to creating exquisite pieces that inspire the imagination. With a deep passion for craftsmanship and design, we strive to deliver exceptional quality and timeless beauty in every creation.</p>
                  <p class="h3">Our Vision</p>
                  <p class="h5 mb-4">We believe in making every woman feel precious, unique, desirable and admired.</p>
                  <p class="h3">Our Mission</p>
                  <p class="h5 mb-4">Is to create well-being for modern women by offering desirable jewellery and an unparalleled customer experience and to be the house of jewellery design of choice for the celebrations of each important occasion in life.</p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </section>
            

      <div class="jumbotron jumbotron-fluid py-5 bgc2">
        <div class="container mb-5 cc4" >
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12 mb-5">
                    <h1>Ethically Crafted</h1>
                    <p class="h4" style="max-width: 550px;">Choose jewelry made with integrity and respect for people and the environment, reflecting your values with unmatched quality and consciousness.</p>
                  </div>
                  <div class="col-md-12">
                    <h1 style="margin-top: 50px;">Sustainably Sourced</h1>
                    <p class="h4" style="max-width: 550px;">Embrace stylish jewelry that cares for the planet, crafted from responsibly sourced materials, ensuring environmental responsibility without compromising beauty.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <img src="/img/pr2.jpg" alt="Image" style="width: 450px; height: 450px;">
              </div>
            </div>
          </div>
        </div>




        <div class="jumbotron jumbotron-fluid py-5" style="background-color: #1b2f26;">
          <div class="container mb-5" style="color: #FFE6CC">
            <div class="row">
              <div class="col-md-6">
                <img src="/img/pr3.jpg" alt="Image" style="width: 450px; height: 450px;">
            </div>                              
              <div class="col-md-6">
                <h1 class="display-4 mb-5">Our Promise</h1>
                <div class="d-flex align-items-start mb-4">
                  <i class="fas fa-shopping-bag fa-2x me-3"></i>
                  <p class="h3">Free worldwide shipping & returns</p>
                </div>

                <div class="d-flex align-items-start mb-4">
                  <i class="fas fa-hands-helping fa-2x me-3"></i>
                  <p class="h3">Ethically sourced and crafted</p>
                </div>
                <div class="d-flex align-items-start mb-4">
                  <i class="fas fa-gem fa-2x me-3"></i>
                  <p class="h3">Sustainable lab-grown diamonds</p>
                </div>
                <div class="d-flex align-items-start mb-4">
                  <i class="fas fa-shipping-fast fa-2x me-3"></i>
                  <p class="h3">Same day delivery Inselected cities</p>
                </div>
                <div class="d-flex align-items-start mb-4">
                  <i class="fas fa-undo fa-2x me-3"></i>
                  <p class="h3">Free return and exchange Up to 30 days</p>
                </div>
                <div class="d-flex align-items-start">
                  <i class="fas fa-phone fa-2x me-3"></i>
                  <p class="h3">Need help? Contact us</p>
                </div>
              </div>
            </div>
          </div> 
        </div>      
        
        <section id="contact">
        <div class="jumbotron jumbotron-fluid py-5 bgc2">
          <div class="container mb-5 cc4">
            <div class="row">                           
              <div class="col-md-6">
                <h5 class="display-5 mb-5">Get in Touch</h5>
                  <p class="h3">Phone</p>
                    <p class="h3 mb-5"> 800 122 2221</p>
                  <p class="h3">Email</p>
                    <p class="h3 mb-5">info@ghidaq.com</p>
                  <p class="h3 mb-4">Social</p>
                  <div class="social-icons my-2 mb-5">
                    <a href="#" class="social-icon mx-2"><i class="fa-brands fa-twitter fa-xl cc4"></i></a>
                    <a href="#" class="social-icon mx-2"><i class="fa-brands fa-instagram fa-xl cc4"></i></a>
                    <a href="#" class="social-icon mx-2"><i class="fa-brands fa-snapchat fa-xl cc4"></i></a>
                  </div>
                  <p class="h2">Ghidaq Jewellery </p>
                
              </div>
                <div class="col-md-6">
                  <img src="/img/pr3.jpg" alt="Image" style="width: 450px; height: 450px;">
                    </div>   
                  </div>
                </div>
      </section>
          
@endsection