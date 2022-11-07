<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>Your Name</label>

        <input type="text" name="yname" placeholder="Please enter your Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Please Enter Password"><br> 

        <button type="submit">Login</button>

        <p><a href="#" class="link">Forgot Password?</a></p>
     </form>

</body>

</html>

