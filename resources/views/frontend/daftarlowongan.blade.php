@extends('layouts.frontend')
@section('content')
	<!-- About -->
	
				<!-- Section header -->
				
				<!-- /Section header -->

				<!-- about -->
				
				</div>
				<!-- /about -->

				<!-- about -->
				
				<!-- /about -->

				<!-- about -->
				
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	
				<!-- /Section header -->

				<!-- Work -->
				
				<!-- /Work -->

				<!-- Work -->
			

				<!-- Work -->
				
				<!-- /Work -->

				<!-- Work -->
				
				<!-- /Work -->

				<!-- Work -->
				
				<!-- /Work -->

				<!-- Work -->
				
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	

				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	

		<!-- Background Image -->
		
		<!-- /Background Image -->

		<!-- Container -->
	

			<!-- Row -->
			

				<!-- number -->
				
			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Lowongan Terbaru</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				@foreach($lowongan as $data);
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="{{asset('frn/img/blog1.jpg')}}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>{{$data->nama_low}}</h3>
							<p>{!! str_limit($data->deskripsi_iklan,50) !!}</p>
							<a href="{{ url('rincianlowongan',$data->id)}}">Baca Lengkap</a>
							
						</div>
					</div>
				</div>
				@endforeach
				<!-- /blog --

				<!-- blog -->
					</div>
				</div>
				<!-- /blog -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Contact -->
	
	<!-- /Contact -->
@endsection