<nav>
    <ul>
        <li><a class="<?php echo setActiveClass('HomePage.php') ?>" href="index.php">Home</a></li>

        <?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true): ?>
        <li>
            <a class="<?php echo setActiveCLass("Dashboard.php")?>" href="Dashboard.php">Dashboard</a>
        </li>
        <li>
            <a class="<?php echo setActiveCLass("Logout.php")?>" href="Logout.php">Logout</a>
        </li>
        <?php else: ?>
            <li>
                <a class="<?php echo setActiveCLass("Signup.php")?>" href="Signup.php">Sign-up</a>
            </li>
            <li>
                <a class="<?php echo setActiveCLass("Login.php")?>" href="login.php">Login</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>