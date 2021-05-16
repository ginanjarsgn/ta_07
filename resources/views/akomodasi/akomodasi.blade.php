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
    <th scope="col">Nama Akomodasi</th>
    <th scope="col">Alamat</th>
    <th scope="col">Fasilitas</th>
    <th scope="col">Deskripsi</th>
    <th scope="col">Gambar</th>
    <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($akomodasi as $ako)
    <tr>
      <td scope="row">{{$loop->iteration}}</td>
      <td scope="row">{{$ako->nama_akomodasi}}</td>
      <td scope="row">{{$ako->alamat}}</td>
      <td scope="row">{{$ako->fasilitas}}</td>
      <td scope="row">{{$ako->deskripsi}}</td>
      <td scope="row"><img width="100px;" height="100px;" src="{{ url('/image/'.$ako->gambar) }}"></td>
      
      
      <td>
      <a href="/akomodasi/{{$ako->id_akomodasi}}" class="badge badge-info">detail</a>
<!--       <a href="" class="badge badge-danger">hapus</a> -->
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>
 <a href="/akomodasi/create" class="btn btn-primary my-3">Tambah Data</a>
        </div>
         {{$akomodasi->links() }}
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
