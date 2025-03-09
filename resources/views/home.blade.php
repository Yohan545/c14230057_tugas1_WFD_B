@extends('base.layout')
@section('content')
<div class="grid grid-flow-col grid-rows-2 gap-5" style="overflow-x: auto;">
    <div style="margin: 50px;">
        <p class="font-serif text-5xl" style="margin-bottom: 30px;">CARI GADGET YANG KAMU INGINKAN DISINI</p>
        <a class="btn btn-danger underline" href="{{url('/katalog')}}">See Our Product 🛒</a>
        <div class="grid grid-cols-2 gap-10" style="margin-top: 40px;">
            <div>
                <img class="h-70 w-auto mx-auto object-contain" src="{{ asset('gambar/s25.jpg') }}" alt="s25">
            </div>
            <div>
                <img class="h-70 w-auto mx-auto object-contain" src="{{ asset('gambar/tab s10 ultra.avif') }}" alt="s24">
            </div>
        </div>
    </div>

    <div style="margin: 50px;">
        <p class="font-serif text-3xl">See Our Collaborator</p>
        <div class="grid grid-cols-3 gap-30">
            <div class="text-center">
                <img class="h-48 w-auto mx-auto object-contain" src="{{ asset('gambar/samsung.png') }}" alt="samsung">
                <a class="btn btn-light underline" href="{{url('https://www.samsung.com/id/')}}">More Info</a>
            </div>
            <div class="text-center">
                <img class="h-48 w-auto mx-auto object-contain" src="{{ asset('gambar/vivo.png') }}" alt="vivo">
                <a class="btn btn-light underline" href="{{url('https://www.vivo.com/id')}}">More Info</a>
            </div>
            <div class="text-center">
                <img class="h-48 w-auto mx-auto object-contain" src="{{ asset('gambar/oppo.jpg') }}" alt="oppo">
                <a class="btn btn-light underline" href="{{url('https://www.oppo.com/id/')}}">More Info</a>
            </div>
        </div>
    </div>
</div>
<div style="margin: 50px;">
    <p class="font-serif text-center text-3xl">Find Us</p>
    <div class="flex justify-center items-center gap-4 mt-4">
        <a href="{{ url('https://www.instagram.com/erafonestores/') }}">
            <img class="h-10 rounded-full" src="{{ asset('gambar/ig.png') }}" alt="ig">
        </a>
        <a href="{{ url('https://www.tiktok.com/@erafonestores') }}">
            <img class="h-10 rounded-full" src="{{ asset('gambar/tiktok.jpg') }}" alt="tiktok">
        </a>
        <a href="{{ url('https://www.erafone.com/') }}">
            <img class="h-10 rounded-full" src="{{ asset('gambar/browser.jpg') }}" alt="browser">
        </a>
    </div>
</div>
@endsection