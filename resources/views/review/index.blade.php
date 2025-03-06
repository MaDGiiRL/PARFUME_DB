<x-layout title="Reviews">
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center py-5 mb-5">

            <div class="col-12 col-md-6 d-flex justify-content-center p-5 flex-column mb-5">
                <img src="/images/hand.png" class="img-fluid">
                <h2 class="fw-bold pt-5">Write your <em>review</em>.</h2>
                <p>Share your thoughts on our fragrances! 🌸 Your review helps us improve and create scents you’ll love even more.</p>

            </div>

            <div class="col-12 col-md-6 border shadow rounded bg-white p-5 mt-5 mb-5">

                <form method="POST" action="{{route('review.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Place</label>
                        <input type="text" class="form-control @error('place') is-invalid @enderror" name="where" value="{{old('where')}}">
                        @error('place')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label class="form-label">Comment</label>
                        <textarea name="comment" cols="30" rows="10" class="form-control">{{old('comment')}}</textarea>
                        @error('comment')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vote</label>
                        <select name="rate" class="form-control @error('rate') is-invalid @enderror">
                            @for($i = 1 ; $i <= 5 ; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                </section>
                                @error('rate')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                        </select>
                    </div>

                    <button type="submit" class="btn btn-featured w-100 mt-5">Submit</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success mt-5">
                    {{ session('message')}}
                </div>
                @endif
            </div>


            @foreach ($reviews as $review)
            <div class="col-md-4">
                <div class="review-card my-4">
                    <p>⭐⭐⭐⭐⭐ {{$review->rate}}</p>
                    <p>“{{$review->comment}}”</p>
                    <div class="row text-start">
                        <div class="col-2 d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 pb-3"></i>
                        </div>
                        <div class="col-4">
                            <h6>{{$review->name}}</h6>
                            <p class="text-muted text-uppercase">{{$review->where}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


    </div>

</x-layout>