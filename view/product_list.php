<?php
if (isset($_SESSION['message'])) {
    echo "<script>Swal.fire('Thành công', '" . $_SESSION['message'] . "', 'success');</script>";
    unset($_SESSION['message']);
}
?>
<h1>Product List</h1>
<a href="/products/create" class="btn btn-primary mb-3">Create Product</a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td>$<?= $product['price'] ?></td>
                <td>
                    <a href="/products/<?= $product['id'] ?>" class="btn btn-info">View</a>
                    <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
                    <button class="btn btn-danger" onclick="confirmDelete(<?= $product['id'] ?>)">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    function confirmDelete(productId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `/products/delete/${productId}`;
            }
        });
    }
</script>