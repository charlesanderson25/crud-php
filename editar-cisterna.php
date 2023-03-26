<h1>Editar Cisterna</h1>

<!-- Selecionando parâmetros da tabela cisterna -->
<?php
    $sql = "SELECT * FROM cisternas WHERE id=" .$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<!-- Formulário para edição de cisternas -->

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Localização</label>
        <input type="text" name="localizacao" value="<?php print $row->localizacao; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Material</label>
        <input type="text" name="material" value="<?php print $row->material; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo de Contrução</label>
        <input type="text" name="tipo_construcao" value="<?php print $row->tipo_construcao; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data de Inauguração</label>
        <input type="date" name="data_inauguracao" value="<?php print $row->data_inauguracao; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar

        </button>
    </div>
</form>