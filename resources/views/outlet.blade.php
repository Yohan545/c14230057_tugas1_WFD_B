@extends('base.layout')
@section('content')
<div style="overflow-x: auto;">
    <div class="flex flex-wrap grid-cols-4 gap-16" style="margin: 50px;">
        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet1.jpg') }}" alt="outlet1"
                style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">ERAFONE KARAH AGUNG</p>
                <p class="card-text text-sm">Jl. Karah Agung No.12, Karah, Kec. Jambangan, Surabaya, Jawa Timur 60232</p>
                <a href="https://maps.app.goo.gl/gKpCEnaYjAXGPs1Q7" class="btn btn-danger">Go to maps</a>
            </div>
        </div>

        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet2.jpg') }}" alt="outlet2" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">ERAFONE KUTISARI SURABAYA</p>
                <p class="card-text text-sm">Jl. Kutisari Sel. No.39, Kutisari, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60291</p>
                <a href="https://maps.app.goo.gl/YmMRkTGhncxSdLaz8" class="btn btn-danger">Go to maps</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet3.jpg') }}" alt="outlet3" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">Erafone Lantai 3 Plaza Marina Surabaya</p>
                <p class="card-text text-sm">Plaza Marina, Lt. 3, Jl. Margorejo Indah Utara, Sidosermo, Wonocolo, Surabaya, East Java 60239</p>
                <a href="https://maps.app.goo.gl/8PUvwEmfEtLCRtoK8" class="btn btn-danger">Go to maps</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet4.jpg') }}" alt="outlet4" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">Erafone Tenggilis</p>
                <p class="card-text text-sm">Jl. Raya Tenggilis No.114, Tenggilis Mejoyo, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60292</p>
                <a href="https://maps.app.goo.gl/F13gJFBLfNKPz3LAA" class="btn btn-danger">Go to maps</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet5.jpg') }}" alt="outlet5" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">Erafone - Trans Icon Mall</p>
                <p class="card-text text-sm">Lantai G, unit 19 60235, Jl. Ahmad Yani No.260, Siwalankerto, Kec. Wonocolo, Surabaya, Jawa Timur 60235</p>
                <a href="https://maps.app.goo.gl/CUF2nbwBT4zYCVq88" class="btn btn-danger">Go to maps</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet6.jpg') }}" alt="outlet6" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">Samsung Premium Store Partnership by Erafone - Ruko Merr Surabaya</p>
                <p class="card-text text-sm">Jl. Dr. Ir. H. Soekarno No.374-374A, Kedung Baruk, Kec. Rungkut, Surabaya, Jawa Timur 60298</p>
                <a href="https://maps.app.goo.gl/ykR5GQnrK2C51HT29" class="btn btn-danger">Go to maps</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 25rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/outlet7.jpg') }}" alt="outlet7" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text font-medium">Erafone & More Raya Manyar Surabaya</p>
                <p class="card-text text-sm">Jl. Raya Manyar No.85, Menur Pumpungan, Kec. Sukolilo, Surabaya, Jawa Timur 60118</p>
                <a href="https://maps.app.goo.gl/8Fi6D6nxnt6cyAN66" class="btn btn-danger">Go to maps</a>
            </div>
        </div>
    </div>
</div>
@endsection