@extends ('fix/tampilan')
@section ('container')

	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			@foreach ($informasi as $info)
			<div class="row">
				
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							 {{$info->nama_pengumuman}}
						</h3>

						<p class="stext-113 cl6 p-b-26">
							 {{$info->deskripsi}}
						</p>

					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							 <a href="/info1/{{$info->id_pengumuman}}">
							<img  src="{{ url('/image/'.$info->gambar) }}" alt="IMG-PRODUCT">
							</a>

						</div>
					</div>
				</div>
			
			
			
		</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
		@endforeach
	</div>

	</section>	
@endsection
	