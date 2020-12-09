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
    <section class="page-section" id="search">
        <div class="container justify-content-center">
            <h2 class="text-center mt-0">Κάνε την αναζήτηση που θέλεις</h2>
            <hr class="divider my-4" />
            <div id="alerted">
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-group">
                        <label for="select_region">Επέλεξε την περιοχή σου:</label>
                        <select id="select_region" name="select_region" class="form-control">
                            {{-- <option>Περιοχή</option> --}}
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select_products">Επέλεξε τα προιόντα:</label>
                        <select id="select_products" name="select_products" class="form-control">
                            {{-- <option>Προιόντα</option> --}}
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="select_products">Επέλεξε τα προιόντα: </label>
                        <select class="js-example-basic-multiple form-control" name="select_products[]" id="select_products"
                            multiple="multiple">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>
            </div>

            <div id="accordion" class="result_div">
                @if (count($shops) == 0)
                    <div class="text-center">Κάνε την αναζήτηση σου..</div>
                @else
                    @foreach ($shops as $shop)
                        <div class="card mb-3">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapse{{ $shop->id }}"
                                aria-expanded="false" aria-controls="collapse{{ $shop->id }}">
                                <div class="m-1" id="heading{{ $shop->id }}">
                                    <div class="d-flex justify-content-between">
                                        <div class="row align-items-center">
                                            <img src="{{ $shop->image }}" class="rounded ml-1 mr-3" alt="image" />
                                            <p class="font-weight-bold">{{ $shop->name }}</p>
                                        </div>
                                        <div class="row align-items-center mr-1">
                                            <p class="font-weight-bold"><i class="fas fa-user mr-1"
                                                    style="color: #FF3F3F"></i>Επισκέπτες:
                                                {{ $shop->visitors }}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </button>

                            <div id="collapse{{ $shop->id }}" class="collapse" aria-labelledby="heading{{ $shop->id }}"
                                data-parent="#accordion">
                                <div class="card-body mx-2">
                                    <p class="font-weight-normal"><span class="font-weight-bold"><i
                                                class="fas fa-map-marker-alt mr-2"></i>Διεύθυνση:</span>
                                        {{ $shop->address }}
                                    </p>
                                    <p class="font-weight-normal"><span class="font-weight-bold"><i
                                                class="far fa-clock mr-1"></i>Ώρες:</span>
                                        Κλείνει στις 8:00 μ.μ.
                                    </p>
                                    <p class="font-weight-normal"><span class="font-weight-bold"><i
                                                class="fas fa-phone mr-1"></i>Τηλέφωνο:</span>
                                        {{ $shop->phone }}
                                    </p>
                                    <p class="font-weight-bold mt-5 mb-4">Προιόντα:
                                    </p>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Προιόνον</th>
                                                <th>Απόθεμα</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            @foreach ($shop->products as $product)
                                                <tr class="text-center">
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->quantity }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Footer-->
    @include('components.Sections.footer')

@endsection


@section('scripts')

    <script>
        $(document).ready(function() {
            // $('.js-example-basic-multiple').select2();


            $('#select_region').change(function() {
                var region = $('#select_region').val();
                //var supermarket_address = $('#select_address').val();
                if (region) {

                    $.ajax({
                        type: "get",
                        url: "{{ url('/getshops') }}/" + region,
                        success: function(data) {

                            console.log(data);
                        }
                    });
                }
            });
        });


        // $('#select_products').change(function() {

        //     // var supermarket_address = $('#select_address').val();
        //     var product = $(this).val();


        // });

    </script>
    {{-- + "/" + product --}}
@endsection


{{-- var tbody = document.querySelector('.result_div');
var str = '';
data.forEach(element => {
console.log(element);
return str +=
` <button class="btn collapsed" data-toggle="collapse" data-target="#collapse${element.id}" aria-expanded="false"
    aria-controls="collapse${element.id}">
    <div class="m-1" id="heading${element.id}">
        <div class="d-flex justify-content-between">
            <div class="row align-items-center">
                <img src="${element.image}" class="rounded ml-1 mr-3" alt="image" />
                <p class="font-weight-bold">${element.name}</p>
            </div>
            <div class="row align-items-center mr-1">
                <p class="font-weight-bold"><i class="fas fa-user mr-1" style="color: #FF3F3F"></i>Επισκέπτες:
                    ${element.visitors}
                </p>
            </div>
        </div>

    </div>
</button>

<div id="collapse${element.id}" class="collapse" aria-labelledby="heading${element.id}" data-parent="#accordion">
    <div class="card-body mx-2">
        <p class="font-weight-normal"><span class="font-weight-bold"><i
                    class="fas fa-map-marker-alt mr-2"></i>Διεύθυνση:</span>
            ${element.address}
        </p>
        <p class="font-weight-normal"><span class="font-weight-bold"><i class="far fa-clock mr-1"></i>Ώρες:</span>
            Κλείνει στις 8:00 μ.μ.
        </p>
        <p class="font-weight-normal"><span class="font-weight-bold"><i class="fas fa-phone mr-1"></i>Τηλέφωνο:</span>
            ${element.phone}
        </p>
        <p class="font-weight-bold mt-5 mb-4">Προιόντα:
        </p>
    </div>
</div>`;
});
return tbody.innerHTML = str;
}) --}}
