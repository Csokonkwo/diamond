<?php 
$pageName = 'Deposits';
require ('server.php');
$deposits = selectAll('transactions', ['user_idd' => $_SESSION['id'], 'type' => 'Deposit']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
</head>
    
<body>
    
    <div class="wrapper">
    
    <?php include("header.php") ?> 
        
        
            
            <div class="form-container">
                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <form action="deposits.php" method="post">
                    <input class="text-input" type="text" name="amount" placeholder="Enter Amount ($)">
                    <input class="text-input" type="text" name="transAdd" placeholder="Enter Transaction Hash">
                    <select name="currency" id="" class="text-input">
                        <option value="bitcoin">Bitcoin</option>
                        <option value="etherium">Etherium</option>
                    </select>
                    <button name="deposit">Submit</button>
                </form>
            </div>
            
            <div id="where" class=" where profile">
                <a>Where to deposit?</a>
                <p>Send Deposit Amount to 
                    <span>Bitcoin Wallet: 1M8z6q5Fvd9dq2YtzCTUbeaj36LJR4guGR </span>
                    <img src="img/bitcoin.jpg">

                    <br>Or <br><br>
                    
                    <span>Etherium Wallet: 0x5fA0808104e4b18E9d79b7A94ab2be34c46e79Cc </span>
                    <img src="img/etherium.jpg">
                
                </p>
            </div>
            <br>
            <div class="profile">
                <h3> Check Current Exchange rates</h3><br>
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
            <br>
            <div class="stats">
            <h3>Your <span>Deposits</span></h3>
            
            <div class="container profile">
                <div class="box">
                    <table>
                        <thead>
                            <th>S/N</th>
                            <th>T_ID</th>
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
            </div>
        </div>
        
        </main>
    </div>
    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>