<h2 class="text-center">Đây là trang chủ nhaa !!!</h2>
<?php
if (isset($products)) {
    foreach ($products as $product) {
        echo "<p>{$product['name']} - {$product['price']}</p>";
    }
}
