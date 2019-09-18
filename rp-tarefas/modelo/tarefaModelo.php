<?php

function adicionarTarefa($titulo, $descricao){
    $sql= "INSERT INTO tarefas (titulo, descricao) values ('$titulo', '$descricao')";
    
    $retorno= mysqli_query(conn(), $sql);
    
    if($retorno == true){
        echo "Deu certo";
    }
    else {
        echo "Deu errado";
    }
}
function listarTarefas (){
    $sql = "SELECT * FROM tarefas";
    $resultado = mysqli_query (conn(), $sql);
    $tarefas = array();
    while ($linha = mysqli_fetch_assoc ($resultado)){
        $tarefas[] = $linha;
    }
    return $tarefas;  
    
}

function pegartarefaporid($id){
    $sql = "SELECT * FROM tarefas WHERE id = $id";
    $resul = mysqli_query(conn(), $sql);
    $tarefa = mysqli_fetch_assoc($resul);
    return $tarefa;
}

