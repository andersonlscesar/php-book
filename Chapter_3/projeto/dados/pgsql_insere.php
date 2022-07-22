<?php
//abre a conexão com o pgsql

$conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");

//inserindo registros

pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(1, 'Érico Veríssimo')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(2, 'Jhon Lennon')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(3, 'Mahatma Gandhi')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(4, 'Ayrton Senna')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(5, 'Charlie Chaplin')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(6, 'Anita Garibaldi')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES(7, 'Mario Quintana')");

//Fecha a conexão
pg_close($conn);


