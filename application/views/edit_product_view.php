<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title>Edit Product</title>
</head>

<body>

    <div class="container">
        <h1>
            <center>Edit Product</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?= site_url('product/update') ?>" method="post">
                <div class="form-group mb-3">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" value="<?= $product_name ?>" />
                </div>
                <div class="form-group mb-3">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Product Price" value="<?= $product_price ?>" />
                </div>
                <input type="hidden" name="product_id" value="<?= $product_id ?>" />
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- Load jQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

    <!-- Load JS Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>