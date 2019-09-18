<h1>Listar Tarefas</h1>

<?php
foreach ($tarefa as $tarefas): ?>
   <?=$tarefas['titulo']?> <br>
   <?=$tarefas['descricao']?> <br><br>

<?php endforeach; ?>  