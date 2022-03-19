<!DOCTYPE html>
<html>
  <head>
    <title>Form Cuti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        p {
        margin-top: 175px;
        }
    </style>
    </head>
  <body>
        <div class="row d-flex justify-content-center">
        <div class="col-md-6">

        <form action="form.php" method="POST" >
            <p></p>
            <div class = "page-header"> 
            <h1>Halaman Login</h1> 
            </div> 
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" name="id" id="id">
            </div>
            <div class="mb-3">
                <label for="divisi" class="form-label">Divisi</label>
                <input type="text" class="form-control" name = "divisi" id="divisi">
            </div>
            <input type="submit" class="btn btn-info" name="action" value="Cek" />
            <input type="submit" class="btn btn-success" name="action" value="Pengajuan" />
        </form>   
        </div>
        </div>
  </body>
</html>