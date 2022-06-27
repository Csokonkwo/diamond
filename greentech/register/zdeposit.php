<?php require_once 'server/users.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Funds</title>
    
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    
    <div class="form-section">
        <form action="zdeposit.php" method="POST" class="form-container">
            <h3 class="center">Deposit Funds</h3>

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <p class="">Send deposit amount to bitcoin address 36636366626636 <br> Copy and upload transaction hash below.</p>

            <div>
                <label for="amount">$ Amount</label>
                <input type="text" name="amount" class="text-input" value="<?Php echo $amount; ?>">
            </div>

            <div>
                <label for="transAdd">Transaction Hash</label>
                <input type="text" name="transAdd" class="text-input" value="<?Php echo $transAdd; ?>">
            </div>

            <div>
                <button type="submit" name="deposit_funds" class="btn"> Submit Request</button>
            </div>
            <p class="">?? <a href="index.php">go Home</a></p>

        </form>
           
    </div>
    
</body>
</html>