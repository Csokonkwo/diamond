<?php 

include("../path.php"); 
require("server.php");
$pageName = "Withdrawals";
$withdraws = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'withdrawal']);

?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body>
    
    <?php include("header.php"); ?>
    
    <main>
        
        <div class="form">
            <form action="withdraw.php" method="post">
                <h3>Your Withdrawals</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                <input name="amount" placeholder="($) amount">
                <select name="payment_method" id="payment_method" oninput = "bringOut()">
                    <option value="">Select Payment Method</option>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="bank">Bank Payment</option>
                </select>

                <input name="reference" placeholder="Wallet Address" id="wallet_address" style = "display:none">
                <input name="other_ref" placeholder="Bank Name" id="bank" style = "display:none">
                <input name="other_date" placeholder="Account Number" id="banka" style = "display:none">
                
                <button type="submit" name="withdraw">Submit</button>
            
            </form>
        
        </div>

        <script>
            var payment_method = document.querySelector("#payment_method");
            var bank = document.querySelector("#bank");
            var banka = document.querySelector("#banka");
            var wallet = document.querySelector("#wallet_address");

            function bringOut(){
                if(payment_method.value == 'bank'){
                    bank.style ='display: block';
                    banka.style ='display: block';
                    wallet.style ='display: none';
                }
                if(payment_method.value == 'bitcoin'){
                    wallet.style ='display: block';
                    bank.style ='display: none';
                    banka.style ='display: none';
                }
                if(payment_method.value == ''){
                    bank.style ='display: none';
                    wallet.style ='display: none';
                    banka.style ='display: none';
                }

                
            }

        </script>

        <div class="table">
            <h3>Your withdrawals</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                </thead>

                <tbody>
                <?php foreach ($withdraws as $key => $withdraw): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $withdraw['id'] ?></td>
                        <td><?php echo $withdraw['amount'] ?></td>
                        <td><?php echo $withdraw['status'] ?></td>
                        <td><?php echo date('F j, Y.', strtotime($withdraw['created_at'])); ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>


            </table>
        </div>
    </main>
    
    <?php include("footer.php"); ?>
    
</body>
</html>