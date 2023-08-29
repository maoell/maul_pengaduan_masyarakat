
<!DOCTYPE HTML>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="login">
          <h1>Login</h1>
            <form action="proses-login.php" method="POST">
                <label>Username</label><br>
                <input type="username" class="form-control" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" required><br>
                <button type="submit"> Login</button>
                <a link href="daftar.php"><button type="button"> Gak Punya Akun?</button></a>
            </form>
        </div>     
    </body>
</html>