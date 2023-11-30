<?php

session_start();
require_once __DIR__ . '/incs/config.php';
require_once ROOT . '/incs/db.php';
require_once ROOT . '/incs/functions.php';

$title = 'Register';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = load(['name', 'email', 'password']);
    if (true === ($validate = check_required_fields($data))) {
        $_SESSION['success'] = 'Registration successful!';
    } else {
        $_SESSION['errors'] = get_errors($validate);
    }

}

require_once VIEWS . '/register.tpl.php';