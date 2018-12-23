<?php
if (isset($_POST['url']) && isset($_POST['size'])) {
    $url = strip_tags($_POST['url']);
    $size = strip_tags($_POST['size']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .background{
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid background">
            <div class="row">
                <div class="col-12">
                    <?php if (empty($url)): ?>
                        <div class="container background">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="title">Générateur Quick Response Code</h1>
                                    <form action="" method="POST" class="border text-center">
                                        <div class="form-group"><label for="url">Veuillez entrer une Url :<input type="text" name="url" class="form-control"  placeholder="https:/" value="<?= isset($url) ? $url : '' ?>" required="" /></label></div>
                                        <div class="form-group"><label for="size">Veuillez indiquer une taille en px :<input type="number" name="size" class="form-control" placeholder="" value="160" required="" /></label></div>
                                        <div class="form-group"><label for="valider"><input type="submit" name="valider" class="btn btn-primary" value="Générer"/></label></div>
                                        <div class="form-group"><label for="reset"><input type="reset" name="reset" class="btn btn-danger" value="reset" /></label></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>                        
                    <?php if (!empty($url)) : ?>
                        <div class="background">
                            <div class="text-center"><img src="https://chart.googleapis.com/chart?cht=qr&chl=<?= $url ?>&chs=<?= $size ?>" width="350"/></div>
                            <div class="col-12 text-center"><a href="index.php"><input type="button" class="btn btn-warning" value="retour Générateur" /></a></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>

