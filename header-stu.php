<header class="header">
    <a href="/"><img src="./images/logo.png" alt="uLink logo" class="ulink-logo" /></a>
    <nav class="parent-burger">
        <button type="button" data-burger-toggle class="i-burger" alt="burger menu" aria-label="burger menu">
            <span></span> <!-- middle bar -->
        </button>
        <ul class="nav-links" data-nav-vertical>
            <li><a href="#">Your internships</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Research <i class="fas fa-search"></i></a></li>
        </ul>
    </nav>
    <div class="nav-icons">
        <a href="#" class="notif-icon" alt="notif center" aria-label="notif center"><i class="fas fa-bell"></i></a>
        <button type="button" data-modal-target="#modal-container" class="login-btn" >
            Login <i class="fas fa-user-alt"></i>
        </button>
    </div>
    <div id="burger-overlay"></div>

    <div class="modal-container" id="modal-container" role="dialog" aria-modal="true">
        <div class="modal-header">
            <h2 class="title">Welcome</h2>
            <button class="modal-close-btn" data-modal-close type="button">
                <span class="cross">&#10006;</span>
                <span class="cross-bg"></span>
            </button>
        </div>
        <div class="modal-main">
            <form action="" method="POST">
                <legend><h3>Login to your account!</h3></legend>
                <div class="login-field">
                    <label for="login-email"></label>
                    <input type="email" name="login_email" class="login-input" id="login-email" placeholder="Email" />
                </div>
                <div class="login-field">
                    <label for="login-password"></label>
                    <input type="password" name="login_password" class="login-input" id="login-password" placeholder="Password" />
                </div>
                <button type="submit" class="login-input" id="login-btn">Login</button>
            </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
    <div id="modal-overlay"></div>
</header>




