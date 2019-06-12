<?php require("setup.php") ?>
<li>
  <main id="newsletterWrap" class="pageFive">
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
      <header id="overview">
        <div class="container">
          <h1 style="margin: 0 0 20px;">DNN Sunset</h1>
        </div>
      </header>
      <div class="container">
        <article id="content">
          <p>After years of loyal service, the DNN platform is finally riding into the sunset! </p>
          <h2>Why are We Sunsetting DNN?</h2>
          <p>DNN is a legacy CMS (Content Management System) platform for website designs. The platform is outdated and is based on antiquated Web technology that is no longer supported in the industry. The average subscription payment for DNN clients is $68\month, making it no longer feasible to support and driving technical debt higher. Therefore, the decision was easy, decommission now or lose money later. Several client communications were sent via e-mail in addition to proactive outreach by our sales team. As of Oct. 1, 2018, there were still 396 clients remaining on the platform - totaling over $26,928. The communication outreach was not as effective as we had hoped because we found that nearly half of our delivered e-mail outreach was not opened by clients.</p>
        </article>
        <!-- end content -->
        <aside>
          <h2>Outreach Strategy </h2>
          <p>Since e-mail outreach alone was not effective, we decided to step up the communication efforts by delivering a more targeted outreach. In addition to e-mails, we sent letters by mail as well as conducted phone outreach using our client engagement team.</p>
          <img src="images/sunset.jpg" alt="Starter" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.35);">
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