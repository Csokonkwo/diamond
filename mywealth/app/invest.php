<?php 

include("../path.php"); 
require("server.php");
$pageName = "Investments";
$investments = selectAll('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'investment']);

?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

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
                    <option value="Basic">Basic</option>
                    <option value="Starter">Starter</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>

                </select>
                <p id="expecteda"></p>
                <button type="submit" name="invest">Submit</button>
            
            </form>
        
        </div>
        
        <div class="table">
            <h3>Your Investments</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
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
                    <td><?php echo $investment['status'] ?></td>
                    <td><?php echo $investment['reference'] ?></td>
                    <?php if($investment['payment_method'] <= 16): ?>
                    <td><?php echo $investment['payment_method'] ?></td>
                    <?php else: ?>
                    <td> Completed </td>
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