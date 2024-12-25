@extends('master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('post#readMorePage', $post['id']) }}" class="text-decoration-none text-black">
                        <i class="fa-solid fa-arrow-left"></i>Back
                    </a>
                </div>
                <form action="{{ route('post#updatePage') }}" method="POST">
                    @csrf

                    <input type="hidden" name="postId" value="{{ $post['id'] }}">
                    <label for="">Post Title</label>
                    <input type="text" class="form-control my-3" name="postTitle" value="{{ $post['title'] }}" placeholder="Enter Title">
                    <label for="">Post Description</label>
                    <textarea class="form-control my-3" name="postDescription" id="" cols="30" rows="10"> {{ $post['description'] }} </textarea>

                    <input type="submit" value="Update" class="btn bg-dark my-3 text-white float-end">
                </form>
            </div>
        </div>
    </div>


@endsection
