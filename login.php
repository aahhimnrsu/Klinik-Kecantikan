<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container">
        <form action="data.php" method="post">
            <p align=center>
            <img src="assets/LOGO.png" width=50%> <br>
            </p>
            <label placeholder="user">Username</label><br>
            <input type="text" name="user"><br>
            <label>Password</label><br>
            <input type="password" name="pass"><br>
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>
</body>
</html>