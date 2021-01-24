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
        ?>
        <ul class="menu">
            <li><a href="<?php echo $home;?>">Admin</a></li>
            <li><a href="../MySprint3" target="_blank">View Website</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>  
        </nav>
    </header>  
    <section>
    <h1 class="manage">Manage Pages</h1>

		<table>
		<tr>
			<th><strong>Title</strong></th>
			<th><strong>Action</strong></th>
		</tr>
        <?php
            $pagesRepository = $entityManager->getRepository('Pages');
            $pages = $pagesRepository->findAll();

            foreach ($pages as $p) {
                print('<tr><td>' . $p->getTitle() . '</td>');
            if ($p->getId() == 1){
                echo '<td><a href="' . 'edit.php?p=' . $p->getId() . '">' .  'edit' . '</a></td></tr>';
                } else {
                    echo '<td><a href="' . 'edit.php?p=' . $p->getId() . '">' .  'edit' . '</a>' . ' | ' 
                    .'<a href="' .  'delete.php?p=' . $p->getId() . '">' .  'delete' . '</a>' .'</td></tr>';
                }
            }
        ?>
    <button><a class="addButton" href="add.php">ADD new page</a></button>
    <br>
    <br>
    <section>
</body>
</html>
