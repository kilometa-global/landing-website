<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons -->
  <link rel="icon" href="img/logo/logo.ico">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/libs/flickity/dist/flickity.min.css">
  <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
  <link rel="stylesheet" href="assets/libs/simplebar/dist/simplebar.min.css">
  <link rel="stylesheet" href="assets/libs/flickity-fade/flickity-fade.css">
  <link rel="stylesheet" href="assets/libs/swiper/swiper.min.css">
  <link rel="stylesheet" href="assets/libs/wow/wow.css">
  <script src="assets/libs/wow/wow.js"></script>
  <link rel="stylesheet" href="assets/fonts/feather/feather.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


  <title>Kilometa</title>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="71">
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCAOphdBX2dJcwHYzgy7dB3qjYI0FjUeMs",
    authDomain: "kilometa-global.firebaseapp.com",
    databaseURL: "https://kilometa-global-default-rtdb.firebaseio.com",
    projectId: "kilometa-global",
    storageBucket: "kilometa-global.appspot.com",
    messagingSenderId: "693476810676",
    appId: "1:693476810676:web:9ad72bf5bee41f459bdce1",
    measurementId: "G-KMMVFS0Y1T"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-xl navbar-light fixed-top py-2 border-bottom" style="background-color: #fffffff7;">
    <div class="container-fluid">

      <!-- Brand -->
      <a class="navbar-brand order-1 order-md-1" href="index.php">
        <img src="img/logo/logo.png" alt="Logo" style="max-width: 200px;">
      </a>

      <!-- <a class="navbar-brand order-3 order-md-2">
        <marquee>
          Coming Soon Fall 2021. Now Accepting Driver Applications
        </marquee>
      </a> -->

      <!-- Toggler -->
      <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarLandingCollapse" aria-controls="navbarLandingCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse order-md-3" id="navbarLandingCollapse">

        <ul class="navbar-nav nav-divided ml-auto">
          <li class="nav-item dn-1">
            <a class="nav-link active" href="index.php">Rider</a>
          </li>
          <li class="nav-item dn-2">
            <a class="nav-link" href="index.php">Rider</a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link driver" data-toggle="dropdown" href="#">Driver</a>

            <div class="dropdown-menu">
              <div class="card card-lg">
                <div class="card-body">
                  <ul class="list-styled font-size-sm">
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="driver.php">
                        Apply to Drive
                      </a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="driver-how-driving-with-us-works.php">
                        How it works
                      </a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="driver-requirements.php">
                        Driver Requirements
                      </a>
                    </li>
                    <!-- <li class="list-styled-item">
                      <a class="list-styled-link" href="dmv.php">
                        DMV check
                      </a>
                    </li> -->
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="safety.php">
                        Safety
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link areas" href="service-areas.php">Service&nbsp;Areas</a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">Sign&nbsp;up</a>

            <div class="dropdown-menu">
              <div class="card card-lg">
                <div class="card-body">
                  <ul class="list-styled font-size-sm">

                    <li class="list-styled-item">
                      <a class="list-styled-link" href="driver.php">
                        Apply to Drive
                      </a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index.php">
                        Sign up to ride
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </nav>
