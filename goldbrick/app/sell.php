<?php 

include("../path.php"); 
require("server.php");

$deposits = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'deposit']);
$pageName = "Sell Shares"

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>

</head>

<body>
    <?php include("header.php"); ?>
        
        <div class="deposit">
            <div class="container">
                <div class="left">
                    <h3>Sell Share ($) </h3>
                    <form method="POST" enctype="multipart/form-data">

                        <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>

                        <select name="payment_method" id="payment-method" oninput="showWallet()">
                            <option value="">Select payment method</option>
                            <option value="goldbrick">GoldBrick Account</option>
                            <option value="other">Other Methods</option>
                        </select>
                        
                        <input type="text" placeholder="($) Enter amount only" name="amount" id="invest-amount" value="<?php echo $amount ?>">
                        
                        <button name="sell_share" type="submit">Submit</button>
                    
                    </form>
                </div>
               
            </div>
        
        </div>
        
        <?php include("footer.php") ?>

        <script>
            
        </script>
    
</body>
    
</html>