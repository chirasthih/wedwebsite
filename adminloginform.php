<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        
        <form action="myadminaccount.php" method="post">
            <h3>Admin Log In</h3>
            <input type="email" name="email" required placeholder="Enter your Email" id="">
            <input type="password" name="password" required placeholder="Enter your Password" id="">
            <input type="submit" name="submit" value="Log In Now" class="form-btn" id="">
            <p>Don't have an account? <a href="adminregistrationform.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>