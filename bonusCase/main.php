<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/uikit/css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">

    <script src="vendor/uikit/js/uikit.min.js"></script>
    <script src="vendor/uikit/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/combine/npm/sweetalert2@11.1.5,npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['bc_flash_success']) && $_SESSION['bc_flash_success'] != '')
    {
    ?>
        <script type="text/javascript">
        Swal.fire({
        icon: 'success',
        title: "<?php echo $_SESSION['bc_flash_success']; ?>",
        showConfirmButton: false,
        timer: 1500
        })
        </script>
    <?php
    $_SESSION['bc_flash_success'] = '';
    }
    if(isset($_SESSION['bc_flash_error']) && $_SESSION['bc_flash_error'] != '')
    {
    ?>
    <script type="text/javascript">
        Swal.fire({
        icon: 'error',
        title: "<?php echo $_SESSION['bc_flash_error']; ?>",
        showConfirmButton: false,
        timer: 1500
        })
        </script>
    <?php
    $_SESSION['bc_flash_error'] = '';
    }
    ?>
    <div class="uk-width-1-1 uk-padding-remove uk-margin-remove" id="login">
        <div class="uk-width-1-1 uk-padding-remove uk-margin-small-bottom">
            <ul class="uk-breadcrumb">
                <li><a href="#">Referensi</a></li>
                <li><span>Instansi</span></li>
            </ul>
        </div>
        <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
        
        </div>
    </div>
</body>
</html>