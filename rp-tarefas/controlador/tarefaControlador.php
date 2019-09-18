<?php

require_once 'modelo/tarefaModelo.php';

function chamar(){
   exibir ("tarefa/adicionar"); 
}

function adicionar (){ 
    $titulo= $_POST['titulo'];
    $descricao= $_POST ['desc'];
    
    adicionarTarefa ($titulo,$descricao); 
}

function listar(){
    $dados = array();
    $dados ['tarefa']= listarTarefas();
    exibir ('tarefa/listar', $dados);       
}

        