@extends('base.layout')
@section('content')
@include('dropdown')
<div style="overflow-x: auto;">
    <div class="flex flex-wrap grid-cols-4 gap-16" style="margin: 50px;">
        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/watch7.avif') }}" alt="a55"
                style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Samsung Watch 7</p>
                <p class="card-text text-large font-medium text-center">Rp 4.999.000</p>
            </div>
        </div>

        <div class="card shadow-lg" style="width: 18rem; height: 30rem;">
            <img class="overflow-hidden card-img-top" src="{{ asset('gambar/watch ultra.avif') }}" alt="s24" style="height: 15rem;">
            <div class="card-body">
                <p class="card-text text-xl font-medium text-center">Samsung Watch Ultra</p>
                <p class="card-text text-large font-medium text-center">Rp 8.999.000</p>
            </div>
        </div>
    </div>
</div>
@endsection