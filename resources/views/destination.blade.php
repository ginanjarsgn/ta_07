@extends ('fix/tampilan')
@section ('container')

@if(auth()->user())
     <section class="bg0 p-t-23 p-b-140">
        
        <div class="container">
            
            <div class="p-b-10">
                <h3 class="ltext-70 cl5">
                 <b> RECOMMENDATION</b>
                </h3>
            </div>
            <br>
            <br>
            
                <div class="row isotope-grid">
                    @foreach ($rekomendasis as $rekomendasi)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="/{{$rekomendasi['url']}}">
                                <img  src="{{ url('/image/'.$rekomendasi['gambar']) }}" alt="IMG-PRODUCT">
                                </a>    
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Show more 
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="color: black; font-weight: bold;">
                                        {{$rekomendasi['nama']}}
                                    </a>

                                    <span class="stext-105 cl3">
                                        {{$rekomendasi['alamat']}}
                                    </span>
                                   <!--  <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $rekomendasi['prediksi_bintang']}}" data-size="xs" disabled=""> -->
                                    
                                   
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>
                 

                   @endforeach
                  
                </div>
            @endif

        </div>
        
    </section>
     <section class="bg0 p-t-23 p-b-140">
        
        <div class="container">
            
            <div class="p-b-10">
                <h3 class="ltext-70 cl5">
                 <b> ALL DESTINATION</b>
                </h3>
            </div>
            <br>
            <br>

 

            <div class="row isotope-grid">
                @foreach ($data as $wisata)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="/destination1/{{$wisata['id_wisata']}}">
                            <img  src="{{ url('/image/'.$wisata['gambar']) }}" alt="IMG-PRODUCT">
                            </a>    
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Show more 
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="color: black; font-weight: bold;">
                                    {{$wisata['nama_wisata']}}
                                </a>

                                <span class="stext-105 cl3">
                                    {{$wisata['alamat']}}
                                </span>
                               <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $wisata['post']->averageRating }}" data-size="xs" disabled="">
                                
                            </div>

                        </div>
                        <br>
                        <br>
                    </div>
                </div>
             

               @endforeach
              
            </div>
         
        </div>
        
    </section>

@endsection