<h1>Listagem de Clientes</h1>
<table class ="table table-striped">
    <tr>
        <th>Id do Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ação</th>
    </tr>
    <?php
        foreach($arrayClients as $client)
        {
    ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <?=$client['phone']?>
            </td>
            <td>
                <?=$client['address']?>
            </td>
            <td>
                <a class="btn-info" href="?controller=client&action=detailsClient&id=<?=$client['idClient']?>">
                    Detalhes
                </a>
            </td>

            <td>
                <a class="btn-warning" href="?controller=client&action=updateClient&id=<?=$client['idClient']?>">
                    Alterar
                </a>
            </td>

            <td>
                <a class="btn-danger" href="?controller=client&action=deleteClient&id=<?=$client['idClient']?>">
                    Deletar
                </a>
            </td>

        </tr> 
    <?php   
        }
    ?>

</table>