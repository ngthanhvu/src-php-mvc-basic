<?php
require_once "model/UserModel.php";
require_once "view/helpers.php";

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        renderView("view/user_list.php", compact('users'), "User List");
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirm_password'] ?? '';

            if (empty($username)) {
                $errors['username'] = 'Username is required';
            }

            $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            if (!preg_match($regex, $email)) {
                $errors['email'] = 'Invalid email format';
            } else if (empty($email)) {
                $errors['email'] = 'Email is required';
            }

            if (empty($password)) {
                $errors['password'] = 'Password is required';
            }

            if (empty($confirmPassword)) {
                $errors['confirm_password'] = 'Confirm Password is required';
            } else if ($password !== $confirmPassword) {
                $errors['confirm_password'] = 'Passwords do not match';
            }

            if (!empty($errors)) {
                renderView("view/register.php", compact('errors'), "Register User");
            } else {
                $this->userModel->register($username, $email, $password);
                echo "<script>alert('User registered successfully!'); window.location.href = '/';</script>";
            }
        } else {
            renderView("view/register.php", [], "Register User");
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            if (!preg_match($regex, $email)) {
                $errors['email'] = 'Invalid email format';
            } else if (empty($email)) {
                $errors['email'] = 'Email is required';
            }

            if (empty($password)) {
                $errors['password'] = 'Password is required';
            }

            if (!empty($errors)) {
                renderView("view/login.php", compact('errors'), "Login User");
            } else {
                $user = $this->userModel->login($email, $password);
                if ($user) {
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: /");
                } else {
                    $errors['login'] = 'Invalid email or password';
                    renderView("view/login.php", compact('errors'), "Login User");
                }
            }
        } else {
            renderView("view/login.php", [], "Login User");
        }
    }
}
