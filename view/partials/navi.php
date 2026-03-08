<nav>
    <ul>
        <li><a class="<?php echo setActiveClass('HomePage.php') ?>" href="index.php">Home</a></li>

        <?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true): ?>
        <li>
            <a class="<?php echo setActiveCLass("dashboard.php")?>" href="dashboard.php">Dashboard</a>
        </li>
        <li>
            <a class="<?php echo setActiveCLass("logout.php")?>" href="logout.php">Logout</a>
        </li>
        <?php else: ?>
            <li>
                <a class="<?php echo setActiveCLass("Signup.php")?>" href="register.php">Sign-up</a>
            </li>
            <li>
                <a class="<?php echo setActiveCLass("login.php")?>" href="login.php">Login</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>