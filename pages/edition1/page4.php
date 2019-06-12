<?php require("_SETUP.php") ?>
<li>
  <main id="newsletterWrap" class="pageSeven">
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
          <h1>Our Starters</h1>
        </div>
      </header>
      <div class="container">
        <main id="content">
          <div id="banner" class="slider controls" data-initialize="false">
            <div class="cycle-slideshow" data-cycle-slides="> figure" data-cycle-speed="800" data-cycle-timeout="5000" data-cycle-pager="ol.selector">

              <figure>
                <figcaption>
                  <h3>Neverland</h3>
                  <ul>
                    <li>Left-to-Right Menu Options and Center-Focused Menus and Content</li>
                    <li>Left and Right side feature options on the homepage: <a href="http://startertest.televox.west.com/miscellaneous/customization/homepage" target="_blank">See More</a></li>
                  </ul>
                </figcaption>
                <img src="images/neverland.png" alt="Neverland" />
              </figure>


              <figure>
                <figcaption>
                  <h3>Olympus</h3>
                  <ul>
                    <li>Top-to-Bottom Menu Options</li>
                    <li>Option for calendar or callouts beneath the welcome text</li>
                    <li>Various feature, call out and other options on the homepage: <a href="http://olympusbasetest.televox.west.com/miscellaneous/customization/homepage" target="_blank">See More</a></li>
                  </ul>
                </figcaption>
                <img src="images/olympus.jpg" alt="Olympus" />
              </figure>


              <figure>
                <figcaption>
                  <h3>Atlantis</h3>
                  <ul>
                    <li>Top-to-Bottom Menu Options</li>
                    <li>Callouts to the right of the header photo</li>
                    <li>Option for blog or feature area below the welcome text</li>
                    <li>Various feature, call out and other options on the homepage: <a href="http://atlantisbasetest.televox.west.com/miscellaneous/customization/homepage" target="_blank">See More</a></li>
                  </ul>
                </figcaption>
                <img src="images/atlantis.jpg" alt="Atlantis" />
              </figure>

              <div id="pause-play" class="pause">
                <a href="#" class="fa fa-pause" data-cycle-cmd="pause" data-cycle-context=".slider .cycle-slideshow">Pause</a>
                <a href="#" class="fa fa-play" data-cycle-cmd="resume" data-cycle-context=".slider .cycle-slideshow">Play</a>
              </div>

              <a href="#" class="cycle-prev fa fa-chevron-left">
                <span>Previous</span>
              </a>
              <a href="#" class="cycle-next fa fa-chevron-right">
                <span>Next</span>
              </a>

              <ol class="selector"></ol>
            </div>
            <!-- end cycle-slideshow -->
          </div>
        </main>
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