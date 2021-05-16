@extends ('fix/tampilan')
@section ('container')

    <!-- Product -->
     <section class="bg0 p-t-23 p-b-140">
        
        <div class="container">
            
            <div class="p-b-10">
                <h3 class="ltext-70 cl5">
                 <b> ALL KULINER</b>
                </h3>
            </div>
 

            <div class="row isotope-grid">
                @foreach ($kuliner as $kul)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="/kuliner1/{{$kul->id_kuliner}}">
                            <img  src="{{ url('/image/'.$kul->gambar) }}" alt="IMG-PRODUCT">
                            </a>    
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Show more 
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$kul->nama_kuliner}}
                                </a>

                                <span class="stext-105 cl3">
                                    {{$kul->jenis_makanan}}
                                </span>
                            </div>

                          <!--   <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="/ratingkuliner/{{$kul->id_kuliner}}">
                                    <img class="icon-heart1 dis-block trans-04" src="style/images/icons/icon-heart-01.png" alt="ICON">
                                    
                                </a>
                            </div> -->
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