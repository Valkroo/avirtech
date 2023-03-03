@extends('admin.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/post" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back To My Post</a>
                <a href="/dashboard/post/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span>Edit</a>
                <form action="/dashboard/post/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
  
                    <button class="btn btn-danger" onclick="return confirm('Are You Sure Want to delete this??')"><span data-feather="trash-2" class="align-text-bottom"></span> Delete</button>
                  </form>
                    <div>
                        <img src="/image/detail.png" alt="" class="image-fluid mt-4" width="100%">
                    </div>
                <article class="my-3 fs-4">
                    {!!  $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection