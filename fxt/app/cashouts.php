<?php 
$pageName = 'Cashouts';
include("../path.php");
require ('server.php');
$cashouts = selectAll('transactions', ['user_idd' => $_SESSION['id'], 'type' => 'Cashout']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName ?>/<?php echo $pageName ?></title>
    
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
                <form action="cashouts.php" method="post">
                    <input class="text-input" type="text" name="amount" placeholder="Enter Amount ($)">
                    <input class="text-input" type="text" name="transAdd" placeholder="Enter Bitcoin Address">
                    <select name="currency" id="" class="text-input">
                        <option value="bitcoin">Bitcoin</option>
                        <option value="etherium">Etherium</option>
                    </select>
                    <button name="cashout">Submit</button>
                </form>
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
            <h3>Your <span>Cashouts</span></h3>
            
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
            </div>
        </div>
        
        </main>
    </div>
    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>