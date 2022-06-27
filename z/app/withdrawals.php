<?php

include("../path.php");
require("server.php");
$pageName = "Withdrawals";
$withdraws = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'withdrawal']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
</head>

<body>
    <?php include("header.php") ?>
        
        <div class="deposit">
            <div class="container">
                <div class="left">
                    <h3>Make a withdrawal ($)</h3>
                    <form method="POST">
                        <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>

                        <select name="payment_method">
                            <option value="">Select payment method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="etherium">Etherium</option>
                        </select>
                        
                        <input type="text" placeholder="Enter amount" name="amount" value="<?php echo $amount ?>">
                        
                        <input type="text" placeholder="Enter wallet address" name="reference" value="<?php echo $reference ?>">
                        
                        <button name="withdraw" type="submit">Submit</button>
                    
                    </form>
                </div>
                
                <div class="right">
                    <h3>Currency converter</h3>
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
            
            </div>
        
        </div>
        
        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> Withdrawal History</div>
            <div class="container">
                
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
                    <?php foreach ($withdraws as $key => $withdraw): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $withdraw['id'] ?></td>
                            <td><?php echo $withdraw['amount'] ?></td>
                            <td><?php echo $withdraw['type'] ?></td>
                            <td><?php echo $withdraw['status'] ?></td>
                            <td><?php echo date('F j, Y.', strtotime($withdraw['created_at'])); ?></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>


                </table>
                
            </div>
        </div>
        
        <?php include("footer.php") ?>
    
</body>
</html>