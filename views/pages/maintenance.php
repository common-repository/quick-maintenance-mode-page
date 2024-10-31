<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <?php wp_head(); ?>
    <title>Maintenance Mode</title>
</head>
<body>
<style>
    .maintenance-page-simple {
        width: 100vw;
        height: 100vh;
        position: relative;
    }

    .maintenance-page-simple__image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .maintenance-page-simple__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .maintenance-page-simple__image:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #353290;
        opacity: 0.9;
    }

    .maintenance-page-simple__content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        color: white;
    }
    .maintenance-page-simple__content > div {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 16px;
    }
</style>
<div class="maintenance-page maintenance-page-simple">
    <div class="maintenance-page-simple__image">
        <img src="<?= MaintenancePage::pluginUrl('/assets/img/yard.jpg') ?>" alt="">
    </div>
    <div class="maintenance-page-simple__content">
        <div>Temporarily Down for Maintenance</div>
        <div>We are performing scheduled maintenance. We should be back online shortly.</div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>