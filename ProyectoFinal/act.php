<?php

    $conexion=mysqli_connect('localhost','root','','futbol');

    if(!empty($_POST['country']) && !empty($_POST['pj']) && !empty($_POST['win']) && !empty($_POST['draw']) && !empty($_POST['loss']) && 
        !empty($_POST['goals_favor']) && !empty($_POST['goals_against']) && !empty($_POST['dg'])){
        $country = $_POST['country'];
        $pj = $_POST['pj'];
        $win = $_POST['win'];
        $draw = $_POST['draw'];
        $loss = $_POST['loss'];
        $goals_favor = $_POST['goals_favor'];
        $goals_against = $_POST['goals_against'];
        $dg = $_POST['dg'];

        $sql = "UPDATE teams SET pj = :pj, win = :win, draw = :draw, loss +:loss, goals_favor = :goals_favor,
         goals_against = :goals_againt, dg = :dg WHERE country = :country";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_Param(":pj",$pj);
        $stmt->bind_Param(":win",$win);
        $stmt->bind_Param(":draw",$draw);
        $stmt->bind_Param(":loss",$loss);
        $stmt->bind_Param(":goals_favor",$goals_favor);
        $stmt->bind_Param(":goals_against",$goals_against);
        if($stmt->execute()){
            print"Actualizacion completada";
        }
        }

?>