<?php

include("../path.php");
require("server.php");
$pageName = "Earnings";
$transactions = selectAll('interests', ['user_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">

<?php require("head.php") ?>

<body>
    <?php include("header.php") ?>
        
        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> Earnings</div>
            <div class="container">
                
                <table>
                    <thead>
                        <th>S/n</th>
                        <th>Trans_id</th>
                        <th>amount</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>

                    <tbody>
                    <?php foreach ($transactions as $key => $transaction):?>
                    <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $transaction['id'] ?></td>
                    <td><?php echo '$'. $transaction['amount'] ?></td>
                    <td><?php echo $transaction['type'] ?></td>
                    <td><?php echo $transaction['status'] ?></td>
                    <td><?php echo date('F j, Y.', strtotime($transaction['created_at'])); ?></td>

                    </tr>

                    <?php endforeach; ?>
                    </tbody>

                </table>
                
            </div>
        </div>
        
        
        
        <?php include("footer.php") ?>
    
</body>
</html>