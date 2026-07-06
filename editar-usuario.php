<h1>Editar Usuario</h1>
<?php



$sql = "SELECT * FROM usuarios WHERE id = ".$_REQUEST['id'];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">

      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row->nome; ?>">

    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
    </div>
    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    <div class="mb-3">
      <label for="data_nascimento" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo $row->data_nasc; ?>">
    </div>

    <div class="mb-3">

    <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>