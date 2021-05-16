@extends ('fix/tampilan')
@section ('container')

    <!-- Product -->
     <section class="bg0 p-t-23 p-b-140">
        
        <div class="container">
            
            <div class="p-b-10">
                <h3 class="ltext-70 cl5">
                 <b> ALL HOTEL</b>
                </h3>
            </div>
 

            <div class="row isotope-grid">
                @foreach ($akomodasi as $ako)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="/akomodasiku1/{{$ako->id_akomodasi}}">
                            <img  src="{{ url('/image/'.$ako->gambar) }}" alt="IMG-PRODUCT">
                            </a>    
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Show more 
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$ako->nama_akomodasi}}
                                </a>

                                <span class="stext-105 cl3">
                                    {{$ako->alamat}}
                                </span>
                            </div>

                            
                        </div>
                    </div>
                    <br>
                    <br>
                    

                </div>
             

               @endforeach
              
            </div>
         
        </div>
        
    </section>
@endsection