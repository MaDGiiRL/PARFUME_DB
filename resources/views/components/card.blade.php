<div class="col-md-4" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <div class="card p-5 custom-card my-4">
        <img src="{{Storage::url($parfum->img)}}" alt="Fragrance Routine">
        <p><span class="badge-custom mt-2 d-inline-block border-custom rounded-pill px-2 mt-3">{{$parfum->scent}}</span></p>
        <p class="card-title">{{$parfum->name}}</p>
        <p>{{$parfum->getBody()}}</p>
        <div class="d-flex flex-row justify-content-between">
            <p class="card-text pt-2">$ {{$parfum->price}} | 5 MIN READ</p> <a href="{{route('parfum.show' , compact('parfum'))}}"><i class="bi bi-arrow-right link-dark fs-4"></i></a>
        </div>
    </div>
</div>