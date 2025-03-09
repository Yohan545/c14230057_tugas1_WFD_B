@extends('base.layout')
@section('content')
@include('dropdown')
<div style="overflow-x: auto;">
    <div class="flex flex-wrap grid-cols-4 gap-16" style="margin: 50px;">
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/tab s9 ultra.avif') }}" alt="a55"
                style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Samsung Galaxy Tab S9 </p>
                <p class="card-text text-sm text-center">8 / 128</p>
                <p class="card-text text-large font-medium text-center">Rp 11.999.000</p>
            </div>
        </div>

        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/tab s10 ultra.avif') }}" alt="s24" style="height: 15rem;">
            <div class="card-body"> 
                <p class="card-text text-xl font-medium text-center">Samsung Galaxy Tab S10 Ultra</p>
                <p class="card-text text-sm text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 22.999.000</p>
            </div>
        </div>
    </div>
</div>
@endsection