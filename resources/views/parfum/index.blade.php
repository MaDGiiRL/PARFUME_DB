<x-layout class="All Feedbacks">
    <div class="container pt-5 mt-5 pb-5 mb-5">
        <div class="row pt-5 feedback">
            @foreach ($parfums as $parfum)
            <x-card :parfum="$parfum" />
            @endforeach
        </div>
    </div>
</x-layout>