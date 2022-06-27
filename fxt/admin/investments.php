<?php
$pageName = 'Investments';
include('../path.php');
include('server.php');

if($_SESSION['admin'] < 4){
    header('location: ../app/index.php');
    exit();
}

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactions', $t_id, ['status'=> $status]);
}

$investments = selectAll('transactions', ['type' => 'Investment']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Investments</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    <link rel="stylesheet" href="../app/css/form.css">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
        <div class="transaction scroll">
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>plan</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Timerequired</th>
                        <th>Timeleft</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($investments as $key => $investment): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $investment['user_idd']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $investment['id'] ?></td>
                            <td><?php echo $investment['amount'] ?></td>
                            <td><?php echo $investment['currency'] ?></td>
                            <td><?php echo $investment['type'] ?></td>
                            <td><?php echo $investment['status'] ?></td>
                            <td><?php echo $investment['created_at'] ?></td>

                            <?php
                                $hourz = 0;

                                    if($investment['currency'] == 'starter'){
                                        $hourz = 86400;
                                    }

                                    if($investment['currency'] == 'regular'){
                                        $hourz = 86400;
                                    }

                                    if($investment['currency'] == 'standard'){
                                        $hourz = 172800;
                                    }

                                    if($investment['currency'] == 'premier'){
                                        $hourz = 172800;
                                    }

                                    if($investment['currency'] == 'premium'){
                                        $hourz = 259200;
                                    }

                                    if($investment['currency'] == 'deluxe'){
                                        $hourz = 259200;
                                    }

                                    $ndate = strtotime($investment['created_at']) + $hourz; 
                                    $timeRemaining = $ndate - time() ;
                                    $tremaining = $timeRemaining/3600; 
                                    $timeLeft = round($tremaining);
                                    $ss ='';
                                    if($timeLeft >= 2){
                                        $ss ='s';
                                    }
                                
                                ?>
                            <td><?php echo $hourz/3600 .'hours'?></td>
                            <?php if($timeLeft <= 0):?>
                            <td><?php echo '0hour' ; ?></td>
                            <?php else:?>
                            <td><?php echo $timeLeft . 'hour'. $ss ; ?></td>
                            <?php endif; ?>


                            <?php if($investment['status'] != 'Completed'): ?>
                            <td><a href="investments.php?status=Confirmed&t_id=<?php echo $investment['id']?>" >Confirmed</a></td>
                            <td><a href="checkT.php?user=<?php echo $investment['user_idd']?>&t_id=<?php echo $investment['id']?>" >Check</a></td>
                            <?php endif; ?>
                            <td><a href="investments.php?status=Cancelled&t_id=<?php echo $investment['id']?>">Cancelled</a></td>                       
                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include("footer.php")?>
    
</body>
</html>