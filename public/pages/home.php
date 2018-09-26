<a href="?page=create_user"> Cadastrar User </a>

<h2>Pagina inicial</h2>

<table class="table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
$users = all('users');
foreach ($users as $user):
?>

        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->nome;?></td>
            <td><?=$user->email;?></td>
            <td>edit</td>
            <td>delete</td>
        </tr>
<?php endforeach;?>
    </tbody>

</table>