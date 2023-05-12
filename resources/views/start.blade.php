@extends('layouts.public')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding dimentioncontent">

  <!-- First Photo Grid-->
  <div class="row-padding padding-16 center">

      <div class="quarter" >
          <div class="inline-block">
              <div class="centerimages">
                  <img src="images/logo-oasi.jpg" alt="Oasi" class="width100">              
              </div>
          </div>
          <h3>Oasi</h3>
      </div>

      <div class="quarter">
          <div class="inline-block">
              <div class="centerimages">
                  <img src="images/Apple-Logo.png" alt="Apple" class="width100">
              </div>
          </div>
          <h3>Apple</h3>
      </div>
      
      <div class="quarter">
          <div class="inline-block">
              <div class="centerimages">
            <img src="images/Conad-logo.png" alt="Conad" class="width100">
              </div>
          </div>
            <h3>Conad</h3>
      </div>
      
      <div class="quarter">
          <div class="inline-block">
              <div class="centerimages">
            <img src="images/samsung-logo.jpg" alt="Samsung" class="width100">
              </div>
          </div>
            <h3>Samsung</h3>
      </div>
      
  </div>
  
  <!-- Second Photo Grid-->
  <div class="row-padding padding-16 center">
      
      <div class="quarter" >
          <div class="inline-block">
              <div class="centerimages">
                  <img src="images/Timberland-Logo.png" alt="Timberland" class="width100">
              </div>
          </div>
          <h3>Timberland</h3>
      </div>
      
      <div class="quarter " >
          <div class="inline-block">
              <div class="centerimages">
                  <img src="images/logo-puma.png" alt="Puma" class="width100">
              </div>
          </div>
          <h3>Puma</h3>
      </div>
      
      <div class="quarter " >
          <div class="inline-block">
              <div class="centerimages">
                  <img src="images/Coop-logo.png" class="width100" alt="Coop" >
              </div>
          </div>
          <h3>Coop</h3> 
      </div>
      
      <div class="quarter" >
          <div class="inline-block">
              <div class="centerimages">
                  <img src="images/HP_logo.png" class="width100" alt="HP" >
              </div>
          </div>              
          <h3>HP</h3>
      </div> 
      
  </div>
  
</div>
  
  <!-- Pagination -->
  <div class="center padding-32">
    <div class="bar">
      <a href="#" class="bar-item button hover-black">«</a>
      <a href="#" class="bar-item black button">1</a>
      <a href="#" class="bar-item button hover-black">2</a>
      <a href="#" class="bar-item button hover-black">3</a>
      <a href="#" class="bar-item button hover-black">4</a>
      <a href="#" class="bar-item button hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="container padding-32 center">  
    <h3>About Me, The Food Man</h3><br>
    <img src="/w3images/chef.jpg" alt="Me" class="imageunder" style="display:block;margin:auto" width="800" height="533">
    <div class="padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
@endsection

