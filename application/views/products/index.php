<h1>My Shop</h1>
<?php if (!empty($products)): foreach ($products as $product): ?>
        <div>
            <h2><?php echo $product['name']; ?></h2>
            <p>$<?php echo $product['price']; ?> USD</hp>
        </div>
        <a href="<?php echo base_url() . 'products/buy/' . $product['id']; ?>">
            Pay via PayPal
        </a>

        <div style="border-bottom: 1px solid #ccc;margin: 20px;"></div>

    <?php endforeach; ?>
<?php endif; ?>
