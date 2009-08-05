<ul id="navlist">
<?php
if (Session::instance()->isLoggedIn()) {
    $items = array('Home', 'About');
} else {
    $items = array('Home', 'Login', 'Register', 'About');
}

$current = Session::instance()->navbarItem();

foreach ($items as $item) {
    echo '<li>';
    echo '<a href="index.php?page=' . strtolower($item) . '"';
    if ($current == $item) {
	echo ' id="active-navbar-item"';
    }
    echo '>' . $item . '</a></li>';
}
?>
</ul>
