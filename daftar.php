<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="daftar">
          <h1>daftar</h1>

            <form method="POST" action="proses_daftar.php"> 
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
               

                <label>Nik</label>
                <br>
                <input name="nik" type="text" required >
                <br>
                <label>Nama </label>
                <br>
                <input name="nama" type="text" required >
                <br>
                <label>Username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>No Telp</label>
                <br>
                <input name="tlp" type="text" required >
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required >
                <br>

                <button type="submit">Daftar</button>
                <a link href="login.php"><button type="submit"> Kembali</button></a>