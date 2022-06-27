<?php 

include("../path.php"); 
require("server.php");

$investments = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'investment']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Invest</title>
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
            <form onsubmit="return calcInvest()" action="invest.php" method="post">
                <h3>Invest</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                <input name="amount" placeholder="($) amount" id="invest-amount">
                <select name="reference" id="invest-plan" oninput="return calcInv()">
                    <option value="Beginner">Beginner</option>
                    <option value="Standard">Standard</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Business">Business</option>
                    <option value="Bronze">Bronze</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Platinum">Platinum</option>

                </select>
                <p id="expecteda"></p>
                <button type="submit" name="invest">Submit</button>
            
            </form>
        
        </div>
        
        <div id="where">
            
            <a href="#">How to Invest? </a>
            <p>Enter the amount your wish to invest and choose the corresponding Package. Please note: You can't invest if you have an insufficient balance.</p>
          
        </div>
        
        <div class="table">
            <h3>Your Investments</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Package</th>
                    <th>Num_of_Pay</th>
                    <th>Date</th>

                </thead>

                <tbody>
                <?php foreach ($investments as $key => $investment): ?>
                    <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $investment['id'] ?></td>
                    <td><?php echo $investment['amount'] ?></td>
                    <td><?php echo $investment['type'] ?></td>
                    <td><?php echo $investment['status'] ?></td>
                    <td><?php echo $investment['reference'] ?></td>
                    <?php if($investment['status'] == '--'): ?>
                    <td><?php echo ('--') ?></td>
                    <?php else: ?>
                    <td><?php echo $investment['payment_method'] ?></td>
                    <?php endif; ?>
                    <td><?php echo date('F j, Y.', strtotime($investment['created_at'])); ?></td>
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