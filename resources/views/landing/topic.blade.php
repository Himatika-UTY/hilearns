@extends('landing.layouts.app')

@section('content')
  @include('landing.layouts.nav')
  <main>
    {{-- Topics --}}
		<section class="section mt-6" style="z-index: inherit">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <a href=""><span class="font-weight-900 text-default2 text-uppercase">TOPIC / {{ $topic }}</span></a><br>
            <span class="font-weight-900 display-4 text-default">Topic yang kamu cari</span><br>
            <span>Baca artikel sesuai topic yang kamu inginkan</span><br>
          </div>
          <div class="col-lg-12 mt-1">
            <div class="row row-grid">
              <div class="col-lg-4 mt-4">
                <div class="card shadow border-0" style="height: 400px;">
                  <div class="card-body py-1">
                    <a href="">
                      <div class="card-cover">
                        <img src="https://picsum.photos/1000/600" alt="cover" class="cover">
                      </div>
                      <div class="mt-2">
                        <h5 class="font-weight-bold text-capitalize">Lorem ipsum dolor sit amet, elit adipisicing elit.</h5>
                        </a>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores quo id at, culpa ullam molestiae amet dolorum consequatur odit?</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card shadow border-0" style="height: 400px;">
                  <div class="card-body py-1">
                    <a href="">
                      <div class="card-cover">
                        <img src="https://picsum.photos/1000/600" alt="cover" class="cover">
                      </div>
                      <div class="mt-2">
                        <h5 class="font-weight-bold text-capitalize">Lorem ipsum dolor sit amet, elit adipisicing elit.</h5>
                        </a>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores quo id at, culpa ullam molestiae amet dolorum consequatur odit?</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card shadow border-0" style="height: 400px;">
                  <div class="card-body py-1">
                    <a href="">
                      <div class="card-cover">
                        <img src="https://picsum.photos/1000/600" alt="cover" class="cover">
                      </div>
                      <div class="mt-2">
                        <h5 class="font-weight-bold text-capitalize">Lorem ipsum dolor sit amet, elit adipisicing elit.</h5>
                        </a>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores quo id at, culpa ullam molestiae amet dolorum consequatur odit?</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card shadow border-0" style="height: 400px;">
                  <div class="card-body py-1">
                    <a href="">
                      <div class="card-cover">
                        <img src="https://picsum.photos/1000/600" alt="cover" class="cover">
                      </div>
                      <div class="mt-2">
                        <h5 class="font-weight-bold text-capitalize">Lorem ipsum dolor sit amet, elit adipisicing elit.</h5>
                        </a>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores quo id at, culpa ullam molestiae amet dolorum consequatur odit?</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card shadow border-0" style="height: 400px;">
                  <div class="card-body py-1">
                    <a href="">
                      <div class="card-cover">
                        <img src="https://picsum.photos/1000/600" alt="cover" class="cover">
                      </div>
                      <div class="mt-2">
                        <h5 class="font-weight-bold text-capitalize">Lorem ipsum dolor sit amet, elit adipisicing elit.</h5>
                        </a>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores quo id at, culpa ullam molestiae amet dolorum consequatur odit?</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card shadow border-0" style="height: 400px;">
                  <div class="card-body py-1">
                    <a href="">
                      <div class="card-cover">
                        <img src="https://picsum.photos/1000/600" alt="cover" class="cover">
                      </div>
                      <div class="mt-2">
                        <h5 class="font-weight-bold text-capitalize">Lorem ipsum dolor sit amet, elit adipisicing elit.</h5>
                        </a>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores quo id at, culpa ullam molestiae amet dolorum consequatur odit?</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-12">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection