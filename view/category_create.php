<h1>Create Category</h1>
<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" >
        <?php if (isset($errors['name'])) { ?>
            <span class="text-danger">
                <?= $errors['name'] ?>
        </span> 
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        <?php if (isset($errors['description'])) { ?>
            <span class="text-danger">
                <?= $errors['description'] ?>
        </span> 
        <?php } ?>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>