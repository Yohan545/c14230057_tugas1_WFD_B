<div style="margin: 50px;">
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih kategori
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/katalog')}}">All</a></li>
            <li><a class="dropdown-item" href="{{url('/kategori/handphone')}}">Handphone</a></li>
            <li><a class="dropdown-item" href="{{url('/kategori/tablet')}}">Tablet</a></li>
            <li><a class="dropdown-item" href="{{url('/kategori/smartwatch')}}">Smartwatch</a></li>
        </ul>
    </div>
</div>