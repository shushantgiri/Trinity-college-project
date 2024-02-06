
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="main.css" />
    <title>Shushant Giri</title>
  </head>
  <body>
    <nav>
      <div class="nav__content">
        <div class="logo"><a href="#">MSG</a></div>
        <label for="check" class="checkbox">
          <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Resume</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="logout">
            <a href="#" onclick="logout()">
              <i class="ri-logout-box-r-line"></i> Logout
            </a>
          </div>
      </div>
    </nav>
    <section class="section">
      <div class="section__container">
        <div class="content">
          <p class="subtitle">HELLO</p>
          <h1 class="title">
            I'm <span>Shushant Giri<br />a</span> Web developer & Photographer
          </h1>
          <p class="description">
             Welcome to Shushant Giri's Creative Hub! I'm <b>Shushant Giri </b>, the creative force behind Shushant Photography and Web Development. Delve into captivating moments frozen in time through my lens or explore the seamless fusion of art and technology in web development. Your presence is an invitation to join me on a brief yet vibrant creative journey. Let's explore, inspire, and create together! 


          </p>
          <div class="action__btns">
            <button class="hire__me">Hire Me</button>
            <button class="portfolio">Portfolio</button>
          </div>
        </div>
        <div class="image">
          <img src="img/IMG_0749-01-Photoroom-removebg-preview.png" alt="profile" />
        </div>
      </div>
    </section>
    <script>
        function logout() {
          // Redirect to index.html immediately
          window.location.href = 'index.php';
        }
      </script>
  </body>
</html>
