<?php
$pageName = 'Users';
include('../path.php');
include('server.php');

if(isset($_GET['verified'])){
    $verified = $_GET['verified'];
    $u_id = $_GET['u_id'];
    update('users', $u_id, [verified=> $verified]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Users</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
        <div class="transaction scroll">
            <h2>Users</h2>
            <?php $users = selectAll('users'); ?>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Referrer</th>
                        <th>Date</th>
                        <th colspan="3">Actions</th>
                        
                    </thead>
                    
                    <tbody>
                    <?php foreach ($users as $key => $user): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['phone'] ?></td>
                            <td><?php echo $user['referrer_id'] ?></td>
                            <td><?php echo $user['created_at'] ?></td>

                            <?php if($user['verified'] === 0): ?>
                            <td><a href="users.php?verified=1&u_id=<?php echo $user['id'] ?>" class="Verify">Verify</a></td>               
                            <?php else: ?>
                            <td><a href="users.php?verified=0&u_id=<?php echo $user['id'] ?>" class="Unverify">Unverify</a></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include(ROOT_PATH . '/app/footer.php'); ?>
    
</body>
</html>