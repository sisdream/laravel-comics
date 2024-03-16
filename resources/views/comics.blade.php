@extends('layout.app')

@section('main-content')

<span class="fumetti py-2 px-3">CURRENT SERIES</span>
<div class="row pt-3 gx-3 gy-3 row-cols-6">
    @foreach($comics as $comic)
        <div class="comic">
            <div class="card-img">
                <img src="{{$comic['thumb']}}" alt="fumetto">
            </div>
            <h3 class="mt-2 text-uppercase">{{$comic['title']}}</h3>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center my-3">
    <button class="btn btn-primary rounded-0 custom-btn">LOAD MORE</button>
</div>
@endsection
