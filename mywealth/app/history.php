<?php 

include("../path.php"); 
require("server.php");
$pageName = "History";
$transactionz = selectAll('transactionz', ['user_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

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
                    if($transaction['type'] == ('withdrawal'  || 'charges')){
                        $color='red'; 
                    }
                    if($transaction['type'] == 'investment'){
                        $color='blue'; 
                    }

                    if($transaction['type'] == 'interest'){
                        $color='green'; 
                    }

                    if($transaction['status'] == 'sent'){
                        $color='red'; 
                    }

                    if($transaction['status'] == 'received'){
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