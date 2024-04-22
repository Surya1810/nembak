@extends('app')
@section('content')
    <div class="bg">
        <div class="container d-flex flex-column align-items-center justify-content-center"
            style="min-height: 100svh; min-width: 100svw">
            <div class="animate__animated animate__lightSpeedInLeft
                animate__delay-1s text-center">
                <h1 style="color: white;font-weight: 700">Ciee Berhasil! <br><br> Kamu suka baca kan? Baca ini deh... be
                    ready!
                    agak lebay...
                </h1>

                <a href="{{ route('aura') }}" class="btn btn-lg btn-outline-light mt-5 px-5">next</a>
            </div>
        </div>
    </div>
@endsection
