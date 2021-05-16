  @extends ('fix/admin')
@section ('container')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container" >
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
    <div class="col-2"></div>
<div  class="col-12" style=" background-color: #fff;">

    <h1 class="mt-3"><u>Form Tambah Data Kuliner</u></h1>
    <br>
    <form method="post" action="/kuliner/create" enctype="multipart/form-data" >
      @csrf
  <div class="mb-3">
  <label for="nama" class="form-label">Nama Kuliner</label>
  <input type="text" class="form-control @error('nama_kuliner') is-invalid @enderror" id="nama" placeholder="Nama Kuliner" name="nama_kuliner">
  <div class="invalid-feedback">
    Tolong is Nama Kuliner
  </div>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" name="alamat">
  <div class="invalid-feedback">
    Tolong is Alamat
  </div>
</div>
<div class="mb-3">
  <label for="jenis_makanan" class="form-label @error('jenis_makanan') is-invalid @enderror">Jenis Makanan</label>
  <div class="invalid-feedback">
    Tolong is Jenis Makanan
  </div>
  <br>
  <select name='jenis_makanan' id="jenis_makanan">
    
    <option value='Cafe'>Cafe</option>
    <option value='Restaurant'>Restaurant</option>
    <option value='Rumah Makan'>Rumah Makan</option>
      
    </select>
<!--   <input type="text" class="form-control" id="jenis_makanan" placeholder="Jenis Makanan" name="jenis_makanan"> -->
</div>
<div class="mb-3">
  <label for="deskripsi" class="form-label ">Deskripsi</label>
  <textarea  type="text" placeholder="isi deskripsi"  name="deskripsi" id="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
  <div class="invalid-feedback">
    Tolong is deskripsi
  </div>

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