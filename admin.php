<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            <!-- <form action="logout" method="POST">
                <input type="hidden"  name="logout">
                <input type="submit" value="Logout">
            </form> -->
            <li><a href="login.php">Logout</a></li>
        </ul>  
        </nav>
    </header>  
    <section>
    <h1>Manage Pages</h1>

		<table>
		<tr>
			<th><strong>Title</strong></th>
			<th><strong>Action</strong></th>
		</tr>
        <?php
    
            $pagesRepository = $entityManager->getRepository('Pages');
            $pages = $pagesRepository->findAll();
            $pageHome = $entityManager->find('Pages', 1);
            $pageHomeId = $pageHome->getId();
                        

            // foreach ($pages as $p) {
            //     print('<tr><td>' . $p->getTitle() . '</td>');
            // if ($pageHomeId == 1){
            //     echo '<td>' .  'la' . '</td></tr>';
            //     } else {
            //         echo '<td>' .  'lalla' . '</td></tr>';
            //     }

            // }
            
           
            // $pages = $entityManager->find('Pages', 1);
            // echo  '<h2>' . $pages->getTitle() . '</h2>';
            // echo '<br>';
            // echo $pages->getContent();
        ?>

    <section>
</body>
</html>
<?php
// echo "<tr>";
// 				echo "<td>$row->pageTitle</td>";
// 				if($row->pageID == 1){ //home page hide the delete link
// 					echo "<td><a href=\"".DIRADMIN."editpage.php?id=$row->pageID\">Edit</a></td>";
// 				} else {
// 					echo "<td><a href=\"".DIRADMIN."editpage.php?id=$row->pageID\">Edit</a> | <a href=\"javascript:delpage('$row->pageID','$row->pageTitle');\">Delete</a></td>";
// 				}
				
// 			echo "</tr>";