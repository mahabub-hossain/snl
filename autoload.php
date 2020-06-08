<?php
spl_autoload_register(function($className) {
    //echo $className;
    $file = __DIR__ . '\\src\\' . '\\providers\\' . $className . '.php';
    //echo $file;
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
        include $file;
    }
});
