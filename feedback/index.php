<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>West - Website Solutions</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="includes/goldfinger.js"></script>
  <link rel="stylesheet" type="text/css" href="includes/goldfinger3.css">
  <script src="https://use.fontawesome.com/be4f3ddb0b.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.js"></script>
</head>
<style>
  div.didYouKnow {
    background-color: #005DAC;
    padding: 1vw 2vw;
    margin: 0 0 1vw;
    border: 2px solid #41719C;
  }

  div.didYouKnow p,
  div.didYouKnow li {
    color: #fff;
  }

  div.didYouKnow p {
    margin: 0 0 5px;
    font-size: 1.25em
  }

  div.didYouKnow li {
    margin: 0 0 5px;
    font-size: 1.05em
  }
</style>

<body>
  <?php require("includes/header.php"); ?>
  <div id="content">
    <div class="container">
      <div class="left">
        <!--main content here-->
        <div id="banner" class="slider controls" data-initialize="false">
          <div class="cycle-slideshow" data-cycle-slides="> figure" data-cycle-speed="800" data-cycle-timeout="5000" data-cycle-pager="ol.selector">
            <figure>
              <figcaption>
                <p class="title">Enhance Dental</p>
                <p><a href="http://www.enhance-dental.com" title="Click to go to the Enhance Dental website" tabindex="0" target="_blank" class="external">http://www.enhance-dental.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site1.png" alt="Ward Orthodontics" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Ward Orthodontics</p>
                <p>
                  <a href="http://www.wardorthodontics.com" title="Click to go to the Ward Orthodontics website" tabindex="-1" target="_blank" class="external">http://www.wardorthodontics.com</a>
                </p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site2.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Peden &amp; Hoffman Orthodontics</p>
                <p><a href="http://www.phbraces.com" title="Click to go to the Peden &amp; Hoffman Orthodontics website" tabindex="0" target="_blank" class="external">http://www.phbraces.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site3.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Jeff Thompson Orthodontics</p>
                <p><a href="http://www.jeffthompsonortho.com" title="Click to go to the Jeff Thompson Orthodontics website" tabindex="-1" target="_blank" class="external">http://www.jeffthompsonortho.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site4.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Children's Dentistry</p>
                <p><a href="http://www.childrensdentistryofrichmond.com" title="Click to go to the Children's Dentistry website" tabindex="-1" target="_blank" class="external">http://www.childrensdentistryofrichmond.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site5.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Dr. Scott McElroy</p>
                <p><a href="http://www.mcelroyortho.com" title="Click to go to the Dr. Scott McElroy website" tabindex="-1" target="_blank" class="external">http://www.mcelroyortho.com</a>
                </p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site6.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Mariani Orthodontics</p>
                <p><a href="http://www.marianiorthodontics.com" title="Click to go to the Mariani Orthodontics website" tabindex="0" target="_blank" class="external">http://www.marianiorthodontics.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site7.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Wake Forest Smiles Family Dentistry</p>
                <p><a href="http://www.smilesofwakeforest.com" title="Click to go to the Wake Forest Smiles Family Dentistry website" tabindex="0" target="_blank" class="external">http://www.smilesofwakeforest.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site8.png" alt="" />
            </figure>

            <figure>
              <figcaption>
                <p class="title">Weiler Orthodontics</p>
                <p><a href="http://www.weilerorthodontics.com" title="Click to go to the Weiler Orthodontics website" tabindex="0" target="_blank" class="external">http://www.weilerorthodontics.com</a></p>
              </figcaption>
              <img src="/chase/goldfinger3/includes/images/bestwebdesigns/site9.png" alt="" />
            </figure>
            <!-- end slide -->

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
        <script>
          $('#pause-play a').click(function() {
            if ($('#pause-play').hasClass('play')) {
              $('#pause-play').removeClass('play');
              $('#pause-play').addClass('pause');
            } else {
              $('#pause-play').removeClass('pause');
              $('#pause-play').addClass('play');
            }
          });
          $(window).on("load", function() {
            $("#banner ol.selector").each(function() {
              $(this).find("span").each(function(index) {
                $(this).text(index + 1);
              });
              $(this).addClass("numbers");
            });
          });
          $(document).ready(function() {
            $("a#webPackagesOpen").on("click", function() {
              $("div.webPackagesWrapper").fadeIn("slow");
            });
            $("a#webPackagesClose").on("click", function() {
              $("div.webPackagesWrapper").fadeOut("slow");
            });
          });
        </script>
        <style>
          div.webPackagesWrapper {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            height: 100vh;
            width: 100%;
            z-index: 5000;
            background-color: rgba(37, 37, 37, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
          }

          #webPackagesClose {
            position: absolute;
            right: 8px;
            top: 5px;
            left: auto;
            bottom: auto;
          }

          #webPackagesClose:before {
            content: "\f00d";
            display: block;
            font-family: FontAwesome;
            color: #FFFFFF;
            font-weight: 300;
            font-size: 27px;
          }
        </style>
        <div class="webPackagesWrapper" style="display: none;">
          <div id="webPackages">
            <a href="javascript:void(0);" id="webPackagesClose"></a>
            <div class="container">
              <div class="row title">
                <div class="cell">
                </div>
                <!--cell-->
                <div class="cell">
                  <span>Starter</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span>Essential</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span>Marketing Pro</span>
                </div>
                <!--cell-->
              </div>
              <!--row.title-->
              <div class="row description">
                <div class="cell">
                </div>
                <!--cell-->
                <div class="cell">
                  <span>Quick Start: Live in 30-45 days</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span>Quick Start: Live in 90-120 days Estimate. <span class="small">Actual timeline may vary based on capacity and client participation.</span></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span>Marketing Pro</span>
                </div>
                <!--cell-->
              </div>
              <!--row.description-->
              <div class="row feature">
                <div class="cell">
                  <span>Personalized Design</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Mobile-Friendly Responsive Design</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>SEO Fundamentals: Optimized Page Titles, Meta Tags & Descriptions</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Simple Content Management Tools: In-Line Editing, Drag-and-Drop Page Elements and File Storage</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Content Library</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Engaging Calls-to-Action</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Social Media Optimization</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Practice Blog</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Bill Pay Redirect</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Surveys & Polls</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Calendar Integration</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Newsfeed</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Breadcrumb Navigation</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>RSS Aggregator</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Content Timer</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Permission Controls & Workflow Authorization</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>ADA Accessible</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Existing Website Content Transfer</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="no"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Unlimited Content Support Package</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="no"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Doctor Reviews</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="no"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <!--row-->
              <div class="row feature">
                <div class="cell">
                  <span>Dear Doctor Digital Library*</span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="no"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
                <div class="cell">
                  <span class="yes"></span>
                </div>
                <!--cell-->
              </div>
              <div class="row description">
                <div class="cell">
                  <span style="font-size: 11px; margin: 0 15px;">*Dental Sites Only</span>
                </div>
                <!--cell-->
                <div class="cell">
                </div>
                <!--cell-->
                <div class="cell">
                </div>
                <!--cell-->
                <div class="cell">
                </div>
                <!--cell-->
              </div>
              <!--row-->
            </div>
            <!--container-->
            <div class="overlay"></div>
          </div>
          <!--#webPackages-->
        </div>
        <!--webPackagesWrapper-->
        <!--lightbox-->
        <p style="display: none;"><a href="javascript:void(0);" id="webPackagesOpen">Click Here to Open Table</a> </p>
        <!--main content section start-->
        <style>
          #tabSlider {
           display: flex;
           flex-wrap: nowrap;
											margin: 35px 0 0;
          }

          #tabSlider>div.slideLeft {
           flex: 1 250px; margin: 0 15px 0 0;
          }

          #tabSlider>div.slideRight {
           flex: 1 75%;
          }

          #tabSlider>div.slideRight>div.slide {
           display: none;
          }
        </style>

        <div id="tabSlider">
          <div class="slideLeft">
            <h3>Website Must-Haves</h3>
            <ul>
              <li><a href="#" onClick="return false;">Security</a></li>
              <li><a href="#" onClick="return false;">Simple Website Editing</a></li>
              <li><a href="#" onClick="return false;">Responsive Design and SEO</a></li>
              <li><a href="#" onClick="return false;">Ongoing Online Presence Management</a></li>
              <li><a href="#" onClick="return false;">Online Reputation Management</a></li>
              <li><a href="#" onClick="return false;">Custom Forms and More</a></li>
            </ul>
          </div>

          <div class="slideRight">
            <div class="slide">
              <h3>Security</h3>
              <p>Our SSL certificate provides a layer of security and protection across your entire website. Whether filling out an online form, requesting an appointment, or making a payment online, your patients will feel confident knowing that they have a secure connection with your website.</p>
            </div>

            <div class="slide">
              <h3>Simple Website Editing</h3>
              <p>Keeping your website updated is stress-free with user-friendly editing tools, such as drag and drop page elements and in-line editing. Plus, we have multiple options so you can have a constant flow of fresh content that will improve your search engine optimization ranking and encourage patients to routinely visit your website.</p>
            </div>

            <div class="slide">
              <h3>Responsive Design and SEO</h3>
              <p>A responsive, mobile-friendly website design is a must. West’s medical and dental websites give all visitors an optimal viewing and user experience, regardless of screen size, and our websites are already primed for search engine visibility. </p>
            </div>

            <div class="slide">
              <h3>Ongoing Online Presence Management</h3>
              <p>West is proud to offer our clients best-in-class online presence management services through a partnership with Wpromote, one of the leading online marketing companies in the country. Wpromote can work with practice owners and CEOs to coordinate all of your marketing strategies and optimize the reach and success of your marketing campaigns.</p>
            </div>

            <div class="slide">
              <h3>Online Reputation Management</h3>
              <p>Patients are online looking for information about you and your practice, so it’s important that your happy patients leave reviews. TeleVox Solutions such as Doctor Reviews and online presence management help healthcare providers create a positive reputation and strong online presence.</p>
            </div>

            <div class="slide">
              <h3>Custom Forms and More</h3>
              <p>Add forms to your website by choosing from templates such as Rx Refill Requests or Medical History, or create your own forms with our easy form builder. Stand out from the competition with a practice blog, custom surveys, an integrated event calendar and more.</p>
            </div>
          </div>
        </div>

        <!--
        <figure id="mobilePreview">
          <div class="phone">
            <img class="phone" ondragstart="return false;" src="http://webplus.televoxsites.com/chase/goldfinger3/includes/images/phoneCutout.png" alt="iPhone" />
          </div>
          <div class="site">
            <img class="site" ondragstart="return false;" src="http://webplus.televoxsites.com/chase/goldfinger3/includes/images/admiralMobile.jpg" alt="Admiral Starter Mobile Version" />
          </div>
        </figure>
-->


        <div class="overlay" style="display: none"></div>
        <!--inside of header.php file-->
      </div>
      <!--left-->
      <div class="right">
        <?php require("formtest.php") ?>
      </div>
      <!--right-->
    </div>
    <!--container-->
  </div>
  <!--#content-->
  </div>
  <!--theme-->
  <?php require("includes/footer.php"); ?>
  <div id="error"><a class="close" href="#" onclick="return false;"></a>You have not filled out all required fields.</div>
</body>

</html>