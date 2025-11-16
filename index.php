<?php
// =======================================================
//   PUNTO DE ENTRADA PRINCIPAL DEL MVC (index.php)
// =======================================================

// Cargar automáticamente los controladores y modelos
spl_autoload_register(function ($class) {
    $paths = ['src/controllers/', 'src/models/', 'src/DAO/'];
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Controlador y acción por defecto
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'homeController';
$actionName = $_GET['action'] ?? 'index';

// Verificar si la clase existe
if (!class_exists($controllerName)) {
    require_once "src/views/404.php";
    exit;
}

// Crear instancia del controlador
$controller = new $controllerName();

// Verificar si la acción existe
if (!method_exists($controller, $actionName)) {
    require_once "src/views/404.php";
    exit;
}

// Ejecutar la acción
$controller->$actionName();