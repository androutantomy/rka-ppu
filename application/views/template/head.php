<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $this->uri->segment(1) != "" ? ucwords(str_replace('-', ' ', $this->uri->segment(1))) : 'Login' ?> | <?php echo $this->config->item('client_name') ?></title>
    <meta name="description" content="Sistem perencanaan anggaran Universitas 17 Agustus 1945 Samarinda">
    <meta name="keywords" content="Sistem perencanaan anggaran, Universitas 17 Agustus 1945 Samarinda">
    <meta name="author" content="Purcode">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.png">

    <!-- Library / Plugin Css Build -->
    <!-- <link rel="stylesheet" href="<?php // echo base_url() ?>assets/css/core/libs.min.css"> -->

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/qompac-ui.min.css?v=1.0.1">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.min.css?v=1.0.1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    <!-- Dark Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dark.min.css?v=1.0.1">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/customizer.min.css?v=1.0.1">

    <!-- RTL Css -->
    <!-- <link rel="stylesheet" href="<?php // echo base_url() ?>assets/css/rtl.min.css?v=1.0.1"> -->
    <!-- Choisejs css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/choiceJS/style/choices.min.css">
    <!-- css untuk select2 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
    <!-- js untuk select2  -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <!-- css untuk select2 -->
    <link href="<?php echo base_url() ?>assets/new_assets/select2.min.css" rel="stylesheet" />
    <!-- js untuk select2  -->
    <script src="<?php echo base_url() ?>assets/new_assets/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/new_assets/select2.min.js"></script>
    


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>