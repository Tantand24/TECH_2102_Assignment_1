<?php include 'partials/Header.php'; ?>
    <title>SignUp</title>
</head>
<body>

<?php include 'partials/Navi.php';?>

<div class="container">
    <h1>Register</h1>
    <p class="errormsg" style="color: red;"><?php echo $_SESSION['error']; ?></p>
    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div>
        <div>
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter your confirm password" required>
        </div>
        <button type="submit">Sign Up</button>
    </form>
</div>

<?php include 'partials/Footer.php'; ?>