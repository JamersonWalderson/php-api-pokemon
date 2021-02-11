</html>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>API - Pokémon</title>
  </head>
  <body>
    <div class="">
      <div class="row">
        <?php
            foreach($jsonoutput->pokemon as $pokemon) {
                echo "
                <div class='col-md-3'>
                  <div class='card border-light' style='width: 18rem;'>
                    <img src='$pokemon->img' class='card-img-top' alt=''>
                    <div class='card-body'>
                        <p class='card-text'>
                          <strong style='font-size: 20px;'>$pokemon->name</strong></br>";
                          foreach($pokemon->type as $value) {
                            echo "<span class='badge bg-light text-dark'>$value</span> ";
                        
                          }
                echo "
                    </div>
                  </div>
                </div>
                ";
            }
        ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
