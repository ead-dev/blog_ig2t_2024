<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div>
        <?php include('../includes/menu.php'); ?>
    </div>
    <h1>CONTACTEZ NOUS</h1>
    <div class="d-flex justify-content-between">
        <div>
            <img id="bgimg" src="../assets/images/slide3.jpg" alt="">
        </div>
        <div style="min-width: 400px;" class="bg-warning p-3">
            <form action="" method="post">
                <div>
                    <label for="">VOTRE NOM</label>
                    <input class="form-control" placeholder="Saisair votre nom complet" type="text">
                </div>
                <div>
                    <label for="">VOTRE EMAIL</label>
                    <input class="form-control" placeholder="Saisir votre adresse email" type="text">
                </div>
                <div>
                    <label for="">VOTRE TELEPHONE</label>
                    <input class="form-control" placeholder="Saisir votre numero de telephone" type="text">
                </div>
                <div>
                    <label for="">VOTRE MESSAGE</label>
                    <textarea class="form-control" placeholder="Votre message ici ..." name="" id=""></textarea>
                </div>
                <div>
                    <button class="btn btn-success">Envoyer</button>
                </div>

            </form>
        </div>
    </div>

    <style>
        form>div{
            margin-top: 20px;
        }
        label{
            font-size: 12px;
        }
        #bgimg{
            width: 100%;
        }
    </style>
</body>
</html>