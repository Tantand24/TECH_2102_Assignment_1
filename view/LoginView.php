<?php include 'partials/Header.php'; ?>
    <title>Login</title>
</head>
<body>

<?php include 'partials/Navi.php';?>

<div class="container">
    <h1>Login</h1>
    <p class="errormsg" style="color: red;"><?php echo $_SESSION['error']; ?></p>
    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
        </div>
         <div>
            <label for="username">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div>
        <input type="submit">
    </form>
</div>

<?php include 'partials/Footer.php'; ?>