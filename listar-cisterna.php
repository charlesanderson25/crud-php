<h1>Lista Cisterna</h1>

<?php
    // Consultando todos os dados da tabela cisternas para apresentar no front-end
    $sql = "SELECT * FROM cisternas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    //Tabela: Listar Cisterna apresentada no front-end

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Localização</th>";
            print "<th>Material</th>";
            print "<th>Tipo de Construção</th>";
            print "<th>Data de Inauguração</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->localizacao."</td>";
            print "<td>".$row->material."</td>";
            print "<td>".$row->tipo_construcao."</td>";
            print "<td>".$row->data_inauguracao."</td>";
            print   "<td>
                        <button onclick=\"location.href='?page=editar&id=" .$row->id."';\" class='btn btn-success'>Editar</button>

                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" .$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nenhum resultado encontrado!</p>";
    }
?>