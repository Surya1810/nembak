@extends('app')
@section('content')
    <div class="bg">
        <div class="animate__animated animate__jello
            animate__delay-1s">
            <div class="container d-flex flex-column align-items-center justify-content-center"
                style="min-height: 100svh; min-width: 100svw">

                <h1 class="text-center display-2 mb-5" style="color: white;font-weight: 700">Penasaran ini apa?</h1>
                <a href="{{ route('welcome') }}" class="btn btn-lg btn-outline-light">let's find out</a>
            </div>
        </div>
    </div>
@endsection
