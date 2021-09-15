<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            UPDATE product
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" class="form-control" id="product-name" name = "name" value = <?php echo $product['name'] ?> placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="product-brand">Author</label>
                    <input type="text" class="form-control" id="product-brand" name="author" value = <?php echo $product['brand'] ?> placeholder="Enter brand">
                </div>

                <div class="form-group">
                    <label for="product-category">Category</label>
                    <input type="text" class="form-control" id="product-category" name="category" value = <?php echo $product['category'] ?> placeholder="Enter category">
                </div>

                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea type="text" class="form-control" id="product-description" name="description" placeholder="Enter desc"><?php echo $product['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
