<?php require("setup.php") ?>
<li>
  <main id="newsletterWrap" class="pageTwo">
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
      <div class="container">
        <article id="content">
          <h1>Introducing Camelot!</h1>
          <p style="margin: 20px 0 0;">In September we rolled out our fourth Starter layout &ndash; Camelot. Camelot is a clean layout that offers left-to-right menu options. It features full-width slideshow rotation with content on each photo, a right section with the client&rsquo;s choice of callouts, features, office hours or events and a bottom section with the client&rsquo;s choice of callouts, features or blog feeds.</p>
          <p>As with all of the starter layouts, the client chooses:</p>
          <ul>
            <li>Color - from 18 color palettes </li>
            <li>Font - from 13 font options</li>
            <li>Features</li>
          </ul>
        </article>
        <aside id="rightImage">
          <a href="http://camelotbasetest.televox.west.com/" target="_blank">
            <img class="long" src="images/camelot_shoreline.jpg" alt="Starter">
          </a>
          <p style="font-size: 11px;margin:0;text-align: center;">(Click the image to visit the page)</p>
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