@extends ('fix/tampilan')
@section ('container')
<div class="p-b-32">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    MENU UTAMA
                </h3>
            </div>
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="style/images/wisata.jpeg" alt="IMG-BANNER">

                        <a href="/destination" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l" >
                                

                               <!--  <span class="block1-info stext-102 trans-04" style="color:black;">
                                    Spring 2018
                                </span> -->
                            </div>

                            

                            
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="style/images/kuliner.jpeg" alt="IMG-BANNER">

                        <a href="/kulinerku" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                

                                <!-- <span class="block1-info stext-102 trans-04" style="color:black;">
                                    Spring 2018
                                </span> -->
                            </div>

                            
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="style/images/cinderamata.jpeg" alt="IMG-BANNER">

                        <a href="/cinderamataku" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                

                               <!--  <span class="block1-info stext-102 trans-04">
                                    Spring 2018
                                </span> -->
                            </div>

                            
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="style/images/penginapan.jpeg" alt="IMG-BANNER">

                        <a href="/akomodasiku" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                               

                               <!--  <span class="block1-info stext-102 trans-04">
                                    Spring 2018
                                </span> -->
                            </div>

                            
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
            <br>
            <br>

 <section class="bg0 p-t-23 p-b-140">
        
        <div class="container">
            
           <div class="p-b-66">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    INFORMASI
                </h3>
            </div>
 

            <div class="row isotope-grid">
                @foreach ($data as $info)
                <div class="col-lg-4 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="/info1/{{$info['id_pengumuman']}}">
                            <img  src="{{ url('/image/'.$info['gambar']) }}" alt="IMG-PRODUCT">
                            </a>    
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Show more 
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <h4 class="p-b-12">
                                <a href="/info1/{{$info['id_pengumuman']}}" class="mtext-101 cl2 hov-cl1 trans-04">
                                </a>
                            </h4>

                           <div class="p-t-15">
                            <div class="stext-110 flex-w p-b-14">
                                <span class="m-r-3">

                                    <span class="cl5" style="color: red; font-weight: bold;">
                                        Info
                                    </span>
                                </span>                           
                            </div>

                            <h4 class="p-b-12">
                                <a href="/info1/{{$info['id_pengumuman']}}" class="mtext-101 cl2 hov-cl1 trans-04">
                                    {{$info['nama_pengumuman']}}
                                </a>
                            </h4>

                            <p class="stext-108 cl6">
                               {{$info['deskripsi']}}
                            </p>
                        </div>
                               
                                
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

