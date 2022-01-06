<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <title>My Bio</title>
</head>

<body>

    <?php include 'template/header.php'; ?>

    <div class="container">
        <div class="row">

            <?php include 'template/sidebar-left.php'; ?>

            <!----------------- Content ---------------->
            <div class="col-6 border border-secondary rounded mt-3">

                <?php include 'content.php'; ?>

            </div>
            <!----------------- Akhir Content ---------------->

            <?php include 'template/sidebar-right.php'; ?>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>

</html>