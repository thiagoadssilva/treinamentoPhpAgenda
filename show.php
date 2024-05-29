<!-- CARREGANDO O HEADER -->
<?php
include("template/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("template/backbtn.html"); ?>
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p class="p-phone"><?= $contact["phone"] ?></p>
    <p class="bold">Observação:</p>
    <p class="p-observations"><?= $contact["observations"] ?></p>
</div>

<!-- CARREGANDO O FOOTER -->
<?php
include("template/footer.php");
?>