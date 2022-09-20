@php
	use Illuminate\Support\Str;
@endphp

@extends('landing.layouts.app')

@section('content')
  @include('landing.layouts.nav')
  <main>
    {{-- Rekomendasi --}}
    <section class="section" style="z-index: inherit">
      <div class="container-md">
        <div class="row justify-content-center mt-5">
          <div class="col-lg-12 mt-4 mb-4">
            <span class="font-weight-900 text-default2">REKOMENDASI</span><br>
            <span class="font-weight-900 display-4 text-default">Lihat tutorial unggulan kami</span><br>
            <span>Tutorial unggulan yang kami miliki di HiLearns</span><br>
          </div>
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-6">
                <a href="/tutorial/html">
                  <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                    <div class="card-body py-3 px-3 tutorial-flex">
                      <div class="w-auto">
                        <img src="https://picsum.photos/600/600" class="tutorial-image" alt="Responsive image">
                      </div>
                      <div class="tutorial-desc">
                        <span class="font-weight-bold tutorial-title text-default">Tutorial Dasar HTML</span>
                        <p class="description text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum?</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6">
                <a href="/tutorial/html">
                  <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                    <div class="card-body py-3 px-3 tutorial-flex">
                      <div class="w-auto">
                        <img src="https://picsum.photos/600/600" class="tutorial-image" alt="Responsive image">
                      </div>
                      <div class="tutorial-desc">
                        <span class="font-weight-bold tutorial-title text-default">Tutorial Dasar PHP</span>
                        <p class="description text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum?</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 mt-lg-4">
                <a href="/tutorial/html">
                  <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                    <div class="card-body py-3 px-3 tutorial-flex">
                      <div class="w-auto">
                        <img src="https://picsum.photos/600/600" class="tutorial-image" alt="Responsive image">
                      </div>
                      <div class="tutorial-desc">
                        <span class="font-weight-bold tutorial-title text-default">Tutorial Dasar CSS</span>
                        <p class="description text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum?</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 mt-lg-4">
                <a href="/tutorial/html">
                  <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                    <div class="card-body py-3 px-3 tutorial-flex">
                      <div class="w-auto">
                        <img src="https://picsum.photos/600/600" class="tutorial-image" alt="Responsive image">
                      </div>
                      <div class="tutorial-desc">
                        <span class="font-weight-bold tutorial-title text-default">Tutorial Dasar Javascript</span>
                        <p class="description text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum?</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 mt-lg-4">
                <a href="/tutorial/html">
                  <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                    <div class="card-body py-3 px-3 tutorial-flex">
                      <div class="w-auto">
                        <img src="https://picsum.photos/600/600" class="tutorial-image" alt="Responsive image">
                      </div>
                      <div class="tutorial-desc">
                        <span class="font-weight-bold tutorial-title text-default">Tutorial Dasar Laravel</span>
                        <p class="description text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum?</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 mt-lg-4">
                <a href="/tutorial/html">
                  <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                    <div class="card-body py-3 px-3 tutorial-flex">
                      <div class="w-auto">
                        <img src="https://picsum.photos/600/600" class="tutorial-image" alt="Responsive image">
                      </div>
                      <div class="tutorial-desc">
                        <span class="font-weight-bold tutorial-title text-default">Tutorial Dasar NodeJs</span>
                        <p class="description text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum?</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		{{-- Tutorial --}}
    <section class="section" style="z-index: inherit">
      <div class="container-md">
        <div class="row justify-content-center">
          <div class="col-lg-12 mb-lg-0 mb-4">
            <span class="font-weight-900 text-default2">TUTORIAL</span><br>
            <span class="font-weight-900 display-4 text-default">Lihat semua tutorial kami</span><br>
            <span>Explore semua tutorial yang kami miliki di HiLearns</span><br>
          </div>
          <div class="col-lg-12">
            <div class="row row-grid">
              @foreach ($moduls as $modul)
                <div class="col-lg-12 mt-lg-4">
                  <a href="{{ route('detail', $modul->slug) }}">
                    <div class="card card-lift--hover shadow border-0 rounded align-content-center">
                      <div class="card-body py-3 px-3 tutorial-flex">
                        <div class="w-auto">
                          <img src="/upload/modul/{{ $modul->image }}" class="tutorial-image-lg" alt="Responsive image">
                        </div>
                        <div class="tutorial-desc-lg">
                          <span class="font-weight-900 tutorial-title-lg text-default">{{ $modul->name }}</span>
                          <p class="description text-default" style="font-size: 0.98rem;">{{ Str::of($modul->description)->limit(230) }}</p>
                        </div>
                      </div>   
                    </div>
                  </a>
                </div>
              @endforeach
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
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
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