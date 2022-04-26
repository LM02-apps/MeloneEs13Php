<?php
    include "database.php";
    $sql="SELECT * FROM partiti";
    $result=mysqli_query($conn,$sql);

?>

<html>
    <h1> Selezione della lista</h1>
    <p>La prima fase del voto prevede la selezione della lista</p>
    <p>Scelga la lista a cui assegnare il Suo voto dall'elenco a comparsa qui sotto</p>
    <form action="candidati.php" method="POST">
    <select name="lista" id=lista>
    <option value="">--Selezionare la preferenza--</option>
    <?php
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        echo "<option value='".htmlspecialchars($row['codice_partito'])."'>". htmlspecialchars($row['nome'])."</option>";
    }
    ?>
    </select>
    <br><br>
    <input type="submit" value=Conferma>
    </form>
</html>