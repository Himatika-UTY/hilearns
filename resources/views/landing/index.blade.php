@extends('landing.layouts.app')

@section('content')
  @include('landing.layouts.nav-home')
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-dark">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container-fluid">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-10 position-relative banner">
                <h1 class="display-1 text-white font-weight-900">HiLearns</h1>
                <p class="lead text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia ut dolores laudantium dolorem soluta eveniet sequi rerum! Quo quas maiores vitae fuga dolorem placeat quia saepe optio, nostrum numquam quaerat?</p>
                <div class="btn-wrapper">
                  <a href="" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="fa fa-graduation-cap text-default" aria-hidden="true"></i></span>
                    <span class="btn-inner--text text-default">Belajar Sekarang</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>

    {{-- Fitur --}}
    <section class="section" style="z-index: inherit">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-12 mb-1 mt-4">
            <span class="font-weight-900 text-default2">FITUR</span><br>
            <span class="font-weight-900 display-4 text-default">Lihat fitur unggulan kami</span><br>
            <span>Fitur unggulan yang kami miliki di HiLearns</span><br>
          </div>
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4 mt-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-1 mt-3">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                    <h6 class="text-primary text-uppercase font-weight-bold">Gratis Selamanya</h6>
                    <p class="description mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi veritatis, molestiae tempora</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-1 mt-3">
                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                      <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <h6 class="text-success text-uppercase font-weight-bold">Akses Dimana Saja</h6>
                    <p class="description mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio doloribus placeat libero?</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-1 mt-3">
                    <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                      <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <h6 class="text-warning text-uppercase font-weight-bold">Forum Belajar Bersama</h6>
                    <p class="description mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio doloribus placeat libero?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Artikel Terbaru --}}
    <section class="section" style="z-index: inherit">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <span class="font-weight-900 text-default2">UPDATE</span><br>
            <span class="font-weight-900 display-4 text-default">Artikel tutorial belajar terbaru</span><br>
            <span>Baca tutorial terbaru kami yang masih fresh</span><br>
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

    {{-- Kategori --}}
    <section class="section pb-0 bg-default2" style="z-index: inherit;">
      <div class="section features-2">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-8 mr-auto text-left">
              <div class="pr-md-5">
                <div class="w-100">
                  <span class="text-primary font-weight-900 text-white">KATEGORI</span><br>
                  <span class="font-weight-900 display-4 text-white">Belajar materi sesuai minat mu</span><br>
                  <p class="text-white">Lihat kategori materi yang kami miliki di HiLearns</p>
                </div>
                <ul class="list-unstyled">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-white mr-3"><i class="fa fa-check text-dark" aria-hidden="true"></i></div>
                      </div>
                      <div>
                        <h6 class="mb-0 text-white">Lorem ipsum dolor sit amet.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-white mr-3"><i class="fa fa-check text-dark" aria-hidden="true"></i></div>
                      </div>
                      <div>
                        <h6 class="mb-0 text-white">Lorem ipsum dolor sit amet consectetur.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-white mr-3"><i class="fa fa-check text-dark" aria-hidden="true"></i></div>
                      </div>
                      <div>
                        <h6 class="mb-0 text-white">Lorem ipsum dolor sit.</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-md-0">
              <div class="row">
                @foreach ($categories as $category)
                  <div class="col-lg-4 col-md-4 mt-2 pointer">
                    <div class="info text-left bg-{{ $category->color }} shadow">
                      <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-{{ $category->color }}"><i class="{{ $category->icon }}" aria-hidden="true"></i></div>
                      <h5 class="info-title text-white">{{ $category->name }}</h5>
                      <p class="description">{{ $category->description }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
