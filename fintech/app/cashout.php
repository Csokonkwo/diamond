<?php
$pageName = 'Cashouts';
include('../path.php');
include('server.php');

$cashouts = selectAll('transactions', ['user_idd' => $_SESSION['id'], 'type' => 'Cashout']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashouts</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>

        <div class="form-inner">
            <h3>Cashout</h3>

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <form action="cashout.php" method="post">
                <input type="text" name="amount" placeholder="Enter Amount ($)" class="text-input" value="<?Php echo $amount; ?>">
                <input type="text" name="transAdd" placeholder="Enter Bitcoin Address" class="text-input" value="<?Php echo $transAdd; ?>">
                <button name="cashout" class="btn">Submit</button>
            </form>
        
        </div>
        
        <div class="transaction scroll">
            <h2>Your Cashouts</h2>
            <table>
                <thead>
                    <th>S/N</th>
                    <th>Trans ID</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                </thead>
                <tbody>
                <?php foreach ($cashouts as $key => $cashout): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $cashout['id'] ?></td>
                        <td><?php echo $cashout['amount'] ?></td>
                        <td><?php echo $cashout['type'] ?></td>
                        <td><?php echo $cashout['status'] ?></td>
                        <td><?php echo $cashout['date'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
        
    </main>
    <?php include('footer.php'); ?>
    
</body>
</html>