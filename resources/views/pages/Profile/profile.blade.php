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
            background: linear-gradient(to bottom,
                    rgba(92, 77, 66, 0.8) 0%,
                    rgba(92, 77, 66, 0.8) 100%),
                url("../assets/background.jpg");
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
                            <div class="card-body p-3">
                                <!-- Nested Row within Card Body -->
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Ονοματεπώνυμο</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                            id="name" placeholder="Δώστε Τίτλο Ανακοίνωσης" value="{{ $user->name }}">
                                        <!-- Error -->
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            name="email" id="email" placeholder="Δώστε Τίτλο Ανακοίνωσης"
                                            value="{{ $user->email }}">
                                        <!-- Error -->
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label for="old_password">Παλιός Κωδικός</label>

                                        <input type="password"
                                            class="form-control {{ $errors->has('old_password') ? 'is-invalid' : '' }}"
                                            name="old_password" id="old_password" placeholder="Δώστε Παλίο Κωδικό">
                                        @if ($errors->has('old_password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('old_password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Νέος Κωδικός</label>

                                        <input type="password"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            name="password" id="password" placeholder="Δώστε Νέο Κωδικό">
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label for="region_id">Περιοχή</label>
                                        <select class="form-control {{ $errors->has('teacher_id') ? 'is-invalid' : '' }}"
                                            name="region_id" id="region_id">
                                            @foreach ($regions as $region)
                                                <option value="{{ $region->id }}" @if ($region->id == $user->region_id)
                                                    selected
                                            @endif>{{ $region->name }}</option>
                                            @endforeach
                                        </select>

                                        <!-- Error -->
                                        @if ($errors->has('region_id'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('region_id') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success">Ενημέρωση</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
