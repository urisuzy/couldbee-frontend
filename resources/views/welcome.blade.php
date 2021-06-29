@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<main class="container mt-4 mb-4">
    <div class="col-12">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="rounded img-fluid" src="https://i0.wp.com/images.tokopedia.net/img/cache/1208/NsjrJu/2021/6/26/a3ea6c0f-0630-4c61-813b-9c32708e78e2.jpg.webp?resize=1300,325" alt="">
            </div>
            <div class="item">
                <img class="rounded img-fluid" src="https://i0.wp.com/images.tokopedia.net/img/cache/1208/NsjrJu/2021/6/22/b830128e-a76a-47c2-95dd-0878179ba15e.jpg.webp?resize=1300,325" alt="">
            </div>
            <div class="item">
                <img class="rounded img-fluid" src="https://i0.wp.com/images.tokopedia.net/img/cache/1208/NsjrJu/2021/6/26/6412eeff-de37-4c37-be25-0c508cbd76a6.jpg.webp?resize=1300,325" alt="">
            </div>
        </div>
    </div>
</main>
<div class="container">
    <div class="mb-2 text-center">
        <a href="/search?col=category&q=Bags" type="button" class="mb-1 btn btn-outline-info"><i class="fas fa-fire"></i> Bags</a>
        <a href="/search?col=category&q=Boots" type="button" class="mb-1 btn btn-outline-primary"><i class="fas fa-fire"></i> Boots</a>
        <a href="/search?col=category&q=Gadget" type="button" class="mb-1 btn btn-outline-info"><i class="fas fa-fire"></i> Gadget</a>
        <a href="/search?col=category&q=Laptop" type="button" class="mb-1 btn btn-outline-primary"><i class="fas fa-fire"></i> Laptop</a>
        <a href="/search?col=category&q=Motorcycle" type="button" class="mb-1 btn btn-outline-info"><i class="fas fa-fire"></i> Motorcycle</a>
        <a href="/search?col=category&q=Petcare" type="button" class="mb-1 btn btn-outline-primary"><i class="fas fa-fire"></i> Petcare</a>
        <a href="/search?col=category&q=Skincare" type="button" class="mb-1 btn btn-outline-info"><i class="fas fa-fire"></i> Skincare</a>
        <a href="/search?col=category&q=TV" type="button" class="mb-1 btn btn-outline-primary"><i class="fas fa-fire"></i> TV</a>
    </div>
    <div class="row">
        @foreach($products->product->data as $data)
        <div class="col-6 col-sm-3 col-md-2 my-2">
            @include('components.products.product-card', ['name' => $data->name, 'price' => $data->price, 'image' => $data->picture, 'store' => $data->store, 'id' => $data->id])
        </div>
        @endforeach
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        let owl = $(".owl-carousel")
        owl.owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 7000,
            autoplaySpeed: 2000,
        });
    });
</script>
@endsection