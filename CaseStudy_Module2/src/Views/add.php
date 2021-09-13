<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW PRODUCT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" class="form-control" id="product-name" name = "name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="product-brand">Brand</label>
                    <input type="text" class="form-control" id="product-brand" name="brand" placeholder="Enter brand">
                </div>

                <div class="form-group">
                    <label for="product-category">Category</label>
                    <input type="text" class="form-control" id="product-category" name="category" placeholder="Enter category">
                </div>

                <div class="form-group">
                    <label for="product-description">description</label>
                    <textarea type="text" class="form-control" id="product-description" name="description" placeholder="Enter description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>