
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="assets/style.css" />
    <link type="text/css" rel="stylesheet" href="../../CMM07AL-1312897/partone/assets/unsemantic-grid-responsive-tablet.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:700,300,400' rel='stylesheet' type='text/css'>
    <title>myBlog</title>
</head>
<body>
<header>
    <h1>my Blog</h1>
    <p>because the internet needs to know what I think</p>
    <?php
    if(isset($_GET['category'])) {
        $category = $_GET['category'];
        $sql = "SELECT * FROM blogView WHERE category = '$category'";
        $result = $db->query($sql);
        $row = $result->fetch_array();
        $category = $row['category'];
        echo "<p>Here are my {$category} category post
            </p>";
    }
    else{
        echo"<p>
                Here are all my blog posts
            </p>";
    }
    ?>
</header>
<nav>
    <ul>
        <li><a href="blog.php">All Blog Items</a> </li>
        <li><a href="blog.php?category=Work">Work Blog Items</a> </li>
        <li><a href="blog.php?category=University">University Blog Items</a> </li>
        <li><a href="blog.php?category=Family">Family Items</a> </li>
        <li><a href="add.php">Insert Bugs</a> </li>
    </ul>
</nav>
<main>
<?php

if(isset($_GET['category'])){
    $category = $_GET['category'];
    $sql = "SELECT * FROM blogView WHERE category = '$category'";
}
else{
    echo "I am here";
    $sql = "SELECT * FROM blogView";
}

$result=$db->query($sql);
while($row = $result->fetch_array())
{
    $title = $row['entryTitle'];
    $category = $row['category'];
    $summary = $row['entrySummary'];
    $submitter = $row['submitter'];
    echo "<article>
                  <p>{$title} by {$submittermitter}</p>
                  <p>{$category}</p>
                  <p>{$summary}</p>
                  </article>";

    echo '<hr>';

}
$db->close();
?>

</section>
</main>