<?php 

include("../path.php"); 
require("server.php");
$pageName = "Deposits";
$deposits = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'deposit']);

?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body>
    
    <?php include("header.php"); ?>
    
    <main>
        
        <div class="form admin">
            <form action="deposit.php" method="post" enctype="multipart/form-data">
                <h3>Deposit</h3>

                <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                
                <input name="amount" placeholder="($) amount" value="<?php echo $amount ?>">
                <select name="payment_method" id="payment-method" oninput="showWallet()">
                <option value="">Select payment method</option>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="etherium">Etherium</option>
                </select>
                <input type="file" max-size="1000" name="reference" placeholder="Transaction Hash" required>
                
                <button type="submit" name="deposit">Submit</button>

                <a style="color:blue; display:block" href="https://wa.me/+17313275020">Deposit via Vendor 1</a>

                <p id="wallet-address"> </p>
            
            </form>
        
        </div>
        
        <div id="where">
            
            <a href="#">How to Deposit? </a>
            <p>Send amount to our bitcoin address, then upload screenshot of the transaction for confirmation</p>
            
            <p>
                Bitcoin : <br> bc1qj5h69gd98p2vqmg86ysy4ltngg5uxqlnqe2ktr
                
                <br> <br>
                
                Etherium: <br> 0x6D4dD2C14d9E81ed1B56259d097DBaF7F2D496D4
            
            </p>
            
        </div>

        <div class="profile">
                <h3> Check Current Exchange rates</h3>
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
        
        <div class="table">
            <h3>Your Deposits</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>

                </thead>

                <tbody>
                <?php foreach ($deposits as $key => $deposit): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $deposit['id'] ?></td>
                        <td><?php echo $deposit['amount'] ?></td>
                        <td><?php echo $deposit['status'] ?></td>
                        <td><?php echo date('F j, Y.', strtotime($deposit['created_at'])); ?></td>
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