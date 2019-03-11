@extends('layout.app')

@section('header')
    <!-- Header -->
    <header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Portfolio blocks</h1>
            <p class="fs-18 opacity-70">Develop your pages by copy and pasting ready blocks</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->

@stop

@section('content')

<div class="section">
        <div class="container">

          <div class="row gap-y">
            <div class="col-12 col-md-6">
                {{$series->lessons->first()->title}}
                <vue-lessons default_lessons="{{$series->lessons}}"></vue-lessons>
            </div>
          </div>


        </div>
      </div>

      @stop