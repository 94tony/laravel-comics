@extends('templates.base')
@section('title' , 'anteprima')
@section('main')
<div class="jumbotron-card">
   <div class="container">
         <div class="field-content">
            <div class="content-type">COMIC BOOK</div>
            <img src="{{ $comics[$id]['thumb'] }}" alt="">
            <div class="nav-pic">VIEW GALLERY</div>
         </div>

      </div>
   
   </div>

   <div class="row-blue">
   </div>

   <div class="container">
      <div class="row">
         <div class="col-9 info">
            <h1>{{ $comics[$id]['title'] }}</h1>
            <div class="container">
               <div class="row cont-prezzo">
                  <div class=" prezzo">
                     <span >U.S Price: <span class="numb-price">{{ $comics[$id]['price'] }}</span></span>
                     <span>AVAILABLE</span>
                  </div>
                  <span class="col-8 check">check availability</span>
               </div>
            </div>
            <div>
               <p>{{ $comics[$id]['description'] }}</p>
            </div>
         </div>
         
      </div>
   </div>
       
 @endsection