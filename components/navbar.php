<!-- /components/navbar.php -->
<header>
    <div class="header-container">
        <div class="logo-container">
            <a href="./">
                <img src="assets/img/LOGO_CODEHCIU_100.png" alt="LOGO" class="logo">
            </a>
            <div class="logo-text">
                <h1>COMISION PARA LOS DERECHOS<br> HUMANOS Y LA CIUDADANIA</h1>
                <p data-i18n="nav_desc">Ayudamos y transformamos vidas.</p>
            </div>
        </div>

        <nav id="main-nav">
            <ul>
                <li><a href="./#quienesSomos" data-i18n="nav_about">Quienes Somos</a></li>
                <li><a href="./#ninos" data-i18n="nav_kids">Niñez y Adolescencia</a></li>
                <li><a href="./#mujeres" data-i18n="nav_women">Mujeres</a></li>
                <li><a href="./#informes" data-i18n="nav_informes">Informes</a></li>
                <li><a href="./#pinceladas" data-i18n="nav_pinceladas">Pinceladas de Vida</a></li>
                <li><a href="./#podcast" data-i18n="nav_podcast">Podcast</a></li>
                <li><a href="./#noticias" data-i18n="nav_news">Noticias</a></li>
                <li class="nav-donate-btn">
                    <a href="./donar.php" class="btn-donate-nav">
                        <i class="fas fa-heart"></i> Donar
                    </a>
                </li>
            </ul>
        </nav>

        <div class="mobile-menu" id="mobile-menu-btn">
            <i class="fas fa-bars"></i>
        </div>

        <div class="lang-switcher">
            <button id="lang-btn" aria-label="Cambiar idioma" title="Cambiar idioma (ES)">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20" stroke="currentColor" stroke-width="1.5" fill="none"/>
                </svg>
                <span id="lang-label">ES</span>
            </button>

            <ul id="lang-dropdown">
                <li>
                    <button type="button" class="lang-option" data-lang="ES">🇪🇸 Español</button>
                </li>
                <li>
                    <button type="button" class="lang-option" data-lang="EN">🇬🇧 English</button>
                </li>
            </ul>
        </div>
    </div>
</header>
