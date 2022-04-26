<?php
    include "database.php";
    $lista=$_POST["lista"];
    $sql="SELECT * FROM candidato WHERE codice_partito=".$lista." ";
    $result=mysqli_query($conn,$sql);
    

?>

<html>
    <h1> Selezione del candidato</h1>
    <p>La seconda fase del voto prevede la scelta del candidato</p>
    <p>Scelga il candidato a cui assegnare il suo voto dall'elenco a comparsa qui sotto</p>
    
    <form action="confermavoto.php">

    <select name="candidati" id=candidati>
    <option value="">--Selezionare la preferenza--</option>
    
    <?php
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        echo "<option value='".htmlspecialchars($row['codice_candidato'])."'>". htmlspecialchars($row['nome_candidato'])."</option>";
    }
    ?>
    </select>
    <br><br>
    <input type="submit" value=Conferma>
    </form>
</html>