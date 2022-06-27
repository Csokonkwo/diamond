<?php 

include("../path.php"); 
require("server.php");

if($_SESSION['admin'] < 3){
    header('location: ../app/index.php');
    exit();
}

$transfers = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'transfer']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Transfers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>
        
        <div class="form admin">
            <form action="transfer.php" method="post" enctype="multipart/form-data">
                <h3>Transfer</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                <input id="amount" name="amount" placeholder="($) amount" value="<?php echo $amount ?>">
                <input id="receiver_id" name="receiver_id" placeholder="Enter reciever's ID" value="<?php echo $id ?>" oninput="checkLength(this)">
                <p style="font-size:.9em;" id="receiverResponse"> </p>
                <button type="submit" name="transfer">Submit</button>

                
            
            </form>
        
        </div>
        
        
        <div class="table">
            <h3>Your Transfers</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
                    <th>Reference</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Reciever</th>
                </thead>

                <tbody>
                <?php foreach ($transfers as $key => $transfer): 
                    if($transfer['status'] == 'sent'){
                        $color='red'; 
                    }

                    if($transfer['status'] == 'received'){
                        $color='green'; 
                    }
                    
                    ?>

                    <tr>
                        <td style="color:<?php echo $color?>"><?php echo $key + 1 ?></td>
                        <td style="color:<?php echo $color?>"><?php echo $transfer['id'] ?></td>
                        <td style="color:<?php echo $color?>"><?php echo $transfer['amount'] ?></td>
                        <td style="color:<?php echo $color?>"><?php echo $transfer['reference'] ?></td>
                        <td style="color:<?php echo $color?>"><?php echo $transfer['status'] ?></td>
                        <td style="color:<?php echo $color?>"><?php echo $transfer['payment_method'] ?></td>
                        <td style="color:<?php echo $color?>"><?php echo date('F j, Y.', strtotime($transfer['created_at'])); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>


            </table>
        </div>
    </main>
    
    <?php include("footer.php"); ?>
    
    <script src="js/ajax.js"></script>
    
</body>
</html>