<?php
//Abre a conexão

$conn = pg_connect("host=localhost port=5432 dbname=livro password=root");
$query = 'SELECT codigo, nome FROM famosos;';
$result = pg_query($conn, $query);
if($result) {
    while($row = pg_fetch_assoc($result)) {
        echo $row['codigo'].'-'.$row['nome'].'<br>\n';
    }
}

pg_close($conn);