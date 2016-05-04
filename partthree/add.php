<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="assets/style.css" />
    <link type="text/css" rel="stylesheet" href="assets/styleform.css" />
    <link type="text/css" rel="stylesheet" href="../../CMM07AL-1312897/partone/assets/unsemantic-grid-responsive-tablet.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:700,300,400' rel='stylesheet' type='text/css'>
    <title>myBlog</title>
</head>
<body>
<header>
    <h1>my Blog</h1>
    <p>because the internet needs to know what I think</p>
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
    <?
    include("connection.php");
if($_SERVER['REQUEST_METHOD']==='GET'){
    echo

    "<form action=\"add.php\" method=\"post\">

                    <ul class=\"form-style-1\">

        <li>
            <label>Enter Title<span class=\"required\">*</span>
                <input type=\"text\" name=\"title\" class=\"field-long\" />
            </label>
        </li>

        <li>
            <label>Enter Summary<span class=\"required\">*</span>
                <textarea name=\"summary\" id=\"field5\" class=\"field-long field-textarea\"></textarea>
            </label>
        </li>

        <li>
            <label>Category
                <select name=\"category\" class=\"field-select\" required>
                    <option value=\"\" selected disabled>Select</option>
                    <option value=\"Work\">Work</option>
                    <option value=\"University\">University</option>
                    <option value=\"Family\">Family</option>
                </select>
            </label>
        </li>
        <li>
            <label>Submitted By:<span class=\"required\">*</span>
                <input type=\"text\" name=\"submitter\" class=\"field-long\" />
            </label>
        </li>

        <li>
            <input type=\"submit\" value=\"Submit\" />
        </li>
    </ul>
    </form>";
}
  elseif($_SERVER['REQUEST_METHOD']==='POST'){
            $entryTitle = $_POST['title'];
            $summary = $_POST['summary'];
            $category = $_POST['category'];
            $submitter = $_POST['submitter'];
            $sql = "INSERT INTO blogView(entryTitle, entrySummary, category, submitter)
                    VALUES ('$entryTitle', '$summary', '$category','$submitter')";
            if($db->query($sql)){
                header("location:blog.php");
            }
            else{
                echo"error ".$sql;
            }
        }
        else{
            header("location:index.php");
        }
        ?>


</main>
<footer>
    <p>Designed by [Fred Antwi-Boateng],[2016]</p>
</footer>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 04/05/2016
 * Time: 11:19
// */
?>