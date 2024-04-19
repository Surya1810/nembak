@extends('app')
@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center"
        style="min-height: 100svh; min-width: 100svw;background-color: #748B97">
        <div class="card animate__animated animate__fadeInDown text-center rounded-3">
            <div class="card-body px-4 py-5 px-md-5">
                <h2 class="animate__animated animate__fadeInDown animate__delay-1s" style="font-weight: 700">Yuu cobain
                </h2>
                <div class="lagu">
                    <p class="animate__animated animate__fadeInDown animate__delay-1s">Ini buat temenin kamu, play yaa</p>
                    <audio Controls loop class="animate__animated animate__fadeInDown animate__delay-1s">
                        <source src="{{ asset('assets/music/ojo.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                <form class="animate__animated animate__fadeInDown animate__delay-1s" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <!-- Username input -->
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="username" :value="__('Username')">Username</label>
                        <input id="username" type="username" name="username" :value="old('username')" required autofocus
                            type="username" class="form-control" autocomplete="off" />
                        @if ($errors->any())
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="password" :value="__('Password')">Password</label>
                        <input id="password" type="password" name="password" required class="form-control"
                            autocomplete="off" />
                        @if ($errors->any())
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-lg btn-dark my-4 px-5">
                        {{ __('Log in') }}
                    </button>
                    <!-- Register buttons -->
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <p>Hint</p>
                            <i class="fa-regular fa-circle-question fa-2xl"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-uppercase mb-0">Hint</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h6>kamu harus cari username & passwordnya sendiri yaa, nihh aku kasih clue.</h6>
                                <div class="text-start">
                                    <h5>- Username: asal kata dari nama boneka kesayangan aku</h5>
                                    <h5>- Password: tanggal chat dm pertama, 8 angka</h5>
                                </div>
                                <br>
                                <H3>Semoga ketemu yaa</H3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
