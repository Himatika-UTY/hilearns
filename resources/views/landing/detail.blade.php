@extends('landing.layouts.app')

@section('content')
  @include('landing.layouts.nav')
  <main>
    {{-- Detail Kategori --}}
    <section class="section" style="z-index: inherit">
      <div class="container-md">
				<div class="row">
					<div class="col-sm-12 mt-6">
						<div class="bg-white shadow border-0 border-rounded">
							<div class="card-body p-5">
								<div class="row">
									<div class="col-md-3">
										<img src="/upload/modul/{{ $modul->image }}" class="tutorial-image-xl rounded" alt="Responsive image">
									</div>
									<div class="col-md-9">
										<span class="text-default text-capitalize font-weight-900 detail-title">{{ $modul->name }}</span>
										<p class="detail-desc">{{ $modul->description }}</p>
										<div class="d-flex">
											<span class="text-default text-capitalize mr-3"><i class="fa fa-gamepad mr-1" aria-hidden="true"></i>{{ $modul->level }}</span>
											<span class="text-default text-capitalize"><i class="fa fa-file-text mr-1" aria-hidden="true"></i>10 Artikel</span>
										</div>
								</div>
								<div class="row px-4">
									<div class="divider mt-4"></div>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;</i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
      </div>
    </section>
  </main>
@endsection