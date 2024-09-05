<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div>
        <?php include('../includes/menu.php'); ?>
        <?php require('../data/articles.php'); ?>
        <?php 
            $id = $_GET['id'];
            $elt = null;
            foreach($articles as $article){
                if($article['id'] == $id ){
                    $elt = $article;
                }
            }
         ?>
    </div>
    <div id="page-header">
            <div style="width: 500px; margin:40px auto;">
                <h2 style="color:#fff;"><?= $elt?$elt['titre']:'Aucun article!' ?></h2>
            </div>
     </div>
    <div class="container">
         <?php if($elt): ?>
            <div>
                <h5><?= $elt['titre'] ?></h5>
                <p><?= $elt['description'] ?></p>
            </div>
         <?php else: ?>
            <p>Aucun article trouve! </p>
         <?php endif ?>   
    </div>
</body>
</html>