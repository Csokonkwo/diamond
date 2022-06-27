<?php 

include('../path.php');


include('../register/mailer.php');
include('server.php');





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../app/css/style.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>

        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
        <?php endif ?>

        <div class="form">
            <form action="realp.php" method="post">
                <h3>Paid</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                
                <input name="wallet_add" placeholder="Transaction  Hash">
                <input type="hidden" name="status" value="<?php echo $_GET['status'] ?>">
                <input type="hidden" name="t_id" value="<?php echo $_GET['t_id'] ?>">
                <input type="hidden" name="u_id" value="<?php echo $_GET['u_id'] ?>">
                <input type="hidden" name="a_id" value="<?php echo $_GET['a_id'] ?>">
                
                <button type="submit" name="realp">Submit</button>
            
            </form>
        
        </div>
        
        
    </main>
    
    
    <?php include("../app/footer.php"); ?>
    
</body>
</html>