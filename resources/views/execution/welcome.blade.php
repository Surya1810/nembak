@extends('app')
@section('content')
    <div class="bg">
        <div class="container d-flex flex-column align-items-center justify-content-center"
            style="min-height: 100svh; min-width: 100svw";>
            <div class="animate__animated animate__lightSpeedInLeft
                animate__delay-1s text-center">
                <h1 style="color: white;font-weight: 700">Hi, main games yuu <br><br>
                </h1>
            </div>
            <div class="animate__animated animate__lightSpeedInLeft
                animate__delay-3s text-center">
                <h1 style="color: white;font-weight: 700">katanya kamu suka mystery games yaa? <br><br>
                </h1>
            </div>
            <div class="animate__animated animate__lightSpeedInLeft
                animate__delay-5s text-center">
                <h1 style="color: white;font-weight: 700">coba deh beresin games ini, easy kok...
                </h1>
                <a href="{{ route('games') }}" class="btn btn-lg btn-outline-light mt-5 px-5">next</a>
            </div>
        </div>
    </div>
@endsection
