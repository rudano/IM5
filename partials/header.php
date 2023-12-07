<header>
    <div class="logo">
        <a href="/">
            <img src="/assets/images/logo.png" alt="Logo">
        </a>
    </div>
    <nav>
        <img src="/assets/images/hamburger-menu-icon.jpg" alt="Button to open the menu." class="hamburger-menu-icon">
        <ul>
            <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'what-is-immersion.php') echo 'class="text-red"' ?> href="/what-is-immersion.php">Was bedeuted Immersion?</a></li>
            <li><a <?php if (strpos($_SERVER['REQUEST_URI'], 'usage-areas') !== false) echo 'class="text-red"' ?> href="/usage-areas.php">Anwendungsbereiche</a></li>
            <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'about-me.php') echo 'class="text-red"' ?> href="/about-me.php">Über mich</a></li>
        </ul>
    </nav>
</header>
<ul class="responsive-menu hide">
    <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'what-is-immersion.php') echo 'class="text-red"' ?> href="/what-is-immersion.php">Was bedeuted Immersion?</a></li>
    <li><a <?php if (strpos($_SERVER['REQUEST_URI'], 'usage-areas') !== false) echo 'class="text-red"' ?> href="/usage-areas.php">Anwendungsbereiche</a></li>
    <ul>
        <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'vr.php') echo 'class="text-red"' ?> href="/usage-areas/vr.php">Virtual Reality</a></li>
        <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'ar.php') echo 'class="text-red"' ?> href="/usage-areas/ar.php">Augmented Reality</a></li>
        <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'art.php') echo 'class="text-red"' ?> href="/usage-areas/art.php">Kunst</a></li>
        <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'theatre.php') echo 'class="text-red"' ?> href="/usage-areas/theatre.php">Theater</a></li>
        <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'film.php') echo 'class="text-red"' ?> href="/usage-areas/film.php">Film</a></li>
        <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'literature.php') echo 'class="text-red"' ?> href="/usage-areas/literature.php">Literatur</a></li>
    </ul>
    <li><a <?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'about-me.php') echo 'class="text-red"' ?> href="/about-me.php">Über mich</a></li>
</ul>