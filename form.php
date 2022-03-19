<!DOCTYPE html>
    <html>
    <head>
        <title>Form Cuti</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            p {
            margin-top: 50px;
            }
        </style>
        </head>
    <body>
<?php
$id = $_POST['id'];
if ($_POST['divisi'] == "HRD"){
    include_once("config.php");
    ?>
    <p></p>
    <div class = "page-header"> 
    <h1 align="center">Data Pengajuan Cuti</h1> 
    <p></p>
    </div> 
    <div class="row d-flex justify-content-center">
    <div class="col-md-12">
    <table class="table">
    <thead class="thead-grey">
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>Divisi</th>
            <th>Jabatan</th>
            <th>Nama</th>
            <th>Jenis Cuti</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        $counter=1;
        while ($data = mysqli_fetch_array($sql)) 
        {
        ?>

        <tr align="center">
            <td><?=$counter;?></td>
            <td><?=$data['id'];?></td>
            <td><?=$data['divisi'];?></td>
            <td><?=$data['jabatan'];?></td>
            <td><?=$data['nama'];?></td>
            <td><?=$data['jenis'];?></td>
            <td><?=$data['keterangan'];?></td>
            <td><?=$data['status'];?></td>
            <td><a class="btn btn-success" href='terima.php?id=<?=$data['id'];?>'
            onclick="return confirm ('Terima Pengajuan?') ">Terima</a>| 
            <a class="btn btn-danger" href='tolak.php?id=<?=$data['id'];?>'>Tolak</a> </td>
        </tr>

        <?php $counter++;
        } ?>

    </table>
<?php
}
else{
    if ($_POST['action'] == 'Cek') {
        include_once("config.php");
        $query = mysqli_query($conn,"SELECT * FROM data_formulir WHERE id='$id'");
        $datacari = mysqli_fetch_array($query);
        if ($datacari['id']!=null){
            ?>
            <p></p>
            <div class = "page-header"> 
            <h1 align="center">Data Pengajuan Cuti</h1> 
            
            </div> 
            <p></p>
            <div class="row d-flex justify-content-center">
            <div class="col-md-10">
            <table class="table">
            <thead class="thead-grey">
            <tr>
                <th>ID</th>
                <th>Divisi</th>
                <th>Jabatan</th>
                <th>Nama</th>
                <th>Jenis Cuti</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
            <tr align="center">
                <td><?=$datacari['id'];?></td>
                <td><?=$datacari['divisi'];?></td>
                <td><?=$datacari['jabatan'];?></td>
                <td><?=$datacari['nama'];?></td>
                <td><?=$datacari['jenis'];?></td>
                <td><?=$datacari['keterangan'];?></td>
                <td><?=$datacari['status'];?></td>
            </tr>
            </thead>
            </table>
            </div>
            </div>
        <?php
        }
        else{
            echo "<script type='text/javascript'>alert('Tidak terdapat pengajuan atas ID ini!');</script>";
        }
        
        
    } else if ($_POST['action'] == 'Pengajuan') {
        ?>
        <div class="row d-flex justify-content-center">
        <div class="col-md-6">

        <form action="form.php" method="POST" >
            <p></p>
            <div class = "page-header"> 
            <h1>Pengajuan Cuti</h1> 
            </div> 
            <div class="mb-3">
                <label for="divisi" class="form-label">ID</label>
                <input type="number" class="form-control" name = "id" id="id" value = "<?php echo $_POST['id']?>">
                <label for="divisi" class="form-label">Divisi</label>
                <input type="text" class="form-control" name = "divisi" id="divisi" value = "<?php echo $_POST['divisi']?>">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name = "jabatan">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name = "nama">
                <label for="jenis" class="form-label">Jenis Cuti</label>
                <input type="text" class="form-control" id="jenis" name = "jenis">
                <input type="hidden" id="status" name="status" value="belum">
            </div>
            <div class="mb-5">
                <label for="keterangan" class="form-label">Keterangan Cuti</label>
                <input type="text" class="form-control" id="keterangan" name = "keterangan">
            </div>
            <button type="submit" name="Submit" class="btn btn-primary">Kirim</button>
            

        </form>
        </div>
        </div>
    </body>
    </html>
        <?php
    }
}
if(isset($_POST['Submit'])){
    $id = $_POST['id'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $status = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    $conn=mysqli_connect("localhost","root","","db_form");
    $sql = mysqli_query($conn,"insert into data_formulir (id, divisi, jabatan, nama, jenis, status, keterangan) 
    values ('$id','$divisi','$jabatan','$nama','$jenis','$status','$keterangan')");
    if($sql) 
    {header('location:index.php');
        
    }
    else
    {
        echo "<script type='text/javascript'>alert('Data Gagal Dikirim!');</script>";
    }
}
?>