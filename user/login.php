
<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <div class="header">
        <table>
            <tr align="center">
                <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
            </tr>
        </table>
    </div>
    <div class="satu">
        <h2>Learning Management System</h2>
        <form method="post" action="proseslg.php" enctype="multipart/form-data">
            <label for="username"><i class="fa-solid fa-user"></i>  username</label>
            <input type="text" name="username" required>
            
            <label for="password"><i class="fa-solid fa-lock"></i>  password</label>
            <input type="password" name="password" required>
            <center><?php
                if(isset($_GET['msg'])){
                if($_GET['msg']=="gagal"){
                    echo"username atau password salah.";
                }else if($_GET['msg']=="logout"){
                    echo "logout berhasil";
                }else if($_GET['msg']=="not login"){
                    echo "lakukan login";
                }
            }
            ?></center>            
            <br>
            <button class="log" type="submit">Login</button>

            <p>contoh username : 222****** (NIM)</p>
            <p>contoh password : DN#222****** (beri tambahan DN#)</p>
            <p>bila tidak dapat mengakses hubungi dosen agar dapat login</p>
        </form>
    </div>
    <div class="footer">
        <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
    </div>
</body>
</html>
