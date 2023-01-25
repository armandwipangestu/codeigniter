<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title>Product List</title>
</head>

<body>

    <div class="container">
        <h1>
            <center>Product List</center>
        </h1>
        <a href="<?= base_url("/product/add_new") ?>" class="btn btn-success">
            Add Product
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($product->result() as $row) :
                    $count++;
                ?>
                    <tr>
                        <th scope="row"><?= $count ?></th>
                        <td><?= $row->product_name ?></td>
                        <td><?= number_format($row->product_price) ?></td>
                        <td>
                            <a href="<?= site_url('product/get_edit/' . $row->product_id) ?>" class="btn btn-info btn-sm">Update</a>
                            <a href="<?= site_url('product/delete/' . $row->product_id) ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Load jQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

    <!-- Load JS Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>