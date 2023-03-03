@extends('layouts.main')

@section('container')
<div class="av-bg-primary pt-112">
    <div class="container-fluid text-center">
      <h1 class="mb-4 text-light fs-40 fw-700">Bringing About Agriculture 4.0</h1>
        <p class="fw-400 fs-16 av-text-neutral-80">We help plantations convert data into actionable decisions and optimize 
          <br> business by reducing cost and increasing yields. And we do so at scale 
          <br> with cutting edge connectivity solutions and image processing
            <br> technologies to enable true smart plantations.</p>
        <form class="d-flex mb-138 justify-content-center" >
          <button class="btn av-text-neutral-default fw-600 fs-16 mt-32 me-3" type="submit">Request Demo</button>
          <button class="btn av-border-neutral-default av-text-neutral-10 fw-600 fs-16 mt-32" type="submit"><i class="bi bi-caret-right"></i> Watch The Video</button>
        </form>
        <div class="mb-18 fw-600 fs-12 av-text-quinary">
          TRUSTED BY
          <br>
        </div>
        <div class="d-flex justify-content-center pb-136">
          <div>
            <img src="image/Sinarmas.png" class="pe-32" alt="">
            <img src="image/ST Engineering.png" class="pe-32" alt="">
            <img src="image/PGN.png" alt="" class="pe-32">
            <img src="image/ggf.png"  alt="">
          </div>
        </div>
    </div>
  </div>
    <div class="mt-80">
      <div class="d-flex text-center justify-content-center mb-80">
        <div>
          <div class="fw-600 fs-36 av-text-neutral-120">Are you looking increase yield wtih <br>less cost?</div>
            <div class="fw-400 fs-16 av-text-neutral-100 mt-3">Avirtech provides closed-loop optimization process to completely relook at the way 
            <br> your operations is being done with a long term roadmap to make your plantation 
              <br> more sustainable and profitable over the next decade.</div>
        </div>
      </div>
      <div class="container mb-80">
        <div class="row text-center justify-content-evenly">
          <div class="col-lg-2 av-bg-neutral-30 rounded-4">    
            <div class="position-relative">                      
                    <img src="image/data-collect.png" width="180" alt="" class="pt-5">
                    <div class="position-absolute top-0 start-0 translate-middle mt-4 ms-3">
                      <img src="svg/no1.svg" alt="">
                    </div>
                    <p class="mt-32 av-text-neutral-120 fw-600 fs-18">
                      Data Collection
                    </p>
              </div>
          </div>
          <div class="col-md-2 av-bg-neutral-30 rounded-4">    
            <div class="position-relative">
                  <img src="image/Transmisi.png" width="160" alt="" class="pt-5">
                  <div class="position-absolute top-0 start-0 translate-middle mt-4 ms-3">
                    <img src="svg/no2.svg" alt="">
                  </div>
                  <p class="mt-32 av-text-neutral-120 fw-600 fs-18">
                    Transmision
                  </p>
            </div>
          </div>
          <div class="col-md-2 av-bg-neutral-30 rounded-4">    
            <div class="position-relative">
                  <img src="image/Data Processing.png" width="165" alt="" class="pt-5">
                  <div class="position-absolute top-0 start-0 translate-middle mt-4 ms-3">
                    <img src="svg/no3.svg" alt="">
                  </div>
                  <p class="mt-32 av-text-neutral-120 fw-600 fs-18">
                    Processing & Storage
                  </p>
            </div>
          </div>
          <div class="col-md-2 av-bg-neutral-30 rounded-4">    
            <div class="position-relative">
                  <img src="image/Visualization.png" width="150" alt="" class="pt-5 mt-1">
                  <div class="position-absolute top-0 start-0 translate-middle mt-4 ms-3">
                    <img src="svg/no4.svg" alt="">
                  </div>
                  <p class="mt-32 av-text-neutral-120 fw-600 fs-18">
                    Visualization
                  </p>
            </div>
          </div>
          <div class="col-md-2 av-bg-neutral-30 rounded-4">    
            <div class="position-relative">
                  <img src="image/Analytics.png" width="150" alt="" class="pt-5">
                  <div class="position-absolute top-0 start-0 translate-middle mt-4 ms-3">
                    <img src="svg/no5.svg" alt="">
                  </div>
                  <p class="mt-32 av-text-neutral-120 fw-600 fs-18">
                    Analytics & Predictive AI 
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="d-flex justify-content-center pt-80">
          <div class="mb-64 fs-36 fw-600 av-text-neutral-120">How Avirtech fits into your operations</div>
        </div>
        <div class="row text-start justify-content-evenly mb-20">
          <div class="col-lg-5 rounded-4 av-bg-neutral-30">
            <img src="svg/icon1.svg" width="32px" height="32px" alt="" class="mt-32 mb-3">
            <div class="fw-600 fs-18 av-text-neutral-120 pb-2">Understanding your assets</div>
            <div class="av-text-neutral-100 fs-16 fw-400 pb-32">Knowing your land topography and asset count is the first step to making better decisions. Our drone solutions will help you get updates on your asset over time.</div>
          </div>
          <div class="col-lg-5 rounded-4 av-bg-neutral-30">
              <img src="svg/Crop Health.svg" alt="" width="31.98px" height="27.68px" class="mt-32 mb-3">
            <div class="fw-600 fs-18 av-text-neutral-120 pb-2">Knowing how your crop health</div>
            <div class="av-text-neutral-100 fs-16 fw-400 pb-32">Avirtech utilizes the best in class multi spectral technologies to give you the finest insights you need to know on how well your crops or trees are growing.</div>
          </div>
        </div>
      </div>
      <div class="container mb-80">
        <div class="row text-start justify-content-evenly">
          <div class="col-lg-5 rounded-4 av-bg-neutral-30">
            <img src="svg/hotspot.svg" width="32px" height="32px" class="mt-32 mb-3" alt="">
            <div class="fw-600 fs-18 av-text-neutral-120 pb-2">Collecting inputs from smart sensors</div>
            <div class="av-text-neutral-100 fs-16 fw-400 pb-32">Perplexed by rising cost without clear drivers? Your smart sensors on the ground provides the control system you need to better monitor and improve how your plantation fares against your competitors.</div>
          </div>
          <div class="col-lg-5 rounded-4 av-bg-neutral-30">
            <img src="svg/set.svg" alt="" width="32px" height="32px" class="mt-32 mb-3">
            <div class="fw-600 fs-18 av-text-neutral-120 pb-2">Resolving issues with less manpower</div>
            <div class="av-text-neutral-100 fs-16 fw-400 pb-32 mt-2">Change, mechanize your operations with efficient drone technologies to reduce reliance on manpower and achieve a more sustainable future with Avirtech.</div>
          </div>
        </div>
      </div>
    </div>
@endsection