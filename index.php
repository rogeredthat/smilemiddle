<html>

<head>
  <title id="pageTitle">Smilemiddle</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
  <meta name="theme-color" content="#5091DA" />
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500" rel="stylesheet"> -->
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/SmoothScroll.js"></script>
  <link href="fonts/Font Awesome/font.css" rel="stylesheet" type="text/css" />
  <link href="index.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <tracker>
    <logo><span class="blue">SMILE</span><span class="pink">MIDDLE</span></logo>
    <face></face>
    <div>
      <div class="active"><a href="#HOME">HOME</a></div>
      <div><a href="#PRODUCTS">PRODUCTS</a></div>
      <div><a href="#UPCOMING">UPCOMING</a></div>
      <div><a href="#TESTIMONIALS">TESTIMONIALS</a></div>
      <div><a href="#CONTACT_US">CONTACT US</a></div>
    </div>
  </tracker>
  <wrapper>
    <slide id='HOME' class='hidden'>
      <slideshowwrapper>
      <dots>
        <div class="active"></div>
        <div></div>
        <div></div>
      </dots>
      <slideshow>
        <slideWrapper class='active'>
          <photo>
            <div style="background-image:url('images/img (1).jpg')"></div>
          </photo>
        </slideWrapper>
        <slideWrapper>
          <photo>
            <div style="background-image:url('images/img (3).jpg')"></div>
          </photo>
        </slideWrapper>
        <slideWrapper>
          <photo>
            <div style="background-image:url('images/img (2).jpg')"></div>
          </photo>
        </slideWrapper>
      </slideshow>
      </slideshowwrapper>
      <about>
        <p>
          Gifts are not about the monetary value attached to them, they are about the emotions that go with them. <i>Unique &amp; customised gifts</i> make the receiver feel loved even though the sender is miles away. We, at <strong>SmileMiddle</strong>, are a team on a mission to spread the infectious smile.

          We provide a platform for artists to showcase their talents and get remunerated for their work while providing a service to all those loving husbands &amp; wives, brothers &amp; sisters or any of your loved ones  who somehow feel they are unable to express their affection.

          Our artists can create <strong>Handmade Portraits</strong> and <strong>Paintings</strong> according to your demands. Add a special touch to your gifts with us and let the smile linger around a bit :)
        </p>
      </about>
    </slide>
    <slide id="PRODUCTS" class='hidden'>
      <page-tag>CHOOSE A <span>TYPE</span></page-tag>
      <categories class="hidden">
        <category style='transition-delay:0s'>
          <div>
            <span>COLOR PENCIL</span>
            <div style="background-image:url('images/sample1.jpg')" class='active'></div>
            <div style="background-image:url('images/sample2.jpg')"></div>
            <div style="background-image:url('images/sample3.jpg')"></div>
          </div>
        </category>
        <category style='transition-delay:0.2s'>
          <div>
            <span>PENCIL SKETCH</span>
            <div style="background-image:url('images/sample1.jpg')" class='active'></div>
            <div style="background-image:url('images/sample2.jpg')"></div>
            <div style="background-image:url('images/sample3.jpg')"></div>
          </div>
        </category>
        <category style='transition-delay:0.4s'>
          <div>
            <span>PEN SHADE</span>
            <div style="background-image:url('images/sample1.jpg')" class='active'></div>
            <div style="background-image:url('images/sample2.jpg')"></div>
            <div style="background-image:url('images/sample3.jpg')"></div>
          </div>
        </category>
        <category style='transition-delay:0.6s'>
          <div>
            <span>ACRYLIC STROKE</span>
            <div style="background-image:url('images/sample1.jpg')" class='active'></div>
            <div style="background-image:url('images/sample2.jpg')"></div>
            <div style="background-image:url('images/sample3.jpg')"></div>
          </div>
        </category>
        <category style='transition-delay:0.8s'>
          <div>
            <span>WATERCOLOR</span>
            <div style="background-image:url('images/sample1.jpg')" class='active'></div>
            <div style="background-image:url('images/sample2.jpg')"></div>
            <div style="background-image:url('images/sample3.jpg')"></div>
          </div>
        </category>
        <category style='transition-delay:0.8s'>
          <div>
            <span>OIL PAINTING</span>
            <div style="background-image:url('images/sample1.jpg')" class='active'></div>
            <div style="background-image:url('images/sample2.jpg')"></div>
            <div style="background-image:url('images/sample3.jpg')"></div>
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
      <br/>
      <h1>OCCASIONS</h1><br/>
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
      <br/>
      <h1>UPCOMING</h1><br/>
      <ul>
        <li><span>Raksha Bandhan</span><span>06-08-2016</span></li>
        <li><span>Friendship Day</span><span>07-08-2016</span></li>
        <li><span>Janmashtmi</span><span>26-08-2016</span></li>
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
  <slide id="OPPORTUNITIES">
    <h3>Opportunities with us</h3>
    <ul>
      <li class="title">Interns</li>
      <li>Hey yo </li>
      <li>Bitch magnets</li>
      <li>Maa chudao</li>
      <li>Samjhe bhosadi ke</li>
    </ul>
    <ul>
      <li class="title">Artists</li>
      <li>Maa chudao</li>
      <li>Maa chudao</li>
      <li>Maa chudao</li>
      <li>Maa chudao</li>
      <li>Maa chudao</li>
    </ul>
    <span>Send your portfolio at <i>smilemiddle.services@gmail.com</i></span>
  </slide>
  <slide id='CONTACT_US' class='hidden'>
    <div class='vision'>
      At Smile Middle, we understand the importance of art and strive to get artists the respect they deserve. We want to give a meaning to the wonderful hobby of thousands by connecting the best talents around with customers like you and bring all smiles around.
    </div>
    <div class='contacts'>
      <li style='display:block;'><span><a>&#xf0e0;</a></span><span>smilemiddle.services@gmail.com</span></li>
      <li style='display:block;margin-bottom:10px;'><span><a>&#xf095;</a></span><span>+91-9785455421</span></li>
      <li class='social'><span class='fb'><a href='#' target='_blank'>&#xf09a;</a></span></li>
      <li class='social'><span class='ig'><a href='#' target='_blank'>&#xf16d;</a></span></li>
    </div>
    <contact-form class='compact'>
      <face></face>
      <input id="nameField" type="text" />
      <label for="nameField">Name</label>
      <input id="emailField" type="email" />
      <label for="emailField">Email</label>
      <input id="cityField" type="text" />
      <label for="cityField">City/Location</label>
      <input id="numberField" type="tel" />
      <label for="numberField">Phone Number</label>
      <select id="categoryField">
        <option selected="selected" disabled>&nbsp;</option>
        <option>Color Pencil</option>
        <option>Pencil Sketch</option>
        <option>Pen Shade</option>
        <option>Acrylic Stroke</option>
        <option>Watercolor</option>
        <option>Oil Painting</option>
      </select>
      <label for="categoryField">Category</label>
      <input id="couponField" type="text" />
      <label for="couponField">Coupon Code (if any)</label>
      <div class="button"></div>
    </contact-form>
    <div class='policy'>
      <span for="privacypolicy"><u>Terms and conditions.</u></span>
      <span for="termsandconditions"><u>Read our privacy policy.</u></span>
      <span for="faq"><u>FAQ</u></span>
      <copy style="font-size:0.8em;">&copy; SmileMiddle 2016</copy>
    </div>
  </slide>
</wrapper>
<div class='overlay'>
  <p id="privacypolicy">
        We don't have a privacy policy :P <br>
        Take that madafaka
  </p>
  <p id="termsandconditions">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p id="faq">
  </p>
</div>
</body>
<script src="index.js"></script>

</html>
