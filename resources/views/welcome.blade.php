@extends('layouts.default')

@section('content')
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img width="100%" height="100%" class="bd-placeholder-img" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/6/26/a3ea6c0f-0630-4c61-813b-9c32708e78e2.jpg.webp?ect=4g" alt="">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <!--
                        <h1>Lebaran Trendi</h1>
                        <p>Tampil trendy dihari lebaran dengan outfit baru yang waw.</p>
                        <p><a class="mb-1 btn btn-lg btn-primary" href="#">Cek Sekarang</a></p>
                        -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img width="100%" height="100%" class="bd-placeholder-img" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/6/22/b830128e-a76a-47c2-95dd-0878179ba15e.jpg.webp?ect=4g" alt="">


                <div class="container">
                    <div class="carousel-caption">
                        <!--
                        <h1>Super Gadget Day</h1>
                        <p>Perbarui gadgetmu biar ga ketinggalan sama mantanmu, doi aja dah pake yang paling baru, kamu kapaan</p>
                        <p><a class="mb-1 btn btn-lg btn-primary" href="#">Perbarui Sekarang</a></p>
                        -->
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img width="100%" height="100%" class="bd-placeholder-img" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/6/26/6412eeff-de37-4c37-be25-0c508cbd76a6.jpg.webp?ect=4g" alt="">


                <div class="container">
                    <div class="carousel-caption text-end">
                        <!--
                        <h1>#ToTheMoon Halu</h1>
                        <p>Kesel liat porto kebakaran? shoppingin aja biar duit ga ilang percuma</p>
                        <p><a class="mb-1 btn btn-lg btn-primary" href="#">Liat Hot Product</a></p>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>
<div class="container">
    <div class="mb-2 text-center">
        <a href="/search?col=category&q=Bags" type="button" class="mb-1 btn btn-primary"><i class="fas fa-tv"></i> Bags</a>
        <a href="/search?col=category&q=Boots" type="button" class="mb-1 btn btn-info"><i class="fas fa-tv"></i> Boots</a>
        <a href="/search?col=category&q=Gadget" type="button" class="mb-1 btn btn-primary"><i class="fas fa-tv"></i> Gadget</a>
        <a href="/search?col=category&q=Laptop" type="button" class="mb-1 btn btn-primary"><i class="fas fa-tv"></i> Laptop</a>
        <a href="/search?col=category&q=Motorcycle" type="button" class="mb-1 btn btn-info"><i class="fas fa-tv"></i> Motorcycle</a>
        <a href="/search?col=category&q=Petcare" type="button" class="mb-1 btn btn-primary"><i class="fas fa-tv"></i> Petcare</a>
        <a href="/search?col=category&q=Skincare" type="button" class="mb-1 btn btn-info"><i class="fas fa-tv"></i> Skincare</a>
        <a href="/search?col=category&q=TV" type="button" class="mb-1 btn btn-info"><i class="fas fa-tv"></i> TV</a>
    </div>
    <div class="row">
        @foreach($products->product->data as $data)
        <div class="col-6 col-sm-3 col-md-2 my-2">
            @include('components.products.product-card', ['name' => $data->name, 'price' => $data->price, 'image' => $data->picture, 'store' => $data->store, 'id' => $data->id])
        </div>
        @endforeach
    </div>
</div>
@endsection