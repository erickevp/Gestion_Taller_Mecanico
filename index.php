<?php
require_once __DIR__ . '/config/config.php';
if (isLoggedIn()) {
    redirect(homeUrl());
} else {
    redirect(BASE_URL . 'modules/auth/views/login.php');
}
