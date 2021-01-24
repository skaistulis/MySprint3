<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="./css/normalize.css">
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <title>CMS</title>
</head>
<body>
    <header>
        <nav>
            <ul class="menu">            
            <?php
            include_once "bootstrap.php";
            $pagesRepository = $entityManager->getRepository('Pages');
            $pages = $pagesRepository->findAll();
            foreach ($pages as $p) {
                print('<li><a href="' . '?p=' . $p->getId() . '">' .  $p->getTitle() . '</a></li>');   
            }
            echo " </ul>"; 
            ?>
        </nav>
    </header>  
    <section id="content">
    <?php	
        $id = $_GET['p'];
        if(!isset($_GET['p'])){
            $pages = $entityManager->find('Pages', 1);
            echo  '<h2 class="title">' . $pages->getTitle() . '</h2>';

            echo $pages->getContent();
        } else {
            $pages = $entityManager->find('Pages', $id);
            echo  '<h2 class="title">' . $pages->getTitle() . '</h2>';
            echo '<br>';
            echo $pages->getContent();
        }
    ?>
    </section>
</body>
</html>