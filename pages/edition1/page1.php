<?php require("setup.php") ?>
<li>
  <main id="newsletterWrap" class="pageOne">
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
        <aside id="navBlurb">
          <ul id="sideNav">
            <?php echo $editionMenu ?>
          </ul>
          <section id="blurb">
            <p>We connect. We deliver.<br>
              We are West.</p>
          </section>
        </aside>
        <!-- end navBlurb -->
        <article id="content">
          <header id="logo">
            <img src="images/www-logo.png" alt="West Web Wisdom Logo">
          </header>
          <h1>Issue I</h1>
          <h2>January 2019</h2>
          <p>Happy New Year! </p>
          <p>Sales team, our web department here at TeleVox Solutions at West has a variety of new website offerings and enhanced features that we would like to share with you. </p>
          <p>We&rsquo;ve created this West Web Wisdom newsletter to foster an environment of open communication between our two teams, as we work together to give our clients the best web product we can deliver!</p>
          <p>In order to offer the most innovative websites possible, we are open to suggestions regarding any frequently reoccurring client requests via our Feature Request Form. </p>
        </article>
        <!-- end content -->
      </div>
    </section>
    <!-- end contentWrap -->
    <nav id="nextBtn">
      <p><a href="#" onclick="return false;">Next &raquo;</a></p>
    </nav>
    <!-- end nextBtn -->
  </main>
</li>