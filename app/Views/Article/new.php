<?= $this->extend("Layout/Default") ?>


<?= $this->section("title")?>Nuevos Articulos<?= $this->endSection()?>

<?= $this->section("content")?>
<h1> New Article </h1>

<?php if (session()->has("errors")): ?>

    <ul>
        <?php foreach(session("errors") as $error): ?>
            <li><?= $error ?></li>

        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?= form_open("Article") ?>

<?= $this->include("Article/form") ?>


</form>



<?= $this->endSection()?>