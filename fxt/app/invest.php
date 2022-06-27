<?php 
$pageName = 'Investments';
include("../path.php");
require ('server.php');
$investments = selectAll('transactions', ['user_idd' => $_SESSION['id'], 'type' => 'Investment']);

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
                <p id="expecteda"></p>
                <form onsubmit="return calcInvest()" action="" method="post">
                    <input class="text-input" type="text" name="amount" id="invest-amount" placeholder="Enter Amount ($)">
                    <select name="currency" class="text-input" id="invest-plan" oninput="return calcInv()">
                        <option value="" >Select plan</option>
                        <option value="basic">Starter</option>
                        <option value="regular">Regular</option>
                        <option value="standard">Standard</option>
                        <option value="premier">Premier</option>
                        <option value="premium">Premium</option>
                        <option value="ultimate">Deluxe</option>
                    </select>
                    
                    <button name="invest">Submit</button>
                </form>
            </div>
            
            <div id="where" class=" where profile">
                <a>How to Invest?</a>
                <p>
                    Enter the amount you need to invest above and submit, Please be sure to have sufficient balance for the investment plan you have in mind.
                </p>
            </div>
            
            
            
            <div class="stats">
            <h3>All <span>Investments</span></h3>
            
            <div class="container profile">
                <div class="box">
                    <table>
                        <thead>
                            <th>S/N</th>
                            <th>T_ID</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>plan</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Timerequired</th>
                            <th>Timeleft</th>
                        </thead>
                        <tbody>
                            <?php foreach ($investments as $key => $investment): ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $investment['id'] ?></td>
                                <td><?php echo $investment['amount'] ?></td>
                                <td><?php echo $investment['type'] ?></td>
                                <td><?php echo $investment['currency'] ?></td>
                                <td><?php echo $investment['status'] ?></td>
                                <td><?php echo date('F j, Y.', strtotime($investment['created_at'])); ?></td>
                                
                                <?php
                                $hourz = 0;

                                    if($investment['currency'] == 'starter'){
                                        $hourz = 86400;
                                    }

                                    if($investment['currency'] == 'regular'){
                                        $hourz = 86400;
                                    }

                                    if($investment['currency'] == 'standard'){
                                        $hourz = 172800;
                                    }

                                    if($investment['currency'] == 'premier'){
                                        $hourz = 172800;
                                    }

                                    if($investment['currency'] == 'premium'){
                                        $hourz = 259200;
                                    }

                                    if($investment['currency'] == 'deluxe'){
                                        $hourz = 259200;
                                    }

                                    $ndate = strtotime($investment['created_at']) + $hourz; 
                                    $timeRemaining = $ndate - time() ;
                                    $tremaining = $timeRemaining/3600; 
                                    $timeLeft = round($tremaining);
                                    $ss ='';
                                    if($timeLeft >= 2){
                                        $ss ='s';
                                    }
                                
                                ?>
                                <td><?php echo $hourz/3600 .'hours'?></td>
                                <?php if($timeLeft <= 0):?>
                                <td><?php echo '0hour' ; ?></td>
                                <?php else:?>
                                <td><?php echo $timeLeft . 'hour'. $ss ; ?></td>
                                <?php endif; ?>
                                
                            </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        </main>
    </div>
    
    <script src="../js/calculator.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>