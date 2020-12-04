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
                                            <img class="img-fluid mt-5" src="{{ asset('assets/login.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Γίνεται μέλος!</h1>
                                            </div>
                                            <form class="user" method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Όνοματεπώνυμο</label>

                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>


                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Κωδικός</label>


                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="form-group">
                                                    <label for="password-confirm">Επαλήθευση Κωδικού</label>


                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required autocomplete="new-password">

                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Εγγραφή
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
