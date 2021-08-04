@extends ('fix/tampilan')
@section ('container')
<br>
<br>
<br>
<br>
   <div class="card" style="border: 2px solid black;">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="panel-heading">
    	<h3 class="product-title" style="color:black;font-size: 20px;">Komentar</h3>
    	
    </div>
   <div class="col-md-8">
      <!-- PANEL HEADLINE -->
      <div class="panel panel-headline">
        <div class="panel-heading">
          
          <h3 class="panel-title" style="color:#0088ff;">{{$forum[0]->user->name}}</h3>
          <h3 class="panel-title">{{$forum[0]->judul}}</h3>
          <p class="panel-subtitle">{{$forum[0]->created_at->diffForHumans()}}</p>
        </div>
        <div class="panel-body">
          {{$forum[0]->konten}}

        <ul class="list-unstyled activity-list">
         <hr>
         <div class="btn-group">
          <button class="btn btn-default"><i class="lnr lnr-thumbs-up"></i>Suka</button>
          <button class="btn btn-default" id="btn-komentar-utama"><i class="lnr lnr-bubble"></i>Komentar</button>
           
    </div>
      <form action="" id="komentar-utama" method="POST" style="margin-top: 10px;display: none;">
        @csrf
          <input type="hidden" name="forum_id" value="{{$forum[0]->id_forum}}">
          <input type="hidden" name="parent" value="0">
          <textarea  name="konten"  rows="4" class="form-control"></textarea>
         <input type="submit" name="" class="btn btn-primary" value="kirim">
      </form>
         <h3 style="margin-top: 10px; color:black;font-size: 20px; ">Komentar</h3>
         <ul class="list-unstyled activity-list">
          @foreach($komentars as $komentar)
                    <li>
                      <br>
                      <img src="/style/images/userr.jpg" alt="Avatar" class="img-circle pull-left avatar">  
                      <p><a href="/forum/{{$komentar->id_forum}}/view">{{$komentar->user->name}}</a>
                        <a href="#"></a><br>{{$komentar->konten}} <span class="timestamp">
                        <br>{{$komentar->created_at->diffForHumans()}}</span></p>
                    </li>
                    
                  @endforeach
                  </ul> 

      
        </div>
      </div>
      <!-- END PANEL HEADLINE -->
    </div>
     

  </div>
</div>

  

@endsection