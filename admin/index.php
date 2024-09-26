<?php include("../admin/includes/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowdfund</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="aa/admin/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../admin/css/style.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="../admin/js/sweetalert.js"></script>
    <link rel="stylesheet" href="../admin/css/iziToast.min.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="../admin/js/iziToast.min.js"></script>
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            ?>
                <script>
                    iziToast.error({
                        title: 'Error: ',
                        message: '<?php echo safeInput($_GET['error']); ?>',
                        timeout: 1000,
                        position: 'topRight',
                        backgroundColor: 'red',
                        theme:'light',
                        color: 'white',
                        onClosed: function(){
                            location.href='index.php';
                        }
                    });
                </script>   
            <?php 
        }
    ?>

    <div class="admin__login__container">
        <div class="admin__login__form">
            <form action="../admin/includes/requests.php?type=admin-login" method="POST">
                <div class="grid__1">
                    <div>
                        <p class="input__title">Email Address</p>
                        <input type="email" name="email" class="input__control" placeholder="Enter your email" required>
                    </div>
                    <div>
                        <p class="input__title">Password</p>
                        <input type="password" name="password" class="input__control" placeholder="Enter your password" required>
                    </div>
                    <div class="button__group">
                        <button class="btn btn__primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>