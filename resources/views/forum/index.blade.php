@extends ('fix/tampilan')
@section ('container')
<br>
<br>
<br>
<br>
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
@endsection