<div class="col-md-4">
    <div class="card p-5 custom-card">
        <img src="{{Storage::url($parfum->img)}}" alt="Fragrance Routine">
        <p><span class="badge-custom mt-2 d-inline-block border-custom rounded-pill px-2 mt-3">{{$parfum->scent}}</span></p>
        <p class="card-title">{{$parfum->name}}</p>
        <p>{{$parfum->getBody()}}</p>
        <div class="d-flex flex-row justify-content-between">
            <p class="card-text pt-2">$ {{$parfum->price}} | 5 MIN READ</p> <a href=""><i class="bi bi-arrow-right link-dark fs-4"></i></a>
        </div>
    </div>
</div>