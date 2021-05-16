  @extends ('fix/admin')
@section ('container')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
    <div class="col-2"></div>
<div class="col-12" style=" background-color: #fff;">

    <h1 class="mt-3"><u>Detail Wisata</u></h1>
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Nama Wisata &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$wisata->nama_wisata}}</h5>
    <br>
    <br>
  
    <h5 class="card-title">Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$wisata->alamat}}</h5>
    <br>
    <br>
    <h5 class="card-title">Deskripsi &emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;{{$wisata->deskripsi}}</h5>
    <br>
    <br>
    <h5 class="card-title">Gambar &emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;</h5>
    <td scope="row"><img width="100px;" height="100px;" src="{{ url('/image/'.$wisata->gambar) }}"></td>
    
    <br>
    <br>
    <a href="{{$wisata->id_wisata}}/edit" type="submit" class="btn btn btn-primary">Edit</a>
   
     
   <form action="{{$wisata->id_wisata}}" method="post" class="d-inline">
    @method('delete')
    @csrf
     <button type="submit" class="btn btn-danger">delete</button>
   </form>

    
    <div align="right">
    <a  href="/wisata" class=""><b style="font-size: 14px;">Kembali</b></a>
  </div>
</div>

  </div>
</div>
  </div>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


</div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@endsection