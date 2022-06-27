<?php 

include("../path.php"); 
require("server.php");

$deposits = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'deposit']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Deposits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>
        
        <div class="form">
            <form action="deposit.php" method="post" enctype="multipart/form-data">
                <h3>Deposit</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                <input name="amount" placeholder="($) amount" value="<?php echo $amount ?>">
                <select name="payment_method" id="payment-method" oninput="showWallet()">
                <option value="">Select payment method</option>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="bitcoin_cash">Bitcoin Cash</option>
                    <option value="etherium">Etherium</option>
                </select>
                <input type="file" name="reference" placeholder="Transaction Hash">
                
                <button type="submit" name="deposit">Submit</button>

                <p id="wallet-address"> </p>
            
            </form>
        
        </div>
        
        <div id="where">
            
            <a href="#">How to Deposit? </a>
            <p>First Send amount to either of the wallet addresses below then Deposit alongside transaction Hash to the website form confirmation</p>
            
            <p>
                Bitcoin : <br> 1MuFZhNS7B8SLFKxaoUu5KP4P3eHFkitVA
                
                <br> <br>
                
                Etherium: <br> 0x4f7c69417b0dd1f6faa49d269ef4b39743d13c52
                
                <br> <br>
                
                Bitcoin Cash: <br> qrj5gnvfyz6ypt85zf7kp2e6w676qa85ps3yyj2u8f
            
            </p>
            
        </div>

        <div class="profile">
            <h3> Check Current Exchange rates</h3>
            <iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" 
                    width="100%" 
                    height="310px" 
                    scrolling="auto" 
                    marginwidth="0" 
                    marginheight="0" 
                    frameborder="0" 
                    border="0" 
                    style="border:0;
                        margin:0;
                        padding:0;
                        ">
            </iframe>
        </div>
        
        
        <div class="table">
            <h3>Your Deposits</h3>
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
                <?php foreach ($deposits as $key => $deposit): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $deposit['id'] ?></td>
                        <td><?php echo $deposit['amount'] ?></td>
                        <td><?php echo $deposit['type'] ?></td>
                        <td><?php echo $deposit['status'] ?></td>
                        <td><?php echo date('F j, Y.', strtotime($deposit['created_at'])); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>


            </table>
        </div>
    </main>
    
    <?php include("footer.php"); ?>
    <script src="<?php echo BASE_URL .'/js/calculator.js'?>"></script>
    
</body>
</html>