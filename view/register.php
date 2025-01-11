<h2 class="text-center">Đăng ký</h2>
<form class="form-control w-50 mx-auto p-3" method="POST">
    <div class="form-group mt-3">
        <label for="username">Tài khoản</label>
        <input type="text" name="username" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>" placeholder="Nhập tài khoản">
        <?php
        if (isset($errors['username'])) {
            echo '<div class="invalid-feedback">' . $errors['username'] . '</div>';
        }
        ?>
    </div>
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>" placeholder="Nhập email">
        <?php
        if (isset($errors['email'])) {
            echo '<div class="invalid-feedback">' . $errors['email'] . '</div>';
        }
        ?>
    </div>
    <div class="form-group mt-3">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>" placeholder="Nhập mật khẩu">
        <?php
        if (isset($errors['password'])) {
            echo '<div class="invalid-feedback">' . $errors['password'] . '</div>';
        }
        ?>
    </div>
    <div class="form-group mt-3">
        <label for="confirm_password">Nhập lại mật khẩu</label>
        <input type="password" name="confirm_password" class="form-control <?php echo isset($errors['confirm_password']) ? 'is-invalid' : ''; ?>" placeholder="Nhập lại mật khẩu">
        <?php
        if (isset($errors['confirm_password'])) {
            echo '<div class="invalid-feedback">' . $errors['confirm_password'] . '</div>';
        }
        ?>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Đăng ký</button>
    <a href="/login" class="btn btn-secondary mt-3">Đăng nhập</a>
</form>