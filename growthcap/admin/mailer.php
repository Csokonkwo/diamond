<?php 

include('../path.php');
include('server.php');
include('../register/mailer.php');

if(isset($_POST['send_email'])){

    if (empty($_POST['subject'])){
        array_push($errors, 'Subject is required');
    }

    if (empty($_POST['email'])){
        array_push($errors, 'Email is required');
    }

    if (empty($_POST['message'])){
        array_push($errors, 'message is required');
    }
    
    if(count($errors)==0){ 

        $addmo = emailUser($_POST['email'], $_POST['message'], $_POST['subject']);

        $_SESSION['message'] = "Email Sent Successfully";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();
          
       
    }

}

 
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
    <link rel="stylesheet" href="../app/css/main.css">

    
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
            <h3>Mailer  </h3>
            <form action="" method="post">
                <?Php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?>.</li>
                    <?php endforeach ?>
                </div>
                
                <?php endif ?>

                    <input type="text" name="email" class="text-input" placeholder="Email Address">
                    <input type="text" name="subject" class="text-input" placeholder="Subject">
                    
                    <textarea name="message" id="" cols="30" rows="10" class="text-input"></textarea>
                
                    <button type="submit" name="send_email" class="btn btn-big">Submit</button>
                
            </form>
        </div>
        
    
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>