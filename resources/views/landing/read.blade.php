@extends('landing.layouts.app')

@section('content')
  @include('landing.layouts.nav')
  <main>
    {{-- Read Kategori --}}
    <section class="section" style="z-index: inherit">
      <div class="container-fluid">
				<div class="row row-grid mt-6">
					<div class="col-md-8">
						<div class="card shadow border-0" style="border-radius: 10px;">
							<div class="card-body px-5 py-4 mt-3">
								<div class="profile">
									<p class="description font-weight-500 mt-1 ml-2 mr-3"><i class="fa fa-user mr-2" aria-hidden="true"></i>Jagad Raya R</p>
									<p class="description font-weight-500 mt-1 ml-2"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>12 Juni 2003</p>
								</div>
								<h1 class="text-default read-title">Belajar Dasar HTML Untuk Pemula</h1>
								<div class="divider"></div>

								<div class="topics">
									<a href="{{ route('topic' , 'html') }}">
										<span class="badge rounded topic px-3 py-2 pointer mt-1" style="font-size: 12px;">#Pemula</span>
									</a>
									<a href="{{ route('topic' , 'html') }}">
										<span class="badge rounded topic px-3 py-2 pointer mt-1" style="font-size: 12px;">#Html</span>
									</a>
									<a href="{{ route('topic' , 'html') }}">
										<span class="badge rounded topic px-3 py-2 pointer mt-1" style="font-size: 12px;">#Web Programming</span>
									</a>
								</div>
								
								{{-- Content goes here --}}
								<div class="content mt-3 mb-4 text-default">
									<img src="https://picsum.photos/600/500" alt="cover" class="read-cover"><br><br>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo blanditiis illo obcaecati repellat atque, incidunt ducimus magnam esse facere fugiat corporis minima rerum accusamus nostrum soluta, odit officiis distinctio nemo eaque optio aut? Nemo quas repellat id soluta autem iusto, sint natus ad nesciunt nulla quia exercitationem qui impedit et totam veritatis sit aperiam obcaecati omnis minus dolorum labore numquam similique? Sequi magnam laudantium inventore ea! Eos, iure dolore blanditiis quam natus esse reprehenderit dolorem totam nesciunt magnam ex soluta, quis odit porro assumenda ea a repudiandae, ab quasi sapiente obcaecati optio deserunt odio. Veniam asperiores dolorum sint provident ex.
									<br><br>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut necessitatibus veritatis atque eos error consequatur vitae expedita id blanditiis. Sunt iusto ipsum animi maxime voluptate ad sint deleniti, debitis ipsa cupiditate non, magni est eligendi, quae modi. Quo minus temporibus ex nulla quis, tenetur rerum modi commodi quisquam ut, vitae cupiditate mollitia id! Officiis magni architecto quasi illo culpa, delectus odio repellat expedita, distinctio fuga quaerat debitis neque. Inventore pariatur iste laudantium. Perspiciatis incidunt esse ea, inventore delectus corrupti quis temporibus iusto quos adipisci excepturi eos blanditiis debitis nobis ipsam vero nisi distinctio praesentium porro unde veniam suscipit molestias repellendus? Accusamus unde, quidem non nobis eveniet ut odio pariatur eligendi eaque cumque illum quisquam laboriosam adipisci voluptatibus reiciendis rem quas? Nisi iusto saepe beatae numquam vero culpa laborum excepturi aperiam eum doloribus quisquam dicta atque repudiandae fugit debitis inventore assumenda officia dolor animi cupiditate, dolorem velit facilis. Facere, blanditiis illo?
									<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore earum quae in minima eaque ad nobis similique illum, aliquam fugit temporibus distinctio ipsam repudiandae deserunt explicabo nihil repellat, minus quos recusandae blanditiis. Fuga consequatur ratione architecto maiores sequi quibusdam, placeat optio? Vitae dolores, praesentium tempore quia, impedit quae deserunt sequi veniam deleniti sapiente dicta soluta facere inventore officiis numquam suscipit optio. Ab eaque explicabo blanditiis, sapiente deleniti quaerat dolore esse id beatae asperiores pariatur alias facilis architecto, doloribus suscipit voluptate tempore. Nam, doloremque, repudiandae quae fuga eaque ad expedita vitae quam facere sapiente cumque? Temporibus velit, porro dicta sunt obcaecati eligendi facilis nostrum. Laborum consequatur voluptates expedita omnis perspiciatis veniam, ipsum quam nostrum sunt asperiores incidunt neque accusantium aspernatur? Alias quia, magnam facilis ullam illum non error at, quae rerum unde delectus? Natus dolorum asperiores iure, a voluptatibus adipisci architecto magnam voluptas quam dolorem assumenda, accusantium sed, commodi at. Possimus facere praesentium tenetur quo dolorem aliquid consequatur laudantium in. Eaque vel illo quis aliquam sunt corporis commodi doloremque sit perferendis!
									<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus explicabo recusandae dicta architecto eaque dolorem vero, ducimus perferendis, voluptatibus numquam, facere ullam repellat provident tenetur beatae maxime praesentium sint quidem. Earum asperiores cumque maiores quibusdam error blanditiis, excepturi rerum sequi labore modi officiis eius? Culpa labore accusamus delectus doloribus sit sequi. Dicta fuga velit, nisi quidem aut quod maiores perspiciatis exercitationem, sint repellendus consequatur rerum libero voluptatum odit, necessitatibus architecto voluptatibus voluptates quas inventore tempora unde molestiae officiis. Exercitationem nam repudiandae laudantium totam molestiae commodi accusantium veritatis! Sunt quis asperiores veniam, tenetur qui dolore ut maiores maxime doloremque aliquid quisquam.
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-12 p-0">
							<div class="card p-0 shadow border-0" style="border-radius: 10px;">
								<div class="card-body mt-3 mb-4 py-1">
									<h5 class="text-default font-weight-900"><i class="fa-solid fa-share-nodes mr-2"></i>Share Ke Social Media</h5>
									<div class="divider mb-3"></div>
									<div class="form-group">
										<div class="input-group input-group-alternative mb-4">
											<input class="form-control bg-secondary text-dark" id="copyLink" value="{{ url()->current(); }}" type="text" disabled>
											<div class="input-group-append" onclick="copyLink()">
												<span class="input-group-text bg-default text-white pointer"><i class="fa-regular fa-copy"></i></span>
											</div>
										</div>
									</div>
									<div class="col-md-9 m-auto d-flex justify-content-around">
										<span onclick="shareTl()" class="badge badge-pill badge-default pointer"><i class="fa-brands fa-telegram p-1" style="font-size: 20px;"></i></span>
										<span onclick="shareWa()" class="badge badge-pill badge-default pointer"><i class="fa-brands fa-whatsapp p-1" style="font-size: 20px;"></i></span>
										<span onclick="shareFb()" class="badge badge-pill badge-default pointer"><i class="fa-brands fa-facebook p-1" style="font-size: 20px;"></i></span>
										<span onclick="shareTw()" class="badge badge-pill badge-default pointer"><i class="fa-brands fa-twitter p-1" style="font-size: 20px;"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 p-0 mt-4">
							<div class="card shadow border-0" style="border-radius: 10px;">
								<div class="card-body mt-3 mb-4 py-1">
									<h5 class="text-default font-weight-900"><i class="fa-solid fa-clock-rotate-left mr-2"></i>Artikel Tutorial Terbaru</h5>
									<div class="divider mb-3"></div>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
											<span class="align-middle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-3">
											<span class="align-middle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-3">
											<span class="align-middle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
									<a href="/html" class="w-100">
										<div class="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-3">
											<span class="align-middle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, atque.</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 mt-4">
						<div class="card shadow border-0" style="border-radius: 10px;">
							<div class="card-body px-lg-5 py-lg-4 mb-3">
								<h5 class="text-default font-weight-900"><i class="fa-solid fa-book-open mr-2"></i>Daftar Isi Tutorial</h5>
								<div class="divider mb-3"></div>
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
					<div class="col-lg-8 mt-4">
						<div class="card shadow border-0" style="border-radius: 10px;">
							<div class="card-body px-lg-5 py-lg-4 mb-3">
								<div id="disqus_thread"></div>
							</div>
						</div>
					</div>
				</div>
      </div>
    </section>
  </main>
	<script src="{{ asset('js/share.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/comment.js') }}" type="text/javascript"></script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection