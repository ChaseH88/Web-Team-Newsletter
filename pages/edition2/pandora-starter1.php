<?php require("_SETUP.php") ?>
<li>
  <main id="newsletterWrap" class="">
  <header class="topBar">
      <div class="container"> <a class="nav" href="#" onclick="return false;"> </a>
        <p><?php echo $editionDate ?></p>
        <ul class="topNav">
          <?php echo $editionMenu ?>
        </ul>
      </div>
    </header>
    <!-- end topBar -->
    <section id="contentWrap">
      <div class="container nowrap">
        <article id="content" class="flex-50">
          <h2>Introducing Pandora!</h2>
          <h3>The Latest Starter Layout</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ipsa at ullam veniam accusamus tempore cupiditate adipisci impedit recusandae deleniti reiciendis dolorum labore, reprehenderit explicabo. Veritatis expedita totam in maxime.</p>
      </article>
          <aside id="rightImage" class="flex-50" style="text-align: center;">
            <img src="pages/edition2/images/pandora.jpg" style="max-height: 675px;" alt="New Starter Template - Pandora" />
          </aside>
      </div>
    </section>
    <!-- end contentWrap -->
    <nav id="nextBtn">
      <p><a href="#" onclick="return false;">Next &raquo;</a></p>
    </nav>
    <!-- end nextBtn -->
  </main>
</li>