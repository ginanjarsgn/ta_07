
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TOBA DESTINATION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<link href="{{ asset('css/preview.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/iconic/css/material-design-iconic-font.min.css') }}" >
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
    
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
           
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    
                    <!-- Logo desktop -->       
                      <a href="/" class="logo" style="margin-top: 27px;">
                       <b class="mtext-109 cl2 p-b-30" style="color:red;"> PARIWISATA </b>&nbsp
                       <b class="mtext-109 cl2 p-b-30" style="color:black;">TOBA</b>
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li >
                                <a href="/" style="color:black;font-size: 20px;">Home</a>
                                    
                            </li>

                            <li >
                                <a href="/destination" style="color:black;font-size: 20px;">Destinasi</a>
                            </li>

                            <li class="active-menu">
                                <a href="/kulinerku" style="color:black;font-size: 20px;">Kuliner</a>
                            </li>

                            <li>
                                <a href="/cinderamataku" style="color:black;font-size: 20px;">Cinderamata</a>
                            </li>

                            <li>
                                <a href="/akomodasiku" style="color:black;font-size: 20px;">Akomodasi</a>
                            </li>

                            <li>
                                <a href="/info" style="color:black;font-size: 20px;">Info</a>
                            </li>
                            @if(auth()->user()) 
                            <li>
    <a href="{{url('/logout')}}" style="color:black;font-size: 20px; class="nav-link">
      Logout</a>     
      
      </li>
      
      <li style="color:blue;font-size: 20px;">
        {{auth()->user()->email}}
      </li>
      @endif
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        
                        
                    </div>
                </nav>
            </div>  
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="style/images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

<br>
<br>
<br>
<br>
<br>
<br>


    <!-- Product -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
          
            <div class="row">
                
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                              {{$kuliner->nama_kuliner}}
                        </h3>

                         <div class="p-t-32">
                            

                          

                            <p class="stext-117 cl6 p-b-26">
                                {{$kuliner->deskripsi}}
                            </p>

                            <p class="stext-117 cl6 p-b-26">
                                Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
                            </p>

                        </div>

                    </div>
                </div>


                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            
                        <img  src="{{ url('/image/'.$kuliner->gambar) }}" alt="IMG-PRODUCT">
                            

                        </div>
                           <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $post->averageRating }}" data-size="xs" disabled="">
                    </div>

                </div>
                
            
            
            
        </div>

<br>
<br>
<br>
<br>
 <form action="{{ route('posts.post') }}" method="POST">

                        {{ csrf_field() }}

                    <div class="card">

                        <div class="container-fliud">

                            <div class="wrapper row">

                              

                                <div class="details col-md-6">
                                    
                                    <h4 class="product-title" style="color: black;">Berikan Rating</h4>

                                    <div class="rating">
                                        <b style="color: blue;">Akses</b>                    
                                        <input id="input-1" name="rate_fasilitas" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-size="xs">

                                        <input type="hidden" name="id" required="" value="{{ $post->id }}">
                                        <b style="color: blue;">Fasilitas</b>
                                        <input id="input-1" name="rate_akses" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-size="xs">

                                        <input type="hidden" name="id" required="" value="{{ $post->id }}">
                                        

                                       

                                        <br/>

                                        <button class="btn btn-success">Submit Review</button>

                                    </div>
                                   

                                </div>

                            </div>

                        </div>

                   <div class="right">
          <a href="/forum/create" class="btn btn-primary my-3">Tambah Komentar</a>
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"style="color:black;font-size: 25px;">Forum Diskusi</h3>
              </div>
   <div class="card">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
     @if (session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
          @endif
   <div class="panel-body">
        <ul class="list-unstyled activity-list">
            @foreach($forum as $frm)
                                        <li>
                                            <img src="style/images/userr.jpg" alt="Avatar" class="img-circle pull-left avatar">
                                            <p><a href="/forum/{{$frm->id_forum}}/view">{{$frm->user->name}}</a> {{$frm->judul}} <span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
                                        </li>
            @endforeach                                         
                                    </ul> 

      </div>
    
  </div>
  </div>
</div>
                    </div>

                    </form>
      
    </div>

    </section>  







    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
           <!--  <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shoes
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns 
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div> -->

            
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

   

<!--===============================================================================================-->  
    <script src="{{ asset('style/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('style/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/select2/select2.min.js') }}"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('style/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('style/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/parallax100/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('style/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('style/js/main.js') }}"></script>

</body>
</html>