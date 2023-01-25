<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title><?= $title ?></title>
</head>

<body>

    <!-- <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?= $content ?></h1>
                <p class="lead">This is my first blog.</p>
            </div>
        </div>
    </div> -->

    <div class="container">
        <h1><?= $content ?></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Load jQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

    <!-- Load JS Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>