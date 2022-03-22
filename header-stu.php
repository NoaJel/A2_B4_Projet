<header class="header">
    <a href="/"><img src="./images/logo.png" alt="uLink logo" class="ulink-logo" /></a>
    <nav class="parent-burger">
        <button class="i-burger" data-burger-toggle type="button">
            <span></span> <!-- middle bar -->
        </button>
        <ul class="nav-links" data-nav-vertical>
            <li><a href="#">Your internships</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Research <i class="fas fa-search"></i></a></li>
        </ul>
    </nav>
    <div class="nav-icons">
        <a href="#" class="notif-icon"><i class="fas fa-bell"></i></a>
        <button type="button" data-modal-target="#modal-container" class="login-btn" >
            Login <i class="fas fa-user-alt"></i>
        </button>
    </div>
    <div id="burger-overlay"></div>

    <div class="modal-container" id="modal-container">
        <header class="modal-header">
            <h2 class="title">Login</h2>
            <button class="modal-close-btn" data-modal-close type="button">
                <span class="cross">&#10006;</span>
                <span class="cross-bg"></span>
            </button>
        </header>
        <main class="modal-main">
        </main>
        <footer class="modal-footer">
        </footer>
    </div>
    <div id="modal-overlay"></div>
</header>