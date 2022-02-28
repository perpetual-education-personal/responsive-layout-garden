
<articles-intro>

  <header>
    <h2 class='attention-voice'>This is and "Article grid" module. This is its heading.</h2>

    <p class='calm-voice'>Again, we totally just made that up. It's a box with boxes in it.</p>
  </header>

  <article-grid>
    <?php
      $json = file_get_contents('data/articles.json');
      $articles = json_decode($json, true);
      // acting as an example database
    ?>

    <?php foreach ($articles as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>

  </article-grid>

</articles-intro>
