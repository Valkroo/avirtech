@extends('layouts.main')

@section('container')
<div class="av-bg-primary pt-112 pb-112">
    <div class="container-fluid text-center">
        <div class="row rounded-4 justify-content-center">
          <div class="col-sm-1 rounded-5 mb-3 av-bg-secondary">
            <small class="av-text-senary fw-600">CONTACT US</small>  
          </div>  
            <h1 class="mb-4 text-light fs-40 fw-700">Get in Touch</h1>
                <p class="av-text-neutral-80 fw-400 fs-16">Tell us how we can help and we’ll get in touch shortly.</p>
        </div>
    </div>
</div>
<div class="container pt-112 pb-112">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <form>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label fw-400 fs-16 av-text-neutral-120">First and last name</label><label for="exampleInputPassword1" class="form-label fw-600 fs-16 av-text-septenary">*</label>
                  <input type="text" class="form-control av-bg-neutral-30" id="exampleInputPassword1" placeholder="First and last name">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label fw-400 fs-16 av-text-neutral-120">Company</label><label for="exampleInputPassword1" class="form-label fw-600 fs-16 av-text-septenary">*</label>
                  <input type="text" class="form-control av-bg-neutral-30" id="exampleInputPassword1" placeholder="Company">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label fw-400 fs-16 av-text-neutral-120">Work Email</label><label for="exampleInputPassword1" class="form-label fw-600 fs-16 av-text-septenary">*</label>
                    <input type="email" class="form-control av-bg-neutral-30" id="exampleInputEmail1" placeholder="name@company.com">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label fw-400 fs-16 av-text-neutral-120">Message</label>
                    <textarea class="form-control av-bg-neutral-30" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                </div>
                <div class=" mb-5 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label fw-600 fs-16 av-text-neutral-100" for="exampleCheck1">I accept the</label> <label class="form-check-label fw-600 fs-16 av-text-octanary" for="exampleCheck1">terms and conditions</label>
                </div>
                <div class="d-grid">
                    <button class="btn av-bg-primary fw-600 fs-16 av-text-neutral-10" type="submit">Contact Us</button>
                  </div>
              </form>
        </div>
    </div>
</div>
@endsection