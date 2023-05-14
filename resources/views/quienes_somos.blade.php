@extends('sidebar')
@section('title', '¿Quiénes somos?')
@section('content')
    <div class="row">
        <div class="col-5 col-md-3 titulos">
            <p style="titulos" class="ms-3">¿Quiénes somos?</p>
        </div>
    </div>

    <div class="row">
        <video width="100%" controls="">
            <source src="{{ asset('assets/video.mp4') }}" type="video/mp4">
            <source src="video/PARNET.ogg" type="video/ogg">Your browser does not support HTML5 video.
        </video>
    </div>

@endsection
