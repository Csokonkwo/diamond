<?php 

include('../path.php');

include('server.php');
include('../register/mailer.php');



if($_SESSION['admin'] < 4){
    header('location: ../app/index.php');
    exit();
}



if(isset($_POST['send_email'])){

    unset($_POST['send_email']);

    foreach($_POST as $key => $value) {
        $value = trim($value);
        if(empty($value)){
            $errors[$key] = $key . " Cannot be empty" ;
        }
    }
    
    if(count($errors)==0){

        if($_POST['email'] == "verified"){
            $users = selectAll('users', ['verified'=> 1]);
        }else if($_POST['email'] == "unverified"){
            $users = selectAll('users', ['verified'=> 0]);
        }else if($_POST['email'] == "all"){
            $users = selectAll('users');
        }else{
            $users = selectOne('users', ['email' => $_POST['email']]);
            
            emailUsers($users['email'], $users['username'], $_POST['message'], $_POST['subject']);
            
            $_SESSION['message'] = "Mailer Successful";
            $_SESSION['alert-class'] = "alert-success";
            header('location: email.php');
            exit();

        }

        foreach($users as $user){
            $addmo = emailUsers($user['email'], $user['username'], $_POST['message'], $_POST['subject']);
        }

        $_SESSION['message'] = "Mailer Successful";
        $_SESSION['alert-class'] = "alert-success";
        header('location: email.php');
        exit();
        
    }

}

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include(ROOT_PATH . "/admin/includes/head.php"); ?>
    
</head>
<body>
    
<?php include(ROOT_PATH . "/admin/includes/header.php"); ?>

        <div class="form">
            <div class="container">
                <div class="left">
                <i class="fa fa-envelope"></i> Mailer <i class="fas fa-angle-double-right"></i> <a id ="multiple_mailer_btn">Multiple</a> <a id ="single_mailer_btn">Single</a>
                    <form action="" method="post" id ="multiple_mailer">
                        <?Php if(count($errors) > 0): ?>
                        <div class="alert error">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        
                        <?php endif ?>

                            <label>Subject</label>
                            <input type="text" name="subject" class="text-input" placeholder="Enter Email Subject">

                            <label>Select Group</label>
                            <select name="email" class="text-input">
                                <option value="all">All</option>
                                <option value="verified">Verified</option>
                                <option value="unverified">Unverified</option>
                            </select>
                            
                            <label>Message</label>
                            <textarea name="message" class="bodyy" cols="30" rows="10" class="text-input"></textarea>
                        
                            <button type="submit" name="send_email" class="btn btn-big">Submit</button>
                        
                    </form>

                    <form action="" method="post" id ="single_mailer">
                        <?Php if(count($errors) > 0): ?>
                        <div class="alert error">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        
                        <?php endif ?>
                            <label>Subject</label>
                            <input type="text" name="subject" class="text-input" placeholder="Enter Email Subject">

                            <label>User Email</label>
                            <input type="text" name="email" class="text-input" placeholder="Enter Receiver mail">

                            <label>Message</label>
                            <textarea name="message" id="body" cols="30" rows="10" class="text-input"></textarea>
                        
                            <button type="submit" name="send_email" class="btn btn-big">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
        
        <script>
            
            var multiple_mailer = document.querySelector('#multiple_mailer');
            var single_mailer = document.querySelector('#single_mailer');

            var multiple_mailer_btn = document.querySelector('#multiple_mailer_btn');
            var single_mailer_btn = document.querySelector('#single_mailer_btn');

            single_mailer.style.display = "none";

            single_mailer_btn.addEventListener("click", show_single);
            multiple_mailer_btn.addEventListener("click", show_multiple);


            function show_single() {
                multiple_mailer.style.display = "none";
                single_mailer.style.display = "block";
            }

            function show_multiple() {
                multiple_mailer.style.display = "block";
                single_mailer.style.display = "none";
            }

        </script>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="<?php echo BASE_URL . '/admin/js/script.js' ?>"></script>
    
    </main>
    
    
    <?php include(ROOT_PATH . "/admin/includes/footer.php"); ?>
    
</body>
</html>