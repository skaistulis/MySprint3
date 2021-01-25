<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="./css/normalize.css">
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <title>CMS Admin</title>
</head>
<body>
    <header>
        <nav>
        <?php
        include_once "bootstrap.php";  
        $home = strtok($_SERVER["REQUEST_URI"], '?');
        $id = $_GET['p'];
        $pages = $entityManager->find('Pages', $id);
        ?>
        <ul class="menu">
            <li><a href="admin.php">Admin</a></li>
            <li><a href="../MySprint3" target="_blank">View Website</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>  
        </nav>
    </header>  
    <section>
    <h1>Edit Page</h1>
        <form action="" method="post">
		<label>Page title:</label>
        <br> 
        <input name="title" type="text" value="<?php echo $pages->getTitle(); ?>" size="103" />
        <br>
        <label>Page content:</label>
		<br>
        <textarea name="content" cols="106" rows="20"><?php echo $pages->getContent(); ?></textarea>
		<br>
		<input type="submit" name="submit" value="Submit" class="button" /></p>
		</form>
        <?php
            // Update
            if(isset($_POST['submit'])){
                $title = $_POST['title'];
		        $content = $_POST['content'];
                $pages->setTitle($title);
                $pages->setContent($content);
                $entityManager->flush();
                header('Location: ./admin.php');
            }
        ?>
    <section>
</body>
</html>