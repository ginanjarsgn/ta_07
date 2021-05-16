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

    <h1 class="mt-3"><u>Form Tambah Data Cinderamata</u></h1>
    <br>
    <form method="post" action="/cinderamata/create" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
  <label for="nama" class="form-label">Nama Toko</label>
  <input type="text" class="form-control" id="nama" placeholder="Nama Toko" name="nama_toko">
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
</div>
<div class="mb-3">
  <label for="jenis_cinderamata" class="form-label">Jenis Cinderamata</label>
  <input type="text" class="form-control" id="jenis_cinderamata" placeholder="Jenis Cinderamata" name="jenis_cinderamata">
</div>
<div class="mb-3">
  <label for="deskripsi" class="form-label">Deskripsi</label>
 <textarea  type="text" placeholder="isi deskripsi"  name="deskripsi" id="deskripsi" rows="4" class="form-control"></textarea>
</div>
<div class="form-group">
  <label for="gambar">Upload Gambar</label>
  <input type="file" class="form-control-file" name="gambar" id="gambar">
  
</div>
<button type="submit" class="btn btn-primary"> Tambah Data!</button>

</form>

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
