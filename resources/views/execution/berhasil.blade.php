@extends('app')
@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center"
        style="min-height: 100svh; min-width: 100svw;background-color: #748B97">
        <div class="animate__animated animate__lightSpeedInLeft
                animate__delay-1s text-center">
            <h1 style="color: white;font-weight: 700">ohhh wow, kamu berhasil ternyata! <br><br> Setau aku kamu suka baca,
                jadi tolong baca ini yaa... be ready! agak lebay <br><br>Selamat Membaca!
            </h1>

            <a href="{{ route('aura') }}" class="btn btn-lg btn-outline-light mt-5 px-5">next</a>
        </div>
    </div>
@endsection
