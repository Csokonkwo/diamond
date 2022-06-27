<?php 

include("../path.php"); 
require("server.php");

$deposits = selectStaz('shares',10, ['user_id' => $_SESSION['id'], 'type' => 'buy']);
$pageName = "Buy Shares"

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>

</head>

<body>
    <?php include("header.php"); 

    $shares_info = selectOne('shares_info', ['id' => 1]);
    
    ?>
        
        <div class="deposit">
            <div class="container">
                <div class="left">
                    <h3>Buy Share ($) </h3>
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
                            <option value="bankaccount">Bank Account</option>
                            <option value="tescocapital">Tesco Capital Balance</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="other">Other Methods</option>
                        </select>
                        
                        <p id="wallet-address"> </p>
                       
                        <input type="text" placeholder="($) Enter amount only" name="amount" id="invest-amount" value="<?php echo $amount ?>">
                        
                        <input type="file" id="refer"  placeholder="Select " name="reference">
                        
                        <button name="buy_share" type="submit">Submit</button>
                    
                    </form>
                </div>
               
            </div>
        
        </div>
        
        <script>
            var bankName = '<?php echo $shares_info['bankName'] ?>'
            var bankAccountName = '<?php echo $shares_info['bankAccountName'] ?>'
            var bankAccount = '<?php echo $shares_info['bankAccount'] ?>'

        </script>
        
        <?php include("footer.php") ?>

    
</body>
    
</html>