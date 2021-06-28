<a href="/product/{{$id}}" class="text-decoration-none text-dark">
    <div class="card h-100 shadow ">
        <div>
            <span class="badge bg-warning position-absolute mx-3 my-3"><i class="fas fa-star"></i> 4.5</span>
            <img src="{{$image}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <b class="card-title">{{substr($name, 0, 30)}}</b>
            <p class="card-text">Rp {{number_format($price)}}</p>
            <span class="badge bg-primary mb-1"><i class="fas fa-shield-alt"></i> {{$store}}</span><br>
        </div>
    </div>
</a>