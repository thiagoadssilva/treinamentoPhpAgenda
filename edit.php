<?php
include("template/header.php");
?>


<div class="container">
    <?php include_once("template/backbtn.html"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
        <!-- Criando esse input para identificação da ação que vamos ter no arquivo process.php -->
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"]; ?>">

        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome aqui" value="<?= $contact["name"]; ?>" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite seu telefone aqui" value="<?= $contact["phone"]; ?>" required>
        </div>

        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Digite sua observação aqui" rows="3" ><?= $contact["observations"]; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>


<?php
include("template/footer.php");
?>