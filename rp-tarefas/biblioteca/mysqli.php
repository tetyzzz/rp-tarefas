<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "rp");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}