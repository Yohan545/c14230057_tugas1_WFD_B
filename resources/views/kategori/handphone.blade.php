@extends('base.layout')
@section('content')
@include('dropdown')
<div style="overflow-x: auto;">
    <div class="flex flex-wrap grid-cols-4 gap-16" style="margin: 50px;">
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/a55.avif') }}" alt="a55"
                style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Samsung Galaxy A55</p>
                <p class="card-text text-sm font-normal text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 6.699.000</p>
            </div>
        </div>

        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/s24.jpg') }}" alt="s24" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Samsung Galaxy S24 Ultra</p>
                <p class="card-text text-sm text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 17.999.000</p>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/s25.jpg') }}" alt="s25" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Samsung Galaxy S25 Ultra</p>
                <p class="card-text text-sm text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 22.999.000</p>
                <p class="card-text text-sm text-center">12 / 512</p>
                <p class="card-text text-large font-medium text-center">Rp 24.999.000</p>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/v40.jpeg') }}" alt="v40" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Vivo V40</p>
                <p class="card-text text-sm text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 6.999.000</p>
                <p class="card-text text-sm text-center">12 / 512</p>
                <p class="card-text text-large font-medium text-center">Rp 7.999.000</p>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/x200.png') }}" alt="x200" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Vivo X200</p>
                <p class="card-text text-sm text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 12.999.000</p>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/x8.png') }}" alt="x8" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Oppo X8</p>
                <p class="card-text text-sm text-center">12 / 256</p>
                <p class="card-text text-large font-medium text-center">Rp 13.999.000</p>
                <p class="card-text text-sm text-center">12 / 512</p>
                <p class="card-text text-large font-medium text-center">Rp 15.999.000</p>
            </div>
        </div>
    </div>
</div>
@endsection