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

    <h1 class="mt-3"><u>Detail Akomodasi</u></h1>
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Nama Akomodasi &emsp;&emsp;&emsp;&emsp;{{$akomodasi->nama_akomodasi}}</h5>
    <br>
    <br>
    <h5 class="card-title">Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$akomodasi->alamat}}</h5>
    <br>
    <br>
    <h5 class="card-title">Fasilitas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$akomodasi->fasilitas}}</h5>
    <br>
    <br>
      <h5 class="card-title">Deskripsi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$akomodasi->deskripsi}}</h5>
    <br>
    <br>
    <h5 class="card-title">Gambar &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;</h5>
    <td scope="row"><img width="100px;" height="100px;" src="{{ url('/image/'.$akomodasi->gambar) }}"></td>   
    <br>
    <br>
    <a href="{{$akomodasi->id_akomodasi}}/edit" type="submit" class="btn btn btn-primary">Edit</a>
   
     
   <form action="{{$akomodasi->id_akomodasi}}" method="post" class="d-inline">
    @method('delete')
    @csrf
     <button type="submit" class="btn btn-danger">delete</button>
   </form>

    
    <div align="right">
    <a  href="/akomodasi" class=""><b style="font-size: 14px;">Kembali</b></a>
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