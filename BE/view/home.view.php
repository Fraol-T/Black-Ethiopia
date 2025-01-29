
<?php if(!is_user_authenticated()): ?>
<section class="landing">
    <h1>Discover The Art Of Perfect Coffee.</h1>
      <p>
        Experience the difference as we meticulously select and roast the finest
        beans...
      </p>
      <a href="log.php" class="order">Order Now</a>
      <div class="stats">
        <span>1K+ Reviews</span>
        <span>3K+ Best Sell</span>
        <span>150K+ Menu</span>
      </div>
</section>
<?php else: ?>

<section class="services">
  <h1>OUR DELICIOUS SERVICES</h1>
    <p>We offer a carefully curated collection of coffee varieties.</p>
    <div class="service-container">
      <div class="service-card">
        <h3>☕ Coffee Types</h3>
        <p>A variety of coffee types to suit your taste.</p>
      </div>
      <div class="service-card">
        <h3>🌱 Different Beans</h3>
        <p>We source and roast the best quality beans.</p>
      </div>
      <div class="service-card">
        <h3>🧊 Cold Coffee</h3>
        <p>Enjoy a variety of cold coffee options.</p>
      </div>
    </div>
    <section class="about-us">
      <div class="container">
        <div class="about-content">
            <h3 class="section-title">Discover</h3>
            <h2>About Us</h2>
            <p>We will in general overlook that satisfaction doesn’t originate from something we don’t have, yet rather of perceiving.</p>
            <p>In 1995 Bakery House wandered into advancement and innovativeness and presented productive Birthday Cakes, Customized Wedding Cakes and Theme Cakes according to events.</p>
            <a href="about.php" class="btn">Know More About Us</a>
        </div>
        <div class="about-images">
          <img src="image/cofeebean.jpg" width="222" height="333" alt="Bigger Image">
        </div>
      </div>
    </section>

    <div class="container">
      <div class="contact-form">
            <h2>Send a Message</h2>
            <form>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Name" required><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="name" placeholder="E-mail address" required><br>
                <label for="tf">What's on your mind</label>
                <textarea placeholder="Message" rows="5"id= "tf" name= "tf"required></textarea><br>
                <button type="submit">Submit</button>
            </form>
            <br><br><br><br><br>
      </div>
      <div class="contact-info">
          <h3>Join us</h3>
            <h3>Get In Touch</h3>
            <div class="info-item">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M24,4C14.626,4,7,11.626,7,21c0,4.036,1.449,7.953,4.093,11.048c0.302,0.343,7.427,8.439,9.807,10.708C21.769,43.585,22.884,44,24,44s2.231-0.415,3.101-1.244c2.767-2.639,9.524-10.385,9.82-10.725C39.551,28.953,41,25.036,41,21C41,11.626,33.374,4,24,4z M24,26c-2.761,0-5-2.239-5-5s2.239-5,5-5s5,2.239,5,5S26.761,26,24,26z" fill="#FFFFFF" />
              </svg>
              <p>London Eye, London, UK</p>
            </div>
            <div class="info-item">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M22.916,6.625l1.719,4.055c0.749,1.767,0.334,3.845-1.028,5.137l-3.212,3.048c-0.362,0.344-0.55,0.843-0.469,1.335c0.31,1.881,0.997,3.736,2.061,5.566c1.062,1.826,2.355,3.38,3.88,4.661c0.404,0.339,0.965,0.427,1.465,0.26l3.747-1.25c1.725-0.575,3.603,0.086,4.661,1.64l2.465,3.621c1.23,1.807,1.009,4.299-0.517,5.831l-1.636,1.642c-1.628,1.634-3.953,2.227-6.104,1.556c-5.078-1.584-9.746-6.286-14.006-14.107c-4.266-7.832-5.771-14.478-4.516-19.936c0.528-2.297,2.163-4.126,4.298-4.808l2.153-0.688C19.897,3.545,22.052,4.587,22.916,6.625z" fill="#FFFFFF" />
              </svg>
                <p>+251-114-81819</p>
            </div>
            <div class="info-item">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M10 8C6.86 8 4.2795313 10.42 4.0195312 13.5L24 24.289062L43.980469 13.5C43.720469 10.42 41.14 8 38 8L10 8 z M 4 16.890625L4 34C4 37.31 6.69 40 10 40L38 40C41.31 40 44 37.31 44 34L44 16.890625L24.710938 27.320312C24.490938 27.440312 24.25 27.5 24 27.5C23.75 27.5 23.509062 27.440313 23.289062 27.320312L4 16.890625 z" fill="#FFFFFF" />
              </svg>
                <p>ethiopioco@gmail.com</p>
            </div>
            <div class="social-icons">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M24,4C12.972,4,4,12.972,4,24c0,10.006,7.394,18.295,17,19.75V29h-4c-0.552,0-1-0.447-1-1v-3c0-0.553,0.448-1,1-1h4v-3.632C21,15.617,23.427,13,27.834,13c1.786,0,3.195,0.124,3.254,0.129C31.604,13.175,32,13.607,32,14.125V17.5c0,0.553-0.448,1-1,1h-2c-1.103,0-2,0.897-2,2V24h4c0.287,0,0.56,0.123,0.75,0.338c0.19,0.216,0.278,0.502,0.243,0.786l-0.375,3C31.555,28.624,31.129,29,30.625,29H27v14.75c9.606-1.455,17-9.744,17-19.75C44,12.972,35.028,4,24,4z" fill="#FFFFFF" />
                  </svg>
                </a>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M12.5 6C8.916 6 6 8.916 6 12.5L6 35.5C6 39.084 8.916 42 12.5 42L35.5 42C39.084 42 42 39.084 42 35.5L42 12.5C42 8.916 39.084 6 35.5 6L12.5 6 z M 13.828125 14L20.265625 14L25.123047 20.943359L31.136719 14L33.136719 14L26.025391 22.234375L34.257812 34L27.820312 34L22.470703 26.351562L15.865234 34L13.822266 34L21.564453 25.056641L13.828125 14 z M 16.935547 15.695312L28.587891 32.304688L31.150391 32.304688L19.498047 15.695312L16.935547 15.695312 z" fill="#FFFFFF" />
                  </svg>
                </a>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M16.5 5C10.159 5 5 10.159 5 16.5L5 31.5C5 37.841 10.159 43 16.5 43L31.5 43C37.841 43 43 37.841 43 31.5L43 16.5C43 10.159 37.841 5 31.5 5L16.5 5 z M 34 12C35.105 12 36 12.895 36 14C36 15.104 35.105 16 34 16C32.895 16 32 15.104 32 14C32 12.895 32.895 12 34 12 z M 24 14C29.514 14 34 18.486 34 24C34 29.514 29.514 34 24 34C18.486 34 14 29.514 14 24C14 18.486 18.486 14 24 14 z M 24 17 A 7 7 0 1 0 24 31 A 7 7 0 1 0 24 17 z" fill="#FFFFFF" />
                  </svg>
                </a>
                
            </div>
      </div>
    </div>
      <?php endif; ?>