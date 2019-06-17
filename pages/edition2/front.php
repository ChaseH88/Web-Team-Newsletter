<?php require("_SETUP.php") ?>
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
          <ul id="sideNav" style="position: relative; right: 12px;">
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
          <h1><?php echo $issue ?></h1>
          <h2><?php echo $editionDate ?></h2>
          <p>Sales team, our web department here at TeleVox Solutions at West continues to have a variety of new website offerings and enhanced features that we would like to share with you.</p>
          <p>We created this West Web Wisdom newsletter to foster an environment of open communication and bridge the communication gap between our two teams, as we work together to give our clients the best web product we can deliver!</p>
          <p>In order to offer the most innovative websites possible, we are open to suggestions (via our Feature Request Form) regarding any frequently reoccurring client requests.</p>
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