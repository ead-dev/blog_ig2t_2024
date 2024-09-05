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
    </div>
    <div id="page-header">
            <div style="width: 500px; margin:40px auto;">
                <h2 style="color:#fff;">Liste des articles</h2>
            </div>
     </div>
    <div class="container">
        <ul class="list-group">
            <?php foreach($articles as $elt): ?>
                <li class="list-group-item">
                    <div>
                        <h5><a href="/blog/Frontend/article.php?id=<?=  $elt['id'] ?>"><?= $elt['titre'] ?></a></h5>
                        <p><?= $elt['description'] ?></p>
                    </div>
                </li>
            <?php endforeach ?>    
        </ul>
    </div>
</body>
</html>