<?php 

include("../path.php"); 
require("server.php");

$transactionz = selectAll('transactionz', ['user_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - History</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    
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
        
        <div class="table">
            <h3>Your Transaction History</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>

                </thead>

                <tbody>

                <?php foreach ($transactionz as $key => $transaction):

                    if($transaction['type'] == 'deposit'){
                        $color='green'; 
                    }
                    if($transaction['type'] == 'cashout'){
                        $color='red'; 
                    }
                    if($transaction['type'] == 'investment'){
                        $color='blue'; 
                    }
                    if($transaction['type'] == 'interest'){
                        $color='green'; 
                    }
                
                ?>
                    <tr>
                    <td style="color:<?php echo $color?>"><?php echo $key + 1 ?></td>
                    <td style="color:<?php echo $color?>"><?php echo $transaction['id'] ?></td>
                    <td style="color:<?php echo $color?>"><?php echo '$'. $transaction['amount'] ?></td>
                    <td style="color:<?php echo $color?>"><?php echo $transaction['type'] ?></td>
                    <td style="color:<?php echo $color?>"><?php echo $transaction['status'] ?></td>
                    <td style="color:<?php echo $color?>"><?php echo date('F j, Y.', strtotime($transaction['created_at'])); ?></td>
                
                    </tr>

                <?php endforeach; ?>
                </tbody>


            </table>
        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>