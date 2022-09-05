<h1>Listagem de produtos</h1>
<table class ="table table-striped">
    <tr>
        <th>Id do Produto</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
    </tr>
    <?php
        foreach($arrayProducts as $product)
        {
    ?>
        <tr>
            <td>
                <?=$client['idProduct']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            <td>
                <?=$client['price']?>
            </td>
            <td>
                <?=$client['description']?>
            </td>
        </tr> 
    <?php   
        }
    ?>

</table>