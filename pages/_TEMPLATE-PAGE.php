<?php
# THE SETUP FILE WILL NEED TO BE CONFIGURED BASED ON EDITION
require("_SETUP.php");

# --VARIABLES--

# $editionDate <-- this will be the current release month and year
# $editionMenu <-- this is the html for the menu, this will need to be coded out

?>
<li>
  <main id="newsletterWrap" class="pageThree">
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
          <!-- 
            ###################################
            #### TEXT CONTENT WILL GO HERE ####
            ###################################
          -->
        </article> <!-- end content -->
        <aside id="rightImage">
          <!-- 
            ###################################
            ########## IMAGE AND LINK #########
            ###################################
          -->
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