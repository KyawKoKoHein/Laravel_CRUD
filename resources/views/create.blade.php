@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            {{-- first column --}}
            <div class="col-5">
                <div class="shadow p-3">
                    @if (session('insertSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('insertSuccess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('post#insertPage') }}" method="POST">
                        @csrf
                        <div class="text-group m-2">
                            <label for="" class="">Post Title</label>
                            <input type="text" name="postTitle" id="" class="form-control"
                                placeholder="Enter Post Title" required>
                        </div>

                        <div class="text-group m-2">
                            <label for="" class="">Post Description</label>
                            <textarea name="postDescription" class="form-control" id="" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="m-2">
                            <input type="submit" value="Create" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

            {{-- second column --}}
            <div class="col-7">
                <div class="data-container">
                    @foreach ($postData as $item)
                        <div class="post p-3 shadow mb-4">
                            <h5>{{ $item['title'] }}</h5>
                            {{-- <p class="text-muted">{{$item['description']}}</p> --}}
                            <p class="text-muted">{{ Str::words($item['description'], 30, '...') }}</p>
                            <div class="text-end">
                                <a href="{{ route('post#delete', $item['id']) }}">
                                    <button class="btn btn-sm btn-none"><i
                                            class="fa-solid fa-trash text-danger"></i></button>
                                </a>
                                <a href="{{ route('post#readMorePage', $item['id']) }}">
                                    <button class="btn btn-sm btn-none"><i
                                            class="fa-solid fa-arrow-right text-primary"></i></button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
