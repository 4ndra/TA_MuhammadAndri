<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>T</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../register-login-ajax-php/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  
  </head>
  <body class="main-layout">

  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" id = "nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" id = "nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4" id = "alamat"></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4" id = "alamat"></textarea>
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4" id = "alamat"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <script>
      $(document).ready(function() {

        $(".btn-success").click( function() {
        
          var nisn = $("#nik").val();
          var nama_lengkap = $("#nama_lengkap").val();
          var alamat = $("alamat").val();
          var jenis_kelamin = $("jenis_kelamin").val();
          var lahir = $("tanggal_lahir").val();

          if(nisn.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'nisn Wajib Diisi !'
            });

          } else if(nama_lengkap.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'nama lengkap Wajib Diisi !'
            });

        } else if(alamat.length == "") {

            Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'alamat Wajib Diisi !'
            });

          } else {

            $.ajax({

url: "simpan-data.php",
type: "POST",
data: {
    "nik": nik,
    "nama_lengkap": nama_lengkap,
    "alamat": alamat,
    "jenis_kelamin": jenis_kelamin,
    "tanggal_lahir": lahir
},

success:function(response){

  if (response == "success") {

    Swal.fire({
      type: 'success',
      title: 'Tambah Data Berhasil!',
      text: 'silahkan login!'
    });

    $("#nik").val('');
    $("#nama_lengkap").val('');
    $("#alamat").val('');
    $("#").val('');
    $("#alamat").val('');


  } else {

    Swal.fire({
      type: 'error',
      title: 'Tambah Data Gagal!',
      text: 'silahkan coba lagi!'
    });

  }

  console.log(response);

},

error:function(response){
    Swal.fire({
      type: 'error',
      title: 'Opps!',
      text: 'server error!'
    });
}

})

}

}); 

});
    </script>
  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>