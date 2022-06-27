<?php 

include("../path.php"); 
require("server.php");

$cashouts = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'cashout']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Cashouts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>
        
        <div class="form">
            <form action="cashout.php" method="post">
                <h3>Cashout</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                <input name="amount" placeholder="($) amount">
                <select name="payment_method">
                    <option value="bitcoin">Bitcoin</option>
                    <option value="bitcoin_cash">Bitcoin Cash</option>
                    <option value="etherium">Etherium</option>
                </select>
                <input name="reference" placeholder="Wallet Address">
                
                <button type="submit" name="cashout">Submit</button>
            
            </form>
        
        </div>
        
        <div id="where">
            
            <a href="#">How to Cashout? </a>
            <p>Enter the amount you wish to cashout above and click Submit, your cashout will be pending and will be deducted from your available balance until the transaction is confirmed by an admin. Please enter a valid wallet address.</p>
            
            
        </div>
        
        <div class="table">
            <h3>Your Cashouts</h3>
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
                <?php foreach ($cashouts as $key => $cashout): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $cashout['id'] ?></td>
                        <td><?php echo $cashout['amount'] ?></td>
                        <td><?php echo $cashout['type'] ?></td>
                        <td><?php echo $cashout['status'] ?></td>
                        <td><?php echo date('F j, Y.', strtotime($cashout['created_at'])); ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>


            </table>
        </div>
    </main>
    
    <?php include("footer.php"); ?>
    
</body>
</html>