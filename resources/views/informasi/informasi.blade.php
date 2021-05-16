  @extends ('fix/admin')
@section ('container')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          @if (session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
          @endif
          <table class="table">
  <thead class="table-dark" align="center">
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Pengumuman</th>
    <th scope="col">Deskripsi</th>
    <th scope="col">Gambar</th>
    <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($informasi as $info)
    <tr>
      <td scope="row">{{$loop->iteration}}</td>
      <td scope="row">{{ $info->nama_pengumuman }} </td>
      <td scope="row">{{ $info->deskripsi}}</td>
       <td scope="row"><img width="100px;" height="100px;" src="{{ url('/image/'.$info->gambar) }}"></td>
      
      <td>
      <a href="/informasi/{{$info->id_pengumuman}}" class="badge badge-info">detail</a>
<!--       <a href="" class="badge badge-danger">hapus</a> -->
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>
 <a href="/informasi/create" class="btn btn-primary my-3">Tambah Data</a>
        </div>
      </div><!-- /.container-fluid -->
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