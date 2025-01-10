<h2 class="text-center">Đăng ký</h2>
<form class="form-control w-50 mx-auto p-3" method="POST">
    <div class="form-group mt-3">
        <label for="username">Tài khoản</label>
        <input type="text" name="username" class="form-control" placeholder="Nhập tài khoản">
        <?php
        if(isset($errors['username'])) {
            echo '<p class="text-danger">' . $errors['username'] . '</p>';
        }
        ?>
    </div>
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Nhập email">
        <?php
        if(isset($errors['email'])) {
            echo '<p class="text-danger">' . $errors['email'] . '</p>';
        }
        ?>
    </div>
    <div class="form-group mt-3">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" class="form-control" placeholder="Nhập mật khau">
        <?php
        if(isset($errors['password'])) {
            echo '<p class="text-danger">' . $errors['password'] . '</p>';
        }
        ?>
    </div>
    <div class="form-group mt-3">
        <label for="confirm_password">Nhập lại mật khẩu</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu">
        <?php
        if(isset($errors['confirm_password'])) {
            echo '<p class="text-danger">' . $errors['confirm_password'] . '</p>';
        }
        ?>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Đăng ký</button>
    <a href="?mod=login" class="btn btn-secondary mt-3">Đăng nhập</a>
</form>