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
    <h1 class="deletePage">Are you sure you want to delete this page?</h1>
        <?php echo $pages->getTitle(); 
        echo "<br>";
        echo $pages->getContent(); ?>
		<br>
        <form action="" method="post">
		<input type="submit" name="delete" value="Delete" class="button" /></p>
		</form>
        <?php
            // Update
            if(isset($_POST['delete'])){
                $entityManager->remove($pages);
                $entityManager->flush();
                header('Location: ./admin.php');
            }
        ?>
    <section>
</body>
</html>