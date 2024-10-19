<?= $this->extend("Layout/Default") ?>


<?= $this->section("title")?>Editar Articulos<?= $this->endSection()?>

<?= $this->section("content")?>
<h1> Editar Article </h1>

<?php if (session()->has("errors")): ?>

    <ul>
        <?php foreach(session("errors") as $error): ?>
            <li><?= $error ?></li>

        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?= form_open("Article/" . $article->id) ?>

<input type="hidden" name="_method" value="patch">

<?= $this->include("Article/form") ?>


</form>



<?= $this->endSection()?>