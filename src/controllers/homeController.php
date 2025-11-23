<?php
require_once "src/models/Producto.php"; // Modelo para acceder a la BD

class homeController {
    public function index() {
        $productoModel = new Producto();
        $productos = $productoModel->getAll(); // Devuelve un array de productos

        require "src/views/home.php"; // Ahora $productos está disponible en la vista
    }
}