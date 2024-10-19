<?= $this->extend("Layout/default") ?>

<?= $this->section("title") ?> Delete Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Delete Article</h1>

<p>Are you sure?</p>

<?= form_open("Article/delete/" . $article->id)?>


<button>yes</button>

</form>

<?= $this->endSection() ?>
