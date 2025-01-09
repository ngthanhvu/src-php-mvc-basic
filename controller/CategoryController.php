<?php
require_once "model/CategoryModel.php";
require_once "view/helpers.php";

class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new CategoryModel();
    }

    public function index() {
        $categories = $this->categoryModel->getAllCategories();
        //compact: gom bien dien thanh array
        renderView("view/category_list.php", compact('categories'), "Category List");
    }

    public function show($id) {
        $category = $this->categoryModel->getCategoryById($id);
        renderView("view/category_detail.php", compact('category'), "Category Detail");
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
    
            if(empty($name)) {
                $errors['name'] = 'Name is required';
            }
    
            if(empty($description)) {
                $errors['description'] = 'Description is required';
            }
    
            if (!empty($errors)) {
                renderView("view/category_create.php", compact('errors'), "Create Category");
            } else {
                $this->categoryModel->createCategory($name, $description);
                header("Location: /categories");
                exit;
            }
        } else {
            renderView("view/category_create.php", [], "Create Category");
        }
    }
    

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];

            $this->categoryModel->updateCategory($id, $name, $description);
            header("Location: /categories");
        } else {
            $category = $this->categoryModel->getCategoryById($id);
            renderView("view/category_edit.php", compact('category'), "Edit Category");
        }
    }

    public function delete($id) {
        $this->categoryModel->deleteCategory($id);
        header("Location: /categories");
    }
}