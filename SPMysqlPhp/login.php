<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>

        <form method="post" action="auth.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="userName" class="form-control">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Key</label>
                <input type="password" name="key" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" name ="login">
                <p><a href="register.php">Register</a>.</p>
        </form>
    </div>
</body>
</html>