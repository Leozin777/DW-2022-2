<h1>Lista de usuários</h1>

<table class="table table-striped">
    <tr>
        <th>Id do usuário</th>
        <th>Nome</th>
        <th>User</th>
        <th>Senha</th>
    </tr>
    <?php
        foreach ($arrayUsers as $user) 
        {
    ?>
        <tr>
            <td>
                <?=$user['idUser']?>
            </td>
            <td>
                <?=$user['name']?>
            </td>
            <td>
                <?=$user['user']?>
            </td>
            <td>
                <?=$user['password']?>
            </td>  
        </tr>
        <?php   
        }
        ?>
        
</table>