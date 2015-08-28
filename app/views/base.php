<?php
require_once 'includes/header.php';

if (file_exists('../app/views/' . $view . '.php')){
    require_once $view . '.php';
}

require_once 'includes/footer.php';
