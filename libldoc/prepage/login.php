<?php
if (Session::instance()->isLoggedIn()) {
    LittleDropsOfCode::instance()->setPage('home');
}
