<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Thêm mặt hàng</title>
</head>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Thêm mặt hàng
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-productName">Tên hàng:</label>
                    <input type="text" class="form-control" id="product-productName" name = "productName" >
                </div>
                <div class="form-group">
                    <label for="product-category">Loại hàng:</label>
                    <input type="text" class="form-control" id="product-category" name="category" >
                </div>
                <div class="form-group">
                    <label for="product-price">Giá:</label>
                    <input type="text" class="form-control" id="product-price" name="price">
                </div>
                <div class="form-group">
                    <label for="product-quantity">Số lượng:</label>
                    <input type="text" class="form-control" id="product-quantity" name="quantity">
                </div>
                <div class="form-group">
                    <label for="product-description">Mô tả</label>
                    <textarea type="text" class="form-control" id="product-description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mặt hàng</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Thoát</a>
            </form>
        </div>
    </div>
</div>
