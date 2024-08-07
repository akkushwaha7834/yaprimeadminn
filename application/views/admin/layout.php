<!DOCTYPE html>
<html lang="en">

<head>
    <title>YaPrime </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="https://www.yaprime.com/public/web/images/favicon.png">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> 
    <link rel="stylesheet" href="<?= base_url() ?>public/src/assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/src/assets/css/styles.min.css">
<style>
    .dataTables_wrapper {
    position: relative;
    clear: both;
    overflow: scroll;
}
    </style>
</head>

<body class="">

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>




    <?php include('include/navbar.php'); ?>

    <?php include('include/sidebar.php'); ?>

    <?php $this->load->view($view); ?>
    <script src="<?= base_url() ?>public/assets/js/vendor-all.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?= base_url() ?>public/assets/js/plugins/apexcharts.min.js"></script>


    <!-- custom-chart js -->
    <script src="<?= base_url() ?>public/assets/js/pages/dashboard-main.js"></script>
</body>

</html>