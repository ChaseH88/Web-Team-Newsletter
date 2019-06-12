<div id="newsletter">
    <div class="newsletterWrap">
      <ul>
        <?php

        #----------------------------------------------------------------
        # Include the pages in the order you would like them to appear
        #----------------------------------------------------------------

          include('front.php');
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