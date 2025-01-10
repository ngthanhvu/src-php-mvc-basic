<?php
require_once "view/helpers.php";

class Controller {
    public function index() {
        renderView("view/index.php", [], "Home");
    }
}
?>