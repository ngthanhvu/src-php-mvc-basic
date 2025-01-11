<?php
require_once "controller/Controller.php";
require_once "controller/ProductController.php";
require_once "controller/CategoryController.php";
require_once "controller/UserController.php";
require_once "router/Router.php";
$router = new Router();
$Controller = new Controller();
$productController = new ProductController();
$categoryController = new CategoryController();
$userController = new UserController();

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

$router->addRoute("/users", [$userController, "index"]);
$router->addRoute("/register", [$userController, "register"]);
$router->addRoute("/login", [$userController, "login"]);
$router->addRoute("/users/{id}", [$userController, "show"]);
$router->addRoute("/users/edit/{id}", [$userController, "edit"]);
$router->addRoute("/users/delete/{id}", [$userController, "delete"]);

$router->dispatch();
