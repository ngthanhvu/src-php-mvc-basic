<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "My App" ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="h3">My App</h1>
            <nav>
                <a href="/" class="text-white me-3 text-decoration-none">Home</a>
                <a href="/products" class="text-white me-3 text-decoration-none">Products</a>
                <a href="/categories" class="text-white me-3 text-decoration-none">Categories</a>
                <a href="/users" class="text-white me-3 text-decoration-none">Users</a>
                <a href="/register" class="text-white me-3 text-decoration-none">Register</a>
                <a href="/login" class="text-white text-decoration-none">Login</a>
            </nav>
        </div>
    </header>
    <main class="container my-4" style="min-height: calc(100vh - 200px);">
        <?= $content ?>
    </main>
    <footer class="bg-dark text-white py-3 mt-4">
        <div class="container">
            <p class="mb-0">&copy; <?= date("Y") ?> My App</p>
        </div>
    </footer>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>