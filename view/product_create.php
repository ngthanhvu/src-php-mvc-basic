<h1>Create Product</h1>
<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        <?php 
            if(isset($errors['name'])) {
                echo '<span class="text-danger">' . $errors['name'] . '</span>';
            }
        ?>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        <?php 
            if(isset($errors['description'])) {
                echo '<span class="text-danger">' . $errors['description'] . '</span>';
            }
        ?>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01">
        <?php 
            if(isset($errors['price'])) {
                echo '<span class="text-danger">' . $errors['price'] . '</span>';
            }
        ?>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>