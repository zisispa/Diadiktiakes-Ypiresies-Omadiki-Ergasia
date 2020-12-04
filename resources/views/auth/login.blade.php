@extends('layouts.welcome')

@section('css')

    <style>
        .vertical-center {
            min-height: 100%;
            /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh;
            /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }

        .bg {
            background-image: url('{{ asset('assets/background.jpg') }}');
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>

@endsection

@section('content')
    <div class="bg">
        <div class="vertical-center">
            <div class="container">

                <!-- Outer Row -->
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-6 inline-block">
                                        <div class="mt-5 ml-5">
                                            <img class="img-fluid" src="{{ asset('assets/login.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Καλώς ήρθατε πίσω!</h1>
                                            </div>
                                            <form class="user" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email"
                                                        class="form-control form-control-user  @error('email') is-invalid @enderror"
                                                        id="email" aria-describedby="emailHelp" placeholder="Εmail..."
                                                        name="email" value="{{ old('email') }}" autocomplete="email"
                                                        autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="password"
                                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                                        id="password" placeholder="Password..." name="password"
                                                        autocomplete="current-password" autofocus>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Είσοδος
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
