@extends('layouts.welcome')

@section('content')
    {{--
    <!-- Navigation-->
    @include('components.Navbar.index') --}}

    <!-- MAIN Section-->
    @include('components.Sections.main')

    <!-- ΠΛΗΡΟΦΟΡΙΕΣ Section-->
    @include('components.Sections.informations')

    <!-- ΥΠΗΡΕΣΙΑ Section-->
    @include('components.Sections.services')

    <!-- ΑΝΑΖΗΤΗΣΗ Section-->
    @include('components.Sections.search')

    <!-- ΟΜΑΔΑ Section-->
    @include('components.Sections.team')

    <!-- Footer-->
    @include('components.Sections.footer')

@endsection
