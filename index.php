<!-- CARREGANDO O HEADER -->
<?php
include("template/header.php");
?>

<!-- ESTRUTURA DA PAGINA -->

<div class="container">
    <?php if (isset($printMsg) && $printMsg != '') : ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">Minha Agenda</h1>
    <?php if (count($contacts) > 0) : ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php foreach($contacts as $contact): ?>
                <tr>
                    <td scope="rwo" class="col-id"><?= $contact["id"] ?></td>
                    <td scope="rwo"><?= $contact["name"] ?></td>
                    <td scope="rwo"><?= $contact["phone"] ?></td>
                    <td class="actions">
                        <a href=""><i class="fas fa-eye check-icon"></i></a>
                        <a href=""><i class="far fa-edit edit-icon"></i></a>
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>    
        </table>
    <?php else : ?>
        <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
    <?php endif ?>
</div>


<!-- CARREGANDO O FOOTER -->
<?php
include("template/footer.php");
?>