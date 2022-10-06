<nav>
        <?php if(isset($_SESSION['user'])): ?>
            <div>
                <a href="/login">Login</a>
                <a href="/dashboard">Dashboard</a>
                <a href="/logout"><?= $_SESSION['user']->username ?> (Logout)</a>
                <?php endif; ?>
                <a href="/register">Register</a>
            </div>
</nav>