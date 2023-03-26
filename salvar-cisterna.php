<?php
    // Receber as ações criadas: cadastrar, editar e excluir 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $localizacao = $_POST["localizacao"];
            $material = $_POST["material"];
            $tipo_construcao = $_POST["tipo_construcao"];
            $data_inauguracao = $_POST["data_inauguracao"];

            // Adicionando novos dados na tabela cisternas

            $sql = "INSERT INTO cisternas (localizacao, material, tipo_construcao, data_inauguracao) VALUES ('{$localizacao}', '{$material}', '{$tipo_construcao}', '{$data_inauguracao}')";

            $res = $conn ->query($sql);

            if($res==true){
                print "<script>alert('Cadastro efetuado com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!')</script>";
                print "<script>location.href='?page=listar';</script>";            
            }

            break;
        case 'editar';
            $localizacao = $_POST["localizacao"];
            $material = $_POST["material"];
            $tipo_construcao = $_POST["tipo_construcao"];
            $data_inauguracao = $_POST["data_inauguracao"];

            // Atualização na tabela do banco de dados 

            $sql = "UPDATE cisternas SET
                        localizacao='{$localizacao}',
                        material='{$material}',
                        tipo_construcao='{$tipo_construcao}',data_inauguracao='{$data_inauguracao}'
                        WHERE
                            id=" .$_REQUEST["id"];

            $res = $conn ->query($sql);

            if($res==true){
                print "<script>alert('Cadastro editado com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!')</script>";
                print "<script>location.href='?page=listar';</script>";            
            }

            break;
        case 'excluir';
            $sql = "DELETE FROM cisternas WHERE id=".$_REQUEST["id"];

            $res = $conn ->query($sql);

            if($res==true){
                print "<script>alert('Cadastro excluído com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!')</script>";
                print "<script>location.href='?page=listar';</script>";            
            }

        break;
    }