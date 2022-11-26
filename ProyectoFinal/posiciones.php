<?php
    $conexion=mysqli_connect('localhost','root','','futbol');
?>


<!DOCTYPE html>
<head>
    <title> Tabla de Posiciones</title>

    <link rel="stylesheet" href="css/main.css">

    <!-- siempre incluir para mostrar la barra de navegacion-->
    <?php
    include 'navbar.php'
    ?>
</head>

<body>

    <table class="tabla_p">
        <tr class="ffff">
            <td>Equipo</td>
            <td>Grupo</td>
            <td>PJ</td>
            <td>G</td>
            <td>E</td>
            <td>P</td>
            <td>GF</td>
            <td>DG</td>
            <td>Puntos</td>
        </tr>

        <?php
            $sql="SELECT * from teams";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>

         <tr>
            <td> <?php echo $mostrar['country']?> </td>
            <td> <?php echo $mostrar['group']?> </td>
            <td> <?php echo $mostrar['pj']?> </td>
            <td> <?php echo $mostrar['win']?> </td>
            <td> <?php echo $mostrar['draw']?> </td>
            <td> <?php echo $mostrar['loss']?> </td>
            <td> <?php echo $mostrar['goals_favor']?> </td>
            <td> <?php echo $mostrar['goals_against']?> </td>
            <td> <?php echo $mostrar['dg']?></td>
            <td> <?php echo $mostrar['pts']?> </td>
        </tr>
        <?php
            }
        ?>
        
        

    </table>

</body>