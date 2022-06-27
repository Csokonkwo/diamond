<?php 

include(ROOT_PATH . "/includes/dbFunctions.php");

$topics = selectAll('topics');

//This section displays all topics on main page

$posts = array();
$postsTitle = 'Latest posts';

if(isset($_GET['t_id'])){
    $posts = getPostsByTopic($_GET['t_id']);
    $postsTitle = "Posts on ". $_GET['name']; 
}
else if(isset($_POST['search_term'])){
    $postsTitle = "Results for: ". $_POST['search_term']; 
    $posts = searchPosts($_POST['search_term']);
    $_GET['search_term'] = 1;
} 
else{
    $posts = getPublishedPosts();

}

$tops = selectSpecial('top', 1);
$bottoms = selectSpecial('bottom', 3);