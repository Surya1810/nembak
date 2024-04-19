@extends('app')
@section('content')
    <div class="bg-ending">
        <div class="container d-flex flex-column align-items-center justify-content-center text-center"
            style="min-height: 100svh; min-width: 100svw">
            <div class="animate__animated animate__fadeIn
                animate__delay-3s">
                <h1 style="color: white;font-weight: 700">i love you, i love us</h1>

                <a href="{{ route('find') }}" class="btn btn-lg btn-outline-light mt-5 px-5">find me</a>
            </div>
        </div>
    </div>
@endsection
