<?= $this->extend("Layout/Default") ?>
<?= $this->section("title")?>Articulos<?= $this->endSection()?>



<?= $this->section("content") ?>

<h1> Articles </h1>

<a href="<?= url_to("Article::new") ?>">New</a>


<?php foreach ($Article as $article): ?>





<Article>


<h2><a href="<?= site_url('/Article/' . $article->id) ?>"><?= esc($article->title) ?></a></h2>
<em>By <?= esc($article->first_name) ?></em>
<p><?= esc($article->content) ?></p>
   

</Article>

<?php endforeach; ?>

<?= $pager->simpleLinks() ?>

<?= $this->endSection()?>