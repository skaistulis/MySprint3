<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <title>CMS</title>
</head>
<body>
    <header>
        <nav>
            <ul class="menu">            
            <?php
            include_once "bootstrap.php";    
            // $root = strtok($_SERVER["REQUEST_URI"], '?');
            //other pages
            $pagesRepository = $entityManager->getRepository('Pages');
            $pages = $pagesRepository->findAll();
            // $home = $entityManager->getRepository('Pages')->findBy(array('status' => 0));
            // $home[0] !== NULL ? print '<li><a href="' . $root . '">' . $home[0]->getTitle() : '';
            foreach ($pages as $p) {
                print('<li><a href="' . '?p=' . $p->getId() . '">' .  $p->getTitle() . '</a></li>');   
            }
            echo "</ul>"; 
            ?>
        </nav>
    </header>  
    <section id="content">
    <?php	
        $id = $_GET['p'];
        if(!isset($_GET['p'])){
            $pages = $entityManager->find('Pages', 1);
            echo  '<h2>' . $pages->getTitle() . '</h2>';
            echo '<br>';
            echo $pages->getContent();
        } else {
            $pages = $entityManager->find('Pages', $id);
            echo  '<h2>' . $pages->getTitle() . '</h2>';
            echo '<br>';
            echo $pages->getContent();
        }
    ?>
    </section>
</body>
</html>