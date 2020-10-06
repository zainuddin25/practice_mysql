<?php

include 'connection.php';

$pokemon=$db->query("select * from pokemon where id=".$_GET['id']);

$data_pokemon=$pokemon->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>edit</title>
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col">

                <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data_pokemon[0]['id']; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="nama" value="<?php echo $data_pokemon[0]['nama']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="elemen">Choose Elemen</label>
                        <select class="custom-select" name="elemen" id="validationCustom04" required>
                            <option selected disabled value="">Choose Element</option>
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
                        <label for="exampleInputPassword1">Skill Name</label>
                        <input type="text" name="skill" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="elemen">Choose Image</label>
                        <select class="custom-select" name="gambar" id="validationCustom04" required>
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

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>