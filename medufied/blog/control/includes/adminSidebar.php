
<div class="left-sidebar">
    <ul>
    <?php if($_SESSION['admin'] == 2){ ?>
        <li><a href="<?php echo BASE_URL . '/blog/admin/users/index.php' ?>">Manage Users</a></li>
        <li><a href="<?php echo BASE_URL . '/blog/admin/topics/index.php' ?>">Manage Topics</a></li>
        <?php } ?>
        <li><a href="<?php echo BASE_URL . '/blog/admin/posts/index.php' ?>">Manage Posts</a></li>
   
    </ul>
</div>