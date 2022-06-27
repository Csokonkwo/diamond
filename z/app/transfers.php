<?php 

include("../path.php"); 
require("server.php");
$pageName = "Transfers";

$transfers = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'transfer']);

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
                    <form action="transfers.php" method="post" enctype="multipart/form-data">
                        <h3>Transfer</h3>

                        <?Php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <?php foreach($errors as $error): ?>
                                <li><?php echo $error; ?>.</li>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
                        
                        <input id="amount" name="amount" placeholder="($) amount" value="<?php echo $amount ?>">
                        <input id="receiver_id" name="receiver_id" placeholder="Enter reciever's ID" value="<?php echo $id ?>" oninput="checkLength(this)">
                        <p style="font-size:.9em;" id="receiverResponse"> </p> <br>
                        <button type="submit" name="transfer">Submit</button>

                        
                    
                    </form>
                
                </div>
            </div>   
        </div>

        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> Transfer History</div>
                <div class="container">
                    <h3>Your Transfers</h3>
                    <table>
                        <thead>
                            <th>S/n</th>
                            <th>T_id</th>
                            <th>Amount</th>
                            <th>Reference</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Reciever</th>
                        </thead>

                        <tbody>
                        <?php foreach ($transfers as $key => $transfer): 
                            if($transfer['status'] == 'sent'){
                                $color='red'; 
                            }

                            if($transfer['status'] == 'received'){
                                $color='green'; 
                            }
                            
                            ?>

                            <tr>
                                <td style="color:<?php echo $color?>"><?php echo $key + 1 ?></td>
                                <td style="color:<?php echo $color?>"><?php echo $transfer['id'] ?></td>
                                <td style="color:<?php echo $color?>"><?php echo $transfer['amount'] ?></td>
                                <td style="color:<?php echo $color?>"><?php echo $transfer['reference'] ?></td>
                                <td style="color:<?php echo $color?>"><?php echo $transfer['status'] ?></td>
                                <td style="color:<?php echo $color?>"><?php echo $transfer['payment_method'] ?></td>
                                <td style="color:<?php echo $color?>"><?php echo date('F j, Y.', strtotime($transfer['created_at'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    
    <?php include("footer.php"); ?>
    
    <script src="js/ajax.js"></script>
    
</body>
</html>