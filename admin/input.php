<!doctype html>
<html>
  <head>
    <title>Formulir Mahasiswa</title>
    <style>
      body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    color: #333;
}
      .header{
    background-color: #3498db;
    padding: 4px;
    color: white;
    text-align: center;
}
.header table{
    text-align: center;
    padding:5;
    width:100%;
}
button{
    padding: 10px;
    color: white;
    background-color: blue;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
      #satu {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      #satu td,#satu th {
        border: 1px solid #add;
        padding: 8px;
      }
      #satu tr:nth-child(even){background-color: #FFC;}
      #satu tr:hover {background-color: #add;}
      #satu th {
        padding-top: 12px;
        padding-bottom : 12px;
        text-align: left;
        background-color: green;
        color: white;
      }
      .btn{padding: 10px; background-color: greenyellow;}
    </style>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  </head>
  <body>

  <div class="header">
    <table>
      <tr align="center">
            <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></a></td>
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
            <td><a href="index.php"align="center" onclick="return confirm('Anda yakin akan Logout ?')" ><i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i></td>
      </tr>
    </table>
    <table align="center">
        <tr align="center">
            <td><a class="navbar-brand" href="list.php"><button>data mahasiswa</button></a></td>
        </tr>
    </table>
</div>

    <center>
        <h2>Form Mahasiswa</h2>
    <!--action kosong berarti mengirim ke diri sendiri-->
    <form method="POST" action="proses.php" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="jk" value="Laki-laki"/>Laki-laki
          <input type="radio" name="jk" value="Perempuan" />Perempuan</td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="number" name="nim" required /></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td><input type="text" name="kelas" required /></td>
        </tr>
        <tr>
          <td>username</td>
          <td><input type="text" name="username" required /></td>
        </tr>
        <tr>
          <td>password</td>
          <td><input type="text" name="password" required /></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" id="foto"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="simpan" name="kirim"></td>
        </tr>
        
      </table>
      <input type="hidden" name="tersembunyi" value="Kode sesi: ABC DEF XYZ 123 789"/>
    </form>
    </center>
    
  </body>
</html>