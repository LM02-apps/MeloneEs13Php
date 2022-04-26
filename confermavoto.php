<?php
    include "database.php";
    $candidati=$_POST["candidato"];
    $sql="SELECT c.codice_candidato, c.nome_candidato, c.codice_partito, p.nome FROM candidato c INNER JOIN partiti p ON c.codice_partito=p.codice_partito WHERE c.codice_candidato=".$candidati." ";
    $result=mysqli_query($conn,$sql);
    

?>
<html>
    <h1> Conferma del voto</h1>
    <p>La terza ed ultima fase del voto consiste nella conferma della selezione</p>
    <p>Qui sotto è riepilogata la sua scelta di voto. Confermando questa scelta lei esprime in modo definitivo il suo voto</p>
    

    <form action="confermavoto.php">

    <?php
        echo "Lista:"
    
    ?>
 

    <input type="submit" value=Conferma>
    
    </form>
</html>