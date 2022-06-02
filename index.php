<?php
    //Json original https://jsonkeeper.com/b/Q5XS
    $pokejson = file_get_contents("pokes.json");
    $pokemons = json_decode($pokejson, true);
    // print_r($pokemons);
    // die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokebanner</title>

    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">




</head>
<body>
    
    <!--Cabeçalho-->
    <header>
        <nav class="navbar navbar-expand-md text-dark bg-danger">
              
            <div class="container">
                
                <a class="navbar-brand text-light" href="#"><i class="bi bi-code-slash"></i></i></a>
                
                <button class="navbar-toggler d-lg-none" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        
                        <li class="nav-item active">
                            <a class="nav-link text-light" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Meus pokemons</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Configurações</a>
                        </li>
  
                    </ul>
                </div>
          </div>
        </nav>
    </header>

    <!-- Banner -->
    <div class="container-fluid p-0 ">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://dummyimage.com/1200x250/383838/ffffff.png&text=Pokedex" class="img-fluid w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="https://dummyimage.com/1200x250/383838/ffffff.png&text=Pokedex" class="img-fluid w-100" alt="Second slide">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
    </div>

    <!--Cards-->
    
    <div class="container mt-5 mb-5">
        <div class="row">
        
            <?php foreach($pokemons as $poke): ?>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <img src="<?=$poke["imagem"]?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?=$poke["nome"]?> </h5>
                            <p class="card-text"> 
                                Tipo: <?=$poke["tipo"] ?><br>
                                Altura: <?=$poke["altura"] ?><br>
                                Peso: <?=$poke["peso"] ?>
                            </p>
                            <a href="#" class="btn btn-primary">Mais informações</a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detalhes-pokemon-<?=$poke["nome"]?>">
                                <i class="bi bi-eye"></i>
                            </button>

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal" id="detalhes-pokemon-<?=$poke["nome"]?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><?=$poke["nome"]?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    

    
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
