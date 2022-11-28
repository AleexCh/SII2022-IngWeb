<?php
    if(isset($_GET['act'])) $country = $_GET['act'];

    $sql = "SELECT * FROM teams WHERE country = :country"; /*selecciona el la fila en especifico para editar usando el pais como PK ya q no se muestra el id */
    $stmt = $conecion->prepare($sql);
    $stmt->bindParam(":country",$country);
    $stmt->execute();
    $count = $stmt->rowCount();

    if($count > 0){
        $datos = $stmt->fetch();
    }

?>


    <h1>Actualizar usuario</h1>
    <form action="act.php" method="POST">
        <?php echo $datos['country']?> 
        <?php echo $datos['group']?> 
        Partidos jugados <input type="text" name="pj" id="pj" value="<?= $datos['pj']?>"> <br>
        Victorias <input type="text" name="win" id="win" value="<?= $datos['win']?>"> <br>
        Empates <input type="text" name="draw" id="draw" value="<?= $datos['draw']?>"> <br>
        Derrotas <input type="text" name="loss" id="loss" value="<?= $datos['loss']?>"> <br>
        Goles a Favor<input type="text" name="goals_favaor" id="goals_favor" value="<?= $datos['goals_favor']?>"> <br>
        Goles en contra<input type="text" name="goals_againt" id="goals_againt" value="<?= $datos['goals_against']?>"> <br>
        <input type="submit" value="Actializar">

    </form>
