<x-layout title="Review">
    <div class="container featured pt-5 mt-5">

        <div class="row pt-5 feedback" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="col-10 text-center py-5">
                <h1>All <em>feedbacks</em>.</h1>
            </div>
            <div class="col-2 text-center d-flex justify-content-center align-items-center">
                <div class="d-flex flex-row justify-content-between">
                    <p class="card-text pt-1 pe-3">SEE ALL</p> <a href="{{route('parfum.index')}}"><i class="bi bi-arrow-right link-dark fs-5"></i></a>
                </div>
            </div>
            @foreach ($parfums as $parfum)
            <x-card :parfum="$parfum" />
            @endforeach
        </div>


        <div class="row justify-content-center py-5 mb-5">
            <div class="col-12 col-md-6 p-5 mt-5 mb-5" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">

                <form method="POST" action="{{route('parfum.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Scent</label>
                        <input type="text" class="form-control @error('scent') is-invalid @enderror" name="scent" value="{{old('scent')}}">
                        @error('scent')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label class="form-label">Feedback</label>
                        <textarea name="body" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price">
                        @error('price')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                        @error('img')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-featured w-100 mt-5">Submit</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success mt-5">
                    {{ session('message')}}
                </div>
                @endif
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center p-5 flex-column mb-5">
                <img src="/images/sideform.png" class="img-fluid">
                <h2 class="fw-bold pt-5">Write your <em>feedback</em>.</h2>
                <p>Share your thoughts on our fragrances! 🌸 Your feedback helps us improve and create scents you’ll love even more. Let us know what you enjoyed, what could be better, or which notes stood out to you. Whether it’s a favorite or a new discovery, we’d love to hear your experience.</p>
                <p>Leave your review below and help others find their perfect scent!</p>

            </div>
        </div>
    </div>

</x-layout>