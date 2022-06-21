<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/klinik-al-syifa.jpg" alt="" width="50" height="50">Klinik Al-Syifa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (logged_in()) : ?>
                        <a class="nav-link" href="/logout">Logout</a>
                    <?php else : ?>
                        <a class="nav-link" href="/login">Login</a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>