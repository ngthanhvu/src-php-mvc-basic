<?php
require_once "model/ProductModel.php";
require_once "view/helpers.php";

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAllProducts();
        //compact: gom bien dien thanh array
        renderView("view/product_list.php", compact('products'), "Product List");
    }

    public function indexHome()
    {
        $products = $this->productModel->getAllProducts();
        renderView("view/index.php", compact('products'), "Home");
    }

    public function show($id)
    {
        $product = $this->productModel->getProductById($id);
        renderView("view/product_detail.php", compact('product'), "Product Detail");
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? '';

            if (empty($name)) {
                $errors['name'] = 'Name is required';
            }

            if (empty($description)) {
                $errors['description'] = 'Description is required';
            }

            if (empty($price)) {
                $errors['price'] = 'Price is required';
            } else if (!is_numeric($price)) {
                $errors['price'] = 'Price must be a number';
            }

            if (!empty($errors)) {
                renderView("view/product_create.php", compact('errors'), "Create Product");
            } else {
                $this->productModel->createProduct($name, $description, $price);
                $_SESSION['message'] = "Product created successfully!";
                header("Location: /products");
            }
        } else {
            renderView("view/product_create.php", [], "Create Product");
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            $this->productModel->updateProduct($id, $name, $description, $price);
            $_SESSION['message'] = "Product updated successfully!";
            header("Location: /products");
        } else {
            $product = $this->productModel->getProductById($id);
            renderView("view/product_edit.php", compact('product'), "Edit Product");
        }
    }

    public function delete($id)
    {
        $this->productModel->deleteProduct($id);
        $_SESSION['message'] = "Product deleted successfully!";
        header("Location: /products");
    }
}
