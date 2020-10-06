<?php

include 'connection.php';

$pokemon=$db->query("select * from pokemon");

$data_pokemon=$pokemon->fetchAll();


foreach($data_pokemon as $value){
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icons.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Pokemon MF</title>
    <style>
        body{
            background-image: url(images/bg3.jpg);
        }
    </style>
</head>
<body>
    <h1 class="text-center"><img src="images/logo.png" width="170" alt="pokemon"></h1>
    <h1 class="text-center text-white">Pokemon<span class="text-danger">.com</span></h1>

    <div class="container">
        <div class="row">
            <?php foreach($data_pokemon as $value) : ?>
            <div class="card m-2 bg-dark" style="width: 16rem; float:left;">

                <img src="images/<?php echo $value['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-primary"><?php echo $value['id']; ?>. <?php echo $value['nama']; ?></h5>
                    <ul style="list-style: none;">
                        <li>
                            <b class="text-info">Elemen : <?php echo $value['elemen']; ?></b>
                        </li>
                        <li>
                            <b class="text-info">Skill  : <?php echo $value['skill']; ?></b>
                        </li>
                        <li>
                        <a class="text-warning" href="delete.php?id=<?php echo $value['id']; ?>">Hapus</a> | <a class="text-warning" href="edit.php?id=<?php echo $value['id']; ?>">edit</a>
                        </li>
                    </ul>
                    <!-- <a href="#" class="btn btn-primary">View</a> -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">

                <form action="input.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-light">Name</label>
                        <input type="text" name="nama" placeholder="input nama" class="form-control bg-transparent text-white">
                    </div>
                    <div class="form-group">
                        <label for="elemen" class="text-light">Type</label>
                        <select class="custom-select bg-transparent" name="elemen" id="validationCustom04" required>
                            <option selected disabled value="">Choose Type</option>
                            <option value="Fire">Fire</option>
                            <option value="Water">Water</option>
                            <option value="Soil">Soil</option>
                            <option value="Lightning">Lightning</option>
                            <option value="Wind">Wind</option>
                            <option value="Fairy">Fairy</option>
                            <option value="Grass">Grass</option>
                            <option value="Poison">Poison</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-light">Skill Name</label>
                        <input type="text" name="skill" placeholder="input skill name" class="form-control bg-transparent text-white">
                    </div>
                    <div class="form-group">
                        <label for="elemen" class="text-light">Choose Image</label>
                        <select class="custom-select bg-transparent" name="gambar" id="validationCustom04" required>
                            <option selected disabled value="">Choose Image</option>
                            <option value="bulbasaur.png">bulbasaur.png</option>
                            <option value="pikachu.png">pikachu.png</option>
                            <option value="squirtle.png">squirtle.png</option>
                            <option value="charmander.png">charmander.png</option>
                            <option value="caterpie.png">caterpie.png</option>
                            <option value="weedle.png">weedle.png</option>
                            <option value="spearow.png">spearow.png</option>
                            <option value="rattata.png">rattata.png</option>
                            <option value="pidgey.png">pidgey.png</option>
                            <option value="ekans.png">ekans.png</option>
                            <option value="sandshrew.png">sandshrew.png</option>
                            <option value="nidoran.png">nidoran.png</option>
                            <option value="nidoranl.png">nidoranl.png</option>
                            <option value="clefairy.png">clefairy.png</option>
                            <option value="celesteela.png">celesteela.png</option>
                            <option value="diglet.png">diglet.png</option>
                            <option value="exeggutor.png">exeggutor.png</option>
                            <option value="giratina.png">giratina.png</option>
                            <option value="jigglypuff.png">jigglypuff.png</option>
                            <option value="kygore.png">kygore.png</option>
                            <option value="nekrozma.png">nekrozma.png</option>
                            <option value="oddish.png">oddish.png</option>
                            <option value="onix.png">onix.png</option>
                            <option value="paras.png">paras.png</option>
                            <option value="rayquaza.png">rayquaza.png</option>
                            <option value="steelix.png">steelix.png</option>
                            <option value="venonat.png">venonat.png</option>
                            <option value="vulpix.png">vulpix.png</option>
                            <option value="wailord.png">wailord.png</option>
                            <option value="wisiwasi.png">wisiwasi.png</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-transparent btn-outline-primary text-light">Save</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="text-center relative-bottom" id="footer">
        <p class="text-light"> &copy;2020 ferdiansyah </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>