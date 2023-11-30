<?php

function dump($data): void {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function dd($data): never {
   dump($data);
   die;
}

function load(array $fillable, $post = true): array {
    $load_data = $post ? $_POST : $_GET;
    $data = [];

    foreach ($fillable as $value) {
        if (isset($load_data[$value])) {
            $data[$value] = trim($load_data[$value]);
        } else {
            $data[$value] = '';
        }
    }
    return $data;
}

function check_required_fields(array $data): true|array {
    $errors = [];

    foreach ($data as $k => $v) {
        if (empty($v)) {
            $errors[] = "Не заполнено поле {$k}";
        }
        if (!$errors) {
            return true;
        }
    }
    return $errors;
}

function h(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES);
}

function old(string $name, $post = true): string {
    $load_data = $post ? $_POST : $_GET;
    return isset($load_data[$name]) ? h($load_data[$name]) : '';

}

function get_errors(array $errors): string {
    $html = '<ul class="list-unstyled">';
    foreach ($errors as $error) {
        $html .= "<li>{$error}</li>";
    }
    $html .= '<ul>';
    return $html;
}

function get_alerts(): void {
    if (!empty($_SESSION['errors'])) {
        require VIEWS . '/incs/alert_danger.tpl.php';
        unset($_SESSION['errors']);
    }

    if (!empty($_SESSION['success'])) {
        require VIEWS . '/incs/alert_success.tpl.php';
        unset($_SESSION['success']);
    }
}