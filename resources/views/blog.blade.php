@extends('layouts.main')

@section('container')

@if ($posts->count())
<div class="container text-center pt-4">
    <a class="btn av-bg-neutral-30 av-text-neutral-120 fw-600 fs-16 me-32" href="#" role="button">All</a>
    <a class="btn fw-500 fs-16 av-text-neutral-100 me-32" href="#" role="button">Product</a>
    <a class="btn fw-500 fs-16 av-text-neutral-100 me-32" href="#" role="button">stories</a>
    <a class="btn fw-500 fs-16 av-text-neutral-100" href="#" role="button">Company</a>
    <div class="mb-5 mt-5 text-start">
        <div class="row g-0 justify-content-center">
          <div class="col-lg-5">
            <img src="image/image 1.png" class="img-fluid rounded-start" alt="..." width="100%">
          </div>
          <div class="col-lg-6 av-bg-neutral-30 rounded-end">
            <div class="card-body pe-5">
              <div class="d-flex pt-5 mb-4 ms-5">
                <div class="av-bg-neutral-50 rounded-3 me-3">
                <button class="btn fw-600 fs-14 av-text-neutral-120"> Category</button>
                </div>
                <div class="fw-500 fs-14 av-text-neutral-120 pt-2">
                  5 min read
                </div>
              </div>
              <h3 class="fw-600 fs-32 av-text-neutral-120 ps-5">{{ $posts[0]->title }}</h3>
              <p class="fw-400 fs-14 av-text-neutral-110 ps-5">{{ $posts[0]->excerpt }}</p>
              <p class=" ps-5"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none fw-500 fs-16 av-text-tertiary">Read more <i class="bi bi-arrow-right"></i></a></p>
            </div>
          </div>
        </div>
    </div>
    <div class="pb-80 text-start">
          <div class="row row-cols-md-2 g-5 justify-content-center">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-5">
              <div class="av-bg-neutral-30 rounded-3">
                <img src="image/image 2.png" class="card-img-top rounded-top-3" alt="...">
                <div class="card-body pe-4">
                  <div class="d-flex pt-5 mb-4 ms-4">
                    <div class="av-bg-neutral-50 rounded-3 me-3">
                    <button class="btn fw-600 fs-14 av-text-neutral-120"> Category</button>
                    </div>
                    <div class="fw-500 fs-14 av-text-neutral-120 pt-2">
                      7 min read
                    </div>
                  </div>
                  <h4 class="fw-600 fs-28 av-text-neutral-120 ps-4 mb-4">{{ $post->title }}</h4>
                  <p class="fw-400 fs-14 av-text-neutral-110 ps-4">{{ $post->excerpt }}</p>
                  <p class="ps-4 pb-32"><a href="/post/{{ $post->slug }}" class="text-decoration-none fw-500 fs-16 av-text-tertiary">Read more <i class="bi bi-arrow-right"></i></a></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
    </div>
</div>
  @else
  <p>no post found</p>  
@endif
@endsection