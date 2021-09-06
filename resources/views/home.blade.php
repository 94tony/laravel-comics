@extends('templates.base')
@section('title' , 'Home')
@section('main')
    <div class="bg-main">
        <div class="container">
            <div class="row comics-box">
                @foreach($comics as $comicsSingle) <!-- cicliamo nel nostro array database(comics) e ci facciamo stampare il necessario x il leyaout -->
                    <div class="cards">
                        <a href="/anteprima/{{ $loop->index }}"> <!-- con loop possiamo far si che ci ritorni un certo tipo di dato in questo caso un index che inviamo alla single card -->
                            <div class="img-container">
                                <img src="{{$comicsSingle['thumb']}}" alt="{{$comicsSingle['series']}}">
                            </div>
                            <span>{{$comicsSingle['series']}}</span>   
                        </a>
                    </div> 
                @endforeach
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
       
 @endsection