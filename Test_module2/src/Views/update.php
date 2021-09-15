<div class="container mt-5">
    <div class="card">
        <?php  if(isset($product)){?>
        <div class="card-header">
            Chỉnh sửa mặt hàng <?php echo $product['productName'] ?>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-productName">Tên hàng</label>
                    <input type="text" class="form-control" id="product-productName" name = "productName" value = <?php echo $product['productName'] ?> >
                </div>

                <div class="form-group">
                    <label for="product-category">Loại hàng</label>
                </div>
                <div class="form-group">
                    <label for="product-price">Giá</label>
                    <input type="text" class="form-control" id="product-price" name="price" value = <?php echo $product['price'] ?>>
                </div>
                <div class="form-group">
                    <label for="product-quantity">Số lượng:</label>
                    <input type="text" class="form-control" id="product-quantity" name="quantity" value = <?php echo $product['quantity'] ?>>
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea type="text" class="form-control" id="product-description" name="description"><?php echo $product['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Thoát</a>
            </form>
        </div>
    </div>
    <?php }; ?>
</div>
