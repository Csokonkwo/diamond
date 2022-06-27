<?php

include("../path.php");
require("server.php");
$pageName = "Investments";
$investments = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'investment']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php include("head.php") ?>
</head>

<body>
    <script> 

    var balance = <?php echo floor($balance); ?> 

    </script>
    <?php include("header.php") ?>
        <div class="deposit">
            <div class="container">
                <div class="left">
                    <h3>Make a Investment ($) </h3>
                    <form onsubmit="return calcInvest()" action="investments.php"  method="POST">

                        <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>
                       
                        <div class="max-wrap">
                            <input class="max-input" type="text" placeholder="Enter amount, $<?php echo $balance ?> available" name="amount" id="invest-amount" value="<?php echo $amount ?>">
                            <span onclick="inputMax()" class="max-btn">Max</span>
                        </div>
                        
                        <select name="reference" id="invest-plan" oninput="return calcInv()">
                            <?php if(!isset($_SESSION['business'])): ?>
                                <option value="Regular">Regular</option>
                                <option value="Premium">Premium</option>
                                <option value="Vip">Vip</option>
                            <?php else: ?>
                                <option value="Standard">Standard</option>
                                <option value="Ultimate">Ultimate</option>
                            <?php endif; ?>
                        </select>

                        <p id="expecteda"> </p> <br>
                        
                        <button name="invest" type="submit">Submit</button>
                    
                    </form>
                </div>
            
            </div>
        
        </div>
        
        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> Investment History</div>
            <div class="container">
                
                <table>
                    <thead>
                        <th>S/n</th>
                        <th>T_id</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>

                    <tbody>
                    <?php foreach ($investments as $key => $investment): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $investment['id'] ?></td>
                            <td><?php echo number_format($investment['amount']) ?></td>
                            <td><?php echo $investment['status'] ?></td>

                            <td><?php echo date('F j, Y.', strtotime($investment['created_at'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
                
            </div>
        </div>
        
        <?php include("footer.php") ?>

        <script src="<?php echo BASE_URL .'/js/calculator.js'?>"></script>
    
</body>
</html>