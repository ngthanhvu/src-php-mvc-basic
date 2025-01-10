<?php
require_once "controller/Controller.php";
require_once "controller/ProductController.php";
require_once "controller/CategoryController.php";
require_once "router/Router.php";
$router = new Router();
$Controller = new Controller();
$productController = new ProductController();
$categoryController = new CategoryController();

$router->addRoute("/", [$Controller, "index"]);

$router->addRoute("/products", [$productController, "index"]);
$router->addRoute("/products/create", [$productController, "create"]);
$router->addRoute("/products/{id}", [$productController, "show"]);
$router->addRoute("/products/edit/{id}", [$productController, "edit"]);
$router->addRoute("/products/delete/{id}", [$productController, "delete"]);

$router->addRoute("/categories", [$categoryController, "index"]);
$router->addRoute("/categories/create", [$categoryController, "create"]);
$router->addRoute("/categories/{id}", [$categoryController, "show"]);
$router->addRoute("/categories/edit/{id}", [$categoryController, "edit"]);
$router->addRoute("/categories/delete/{id}", [$categoryController, "delete"]);

$router->dispatch();
?>