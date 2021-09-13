<div class="container mt-5">
    <div class="card" >
        <div class="card-header">
            Product list
        </div>
        <div class="card-body">
            <a href="index.php?page=product-add" type="button" class="btn btn-primary mb-3">Add New Product</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Code</th>
        <th scope="col">Brand</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Ram</th>
        <th scope="col">CPU</th>
        <th scope="col">Card</th>
        <th scope="col">Hard Disk</th>
        <th scope="col">Screen</th>
        <th scope="col">Description</th>
        <th scope="col" colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)){
        foreach($products as $product):;
            ?>
    <tr>
        <td> <?php echo $product['id'] ?></td>
        <td> <?php echo $product['product_code'] ?></td>
        <td> <?php echo $product['brand'] ?></td>
        <td> <?php echo $product['category'] ?></td>
        <td> <?php echo $product['image'] ?></td>
        <td> <?php echo $product['name'] ?></td>
        <td> <?php echo $product['ram'] ?></td>
        <td> <?php echo $product['cpu'] ?></td>
        <td> <?php echo $product['card'] ?></td>
        <td> <?php echo $product['hard_disk'] ?></td>
        <td> <?php echo $product['screen'] ?></td>
        <td> <?php echo $product['description'] ?></td>
        <td><a href="index.php?page=product-update&id=<?php echo $product['id']?>" type="button" class="btn btn-warning">Edit</a></td>
        <td><a onclick="return confirm('Are you want to Delete?')" href="index.php?page=product-delete&id=<?php echo $product['id']?>" type="button" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php endforeach; };?>
    </tbody>
</table>
