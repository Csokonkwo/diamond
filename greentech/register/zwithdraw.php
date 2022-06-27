<?php require_once 'server/users.php'; 

if($_SESSION['verified'] == 0){
    $_SESSION['message'] = "Please verify your Email";
    $_SESSION['alert-class'] = "alert-danger";

    header("location: index.php");
    exit();
}

$userProfile = selectOne('users', ['id'=> $_SESSION['id']]); 
if(!$userProfile['firstname']){
    header("location: processing/update_profile.php");
    exit();
}

$walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashout Funds</title>
    
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    
    <div class="form-section">
        <form action="zwithdraw.php" method="POST" class="form-container">
            <h3 class="center">Cashout Funds</h3>

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <?php if($walletBalance < 25):  ?>
                <p class="">No funds available for cashout.</p>
            <?php else: ?>

            <?php $packages = selectAll('transactions', ['user_idd' => $_SESSION['id'], 'type' => 'deposit', 'status' => 'approved']); ?>
            <div>
                <label for="amount">$ Amount</label>
                <select name="amount" id="" class="text-input">
                    <?php foreach($packages as $package):?>
                    <option value="male"> <?php echo $package['amount']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div>
                <label for="transAdd">Bitcoin Wallet address</label>
                <input type="text" name="transAdd" class="text-input" value="<?Php echo $transAdd; ?>">
            </div>

            <div>
                <button type="submit" name="withdraw_funds" class="btn"> Submit Request</button>
            </div>

                    <?php endif; ?>
            <p class="">?? <a href="index.php">go Home</a></p>

        </form>
           
    </div>
    
</body>
</html>