<div id="newsletter" class="summer">
    <div class="newsletterWrap">
      <ul>
        <?php

        #----------------------------------------------------------------
        # Include the pages in the order you would like them to appear
        # See More: https://www.w3schools.com/php/php_includes.asp
        #----------------------------------------------------------------

          include('front.php');
          #include('YOURPAGE.php');
          include('pages/feedbackPage.php'); #this will be included on every edition

        #----------------------------------------------------------------
        # End of pages
        #----------------------------------------------------------------

        ?>
      </ul>
    </div>
  </div>
  <div class="newsletter controls">
    <a href="#" class="prev"></a>
    <a href="#" class="next"></a>
  </div>