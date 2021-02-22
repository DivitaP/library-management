<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ 
            width: 350px; 
            padding: 20px; 
            background-color: lightblue; 
            margin-top:100px;
            border-radius: 10px;
            }
    </style>
</head>
<body>
    <center>
        <div class="wrapper" style="">
            <h2>Library Management System</h2>
            <p>Login/ Register. Choose one to get in the system.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
                <div class="form-group">
                    <a href="login.php" class="btn btn-default">Login</a>
                </div>

                <div class="form-group">
                    <a href="register.php" class="btn btn-default">Register</a>
                </div>
            
            </form>
        </div>    
    </center>
</body>
</html>