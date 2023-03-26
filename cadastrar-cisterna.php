<h1>Nova Cisterna</h1>

<!-- Formulário para cadastramento de novas cisternas -->

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Localização</label>
        <input type="text" name="localizacao" class="form-control">
    </div>

    <div class="mb-3">
        <label>Material</label>
        <input type="text" name="material" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo de Contrução</label>
        <input type="text" name="tipo_construcao" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data de Inauguração</label>
        <input type="date" name="data_inauguracao" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar

        </button>
    </div>
</form>