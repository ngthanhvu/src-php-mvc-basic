<h1>Create Product</h1>
<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
            type="text"
            class="form-control <?php echo isset($errors['name']) ? 'is-invalid' : ''; ?>"
            id="name"
            name="name">
        <?php if (isset($errors['name'])): ?>
            <div class="invalid-feedback">
                <?php echo $errors['name']; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea
            class="form-control <?php echo isset($errors['description']) ? 'is-invalid' : ''; ?>"
            id="description"
            name="description"
            rows="4"></textarea>
        <?php if (isset($errors['description'])): ?>
            <div class="invalid-feedback">
                <?php echo $errors['description']; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input
            type="number"
            class="form-control <?php echo isset($errors['price']) ? 'is-invalid' : ''; ?>"
            id="price"
            name="price"
            step="0.01">
        <?php if (isset($errors['price'])): ?>
            <div class="invalid-feedback">
                <?php echo $errors['price']; ?>
            </div>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>