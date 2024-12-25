@extends('master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('post#home') }}" class="text-decoration-none text-black">
                        <i class="fa-solid fa-arrow-left"></i>Back
                    </a>
                </div>
                <h3>{{ $post['title'] }}</h3>
                <p> {{ $post['description'] }} </p>
                {{-- <form action="" method="POST">
                    @csrf
                    <input type="text" class="form-control my-3" value="{{ $post['title'] }}" placeholder="Enter Title">
                    <textarea class="form-control" name="" id="" cols="30" rows="10"> {{ $post['descritption'] }} </textarea>
                </form> --}}
            </div>
        </div>
        <div class="row my-4">
            <div class="col3 offset-8">
                <a href="{{ route('post#editPage', $post['id'] ) }}">
                    <button class="btn btn-dark">Edit</button>
                </a>
            </div>
        </div>
    </div>


@endsection
