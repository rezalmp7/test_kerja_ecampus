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
    <div class="col-12 uk-width-1-1 uk-padding-remove uk-margin-remove" id="login">
        <div class="uk-inline uk-width-1-1 uk-padding-remove uk-margin-remove">

            <img src="img/bg_login.jpg" class="uk-width-1-1 uk-padding-remove uk-margin-remove" alt="">

            <div class="uk-position-center uk-overlay uk-overlay-default">
                <form class="uk-form-stacked" method="POST" action="fungsi/login.php">

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Username</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" id="form-stacked-text" name="username" type="text" placeholder="Username...">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" id="form-stacked-text" name="password" type="password" placeholder="Password...">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <input type="submit" class="uk-button uk-button-primary" value="Login">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>