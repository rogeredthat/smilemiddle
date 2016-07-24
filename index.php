<html>

<head>
    <title id="pageTitle">Smilemiddle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500" rel="stylesheet"> -->
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/SmoothScroll.js"></script>
    <link href="fonts/Font Awesome/font.css" rel="stylesheet" type="text/css" />
    <link href="index.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <tracker>
    <tooltip>Fill in your details and we'll get back to you soon</tooltip>
    <logo><span class="blue">SMILE</span><span class="pink">MIDDLE</span></logo>
    <face></face>
    <div>
      <div><a href="#HOME">HOME</a></div>
      <div><a href="#PRODUCTS">PRODUCTS</a></div>
      <div><a href="#UPCOMING">UPCOMING</a></div>
      <div><a href="#TESTIMONIALS">TESTIMONIALS</a></div>
      <div><a href="#CONTACT_US">CONTACT US</a></div>
    </div>
  </tracker>
    <wrapper>
        <slide id='HOME'>
            <slideshow class='hidden'>
                <slideWrapper class="active">
                    <photo>
                        <img class="sample" src="images/img (5).jpg">
                    </photo>
                </slideWrapper>
                <slideWrapper>
                    <photo>
                        <img src="images/img (1).jpg">
                    </photo>
                </slideWrapper>
                <slideWrapper>
                    <photo>
                        <img src="images/img (3).jpg">
                    </photo>
                </slideWrapper>
                <slideWrapper>
                    <photo class="huge">
                        <img src="images/img (2).jpg">
                    </photo>
                </slideWrapper>
                <slideWrapper>
                    <photo class="huge">
                        <img src="images/img (4).jpg">
                    </photo>
                </slideWrapper>
            </slideshow>
            <about>
              <p>
                Gifts are not about the monetary value attached to them, they are about the emotions that go with them. Unique and customised gifts make the receiver feel loved even though the sender is miles away. We, at SmileMiddle, are a team on a mission to spread the infectious smile.

We provide a platform for artists to showcase their talents and get remunerated for their work while providing a service to all those loving husbands &amp; wives, brothers &amp; sisters or any of your loved ones  who somehow feel they are unable to express their affection.

Our artists can create Handmade Portraits and Paintings according to your demands. Add a special touch to your gifts with us and let the smile linger around a bit :)
              </p>
            </about>
        </slide>
        <slide id="PRODUCTS" class='hidden'>
            <page-tag>CHOOSE A <span>TYPE</span></page-tag>
            <categories class="hidden">
                <category style='transition-delay:0s'>
                  <div>
                  <span>COLOR PENCIL</span>
                  <img src="images/sample1.jpg" class='active'></img>
                  <img src="images/sample2.jpg"></img>
                  <img src="images/sample3.jpg"></img>
                </div>
                </category>
                <category style='transition-delay:0.2s'>
                  <div>
                  <span>PENCIL SKETCH</span>
                  <img src="images/sample1.jpg" class='active'></img>
                  <img src="images/sample2.jpg"></img>
                  <img src="images/sample3.jpg"></img>
                </div>
                </category>
                <category style='transition-delay:0.4s'>
                  <div>
                  <span>PEN SHADE</span>
                  <img src="images/sample1.jpg" class='active'></img>
                  <img src="images/sample2.jpg"></img>
                  <img src="images/sample3.jpg"></img>
                </div>
                </category>
                <category style='transition-delay:0.6s'>
                  <div>
                  <span>ACRYLIC STROKE</span>
                  <img src="images/sample1.jpg" class='active'></img>
                  <img src="images/sample2.jpg"></img>
                  <img src="images/sample3.jpg"></img>
                </div>
                </category>
                <category style='transition-delay:0.8s'>
                  <div>
                  <span>WATERCOLOR</span>
                  <img src="images/sample1.jpg" class='active'></img>
                  <img src="images/sample2.jpg"></img>
                  <img src="images/sample3.jpg"></img>
                </div>
                </category>
            </categories>
        </slide>
        <?php
          include 'php/connection.php';
          $sql = "SELECT * FROM `upcoming`;";
          $result = $conn->query($sql);
          if ($result) :
        ?>
        <slide id="UPCOMING" class='hidden'>
          <h1>UPCOMING</h1><br/><br/>
          <ul>
            <li><span>Raksha Bandhan</span><span>06-08-2016</span></li>
            <li><span>Friendship Day</span><span>07-08-2016</span></li>
            <li><span>Janmashtmi</span><span>26-08-2016</span></li>
          <?php
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<li><span>'.$row['label'].'</span><span>'.$row['date'].'</span></li>';
          }
           ?>
         </ul>
        </slide>
        <?php endif; ?>
        <slide id='TESTIMONIALS' class='hidden'>
          <div class="slider">
            <div class="testimonial active">
              <div>
                <div>
                  <img src=""/>
                  <span>-FWA Magazine Adobe-</span>
                </div>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
            </div>
            </div>
            <div class="testimonial">
              <div>
                <div>
                  <img src=""/>
                  <span>-Quirksmode.org-</span>
                </div>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
            </div>
            </div>
            <div class="testimonial">
              <div>
                <div>
                  <img src=""/>
                  <span>-AWWWARDS-</span>
                </div>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
            </div>
            </div>
            <div class="testimonial">
              <div>
                <div>
                  <img src=""/>
                  <span>-HONGKIAT-</span>
                </div>
                <p>do deux two twoi bili Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
            </div>
            </div>
          </div>
        </slide>
        <slide id='CONTACT_US' class='hidden'>
          <div class='vision'>
            At Smile Middle, we understand the importance of art and strive to get artists the respect they deserve. We want to give a meaning to the wonderful hobby of thousands by connecting the best talents around with customers like you and bring all smiles around.
          </div>
            <div class='contacts'>
              <li style='display:block;'><span><a>&#xf0e0;</a></span><span>smilemiddle.services@gmail.com</span></li>
              <li style='display:block;margin-bottom:10px;'><span><a>&#xf095;</a></span><span>+91-9785455421</span></li>
              <li class='social'><span class='fb'><a href='#' target='_blank'>&#xf09a;</a></span></li>
              <li class='social'><span class='tw'><a href='#' target='_blank'>&#xf099;</a></span></li>
              <li class='social'><span class='ig'><a href='#' target='_blank'>&#xf16d;</a></span></li>
            </div>
            <contact-form class='compact'>
                <face></face>
                <input id="nameField" type="text"></input>
                <label for="nameField">Name</label>
                <input id="emailField" type="email"></input>
                <label for="emailField">Email</label>
                <input id="numberField" type="tel"></input>
                <label for="numberField">Phone Number</label>
                <div id="agreement">
                <div id="tandc">
                    do deux two twoi bili Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam
                </div>
                <input id="tandcField" type="checkbox"></input>
                <label for="tandcField">I have read and agree to all T&amp;C</label>
                <view>?</view>
              </div>
                <button class="disabled" title='Read the Terms &amp; Conditions'>
                    SUBMIT
                </button>
            </contact-form>
            <div class='policy'>
              <input type='checkbox' id="privacyInput"/>
              <label for="privacyInput"><u>Read our privacy policy.</u><br/><br/>&copy; Smilemiddle Services 2016</label>
              <p id="privacy_policy" tabindex="400">
                We don't have a privacy policy :P <br>
                Take that madafaka
              </p>
            </div>
        </slide>
    </wrapper>

    <back-awesome class="scroll">
        <one></one>
        <two></two>
        <three></three>
    </back-awesome>


</body>
<script src="index.js"></script>

</html>
