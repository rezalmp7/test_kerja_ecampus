<?php
    session_start();
    $thisPage = 'main';
    
    include 'config/koneksi.php';
?>
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
        <h2>Tambah Instansi</h2>
        <div class="uk-width-1-1 uk-padding-small uk-margin-remove">
            <form class="uk-form-stacked" action="fungsi/tambah.php" method="POST">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Instansi</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" name="instansi" placeholder="Instansi..." required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Deskripsi</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" rows="5" placeholder="Textarea" name="deskripsi" required></textarea>
                    </div>
                </div>

                <div class="uk-margin">
                    <input type="submit" class='uk-button uk-button-primary' value="Tambah">
                </div>

            </form>
        </div>
    </div>
</body>
</html>