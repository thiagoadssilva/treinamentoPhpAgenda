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
        <p>Tem contatos</p>
    <?php else : ?>
        <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
    <?php endif ?>
</div>


<!-- CARREGANDO O FOOTER -->
<?php
include("template/footer.php");
?>