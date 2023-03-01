@extends('layouts.main')

@section('container')
<div class="container mt-112">
  <div class="me-112 ms-112">
    <div class="d-flex gap-2">
      <a href="/Blog" class="text-decoration-none fw-400 fs-16 text-dark">
        <div class="">Blog</div>
      </a>
      <i class="bi bi-chevron-right"></i>  
      <div class="fw-600 fs-16">Agriculture</div>
    </div>
      <h1 class="fw-600 fs-40 pt-3">{{ $post->title }}</h1>
      <div class="d-flex gap-3 mt-5">
        <div>
          <img src="/image/Avatar Image.png" alt="">
        </div>
        <div class="me-auto">
          <div class="fw-600 fs-16">Nurhayati</div>
          <div class="fw-400 fs-14">11 Jan 2022 • 5 min read</div>
        </div>
        <div>
          <div class="d-flex gap-2">
            <a href="" class="text-decoration-none"><img src="/svg/file.svg" alt="download"></a>
            <a href="" class="text-decoration-none"><img src="/svg/twitter.svg" alt="twitter"></a>
            <a href="" class="text-decoration-none"><img src="/svg/linkedin.svg" alt="linkedin"></a>
            <a href="" class="text-decoration-none"><img src="/svg/fbsvg.svg" alt="Facebook"></a>
          </div>
        </div>
      </div>
  </div>
    <img src="/image/detail.png" alt="" class="image-fluid mt-80" width="100%">
      <article class="me-112 ms-112 mt-104 av-text-neutral-120">    
          {!! $post->body !!}
          <p class="fw-600 fs-18 mb-3">Share this post</p>
          <div class="d-flex mb-5">
            <div class="me-auto">
              <div class="d-flex gap-2">
                <a href="" class="text-decoration-none"><img src="/svg/file.svg" alt=""></a>
                <a href="" class="text-decoration-none"><img src="/svg/linkedin.svg" alt=""></a>
                <a href="" class="text-decoration-none"><img src="/svg/twitter.svg" alt=""></a>
                <a href="" class="text-decoration-none"><img src="/svg/fbsvg.svg" alt=""></a>
              </div>
            </div>
            <div>
              <button class="btn av-bg-neutral-30 fw-600 fs-14">Agriculture</button>
            </div>
          </div>
          <hr>
          <div class="d-flex gap-3 mt-5 pb-80">
            <div>
              <img src="/image/Avatar Image.png" alt=""  >
            </div>
            <div class="fs-16">
              <div class="fw-600">Nurhayati</div>
              <div class="fw-400">Content Writer, Avirtech</div>
            </div>
          </div> 
      </article>
</div>
@endsection