<?php

include("includes/dbFunctions.php");
$post_id = $_POST['post_id'];
$commentNewCount = $_POST['commentNewCount'];

$sql = "SELECT * FROM comments Where published = 1 AND post_id = $post_id ORDER BY id DESC Limit $commentNewCount";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
//return $records;
if($records > 0):
    foreach ($records as $comment): ?>
<div class="comment-box">
                    <p><?php echo $comment['username']?> &nbsp; <span><?php echo date('F j, Y.', strtotime($comment['created_at'])); ?></span></p>
                    <p><?php echo $comment['comment']?> </p>
                </div>

<?php endforeach; ?>
<?php endif; ?>