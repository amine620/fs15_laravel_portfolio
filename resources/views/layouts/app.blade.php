<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>John Doe || Home</title>
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="{{asset('fontawesome-free-5.12.1-web/css/all.min.css')}}"
    />
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="nav" id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <img src="{{asset('images/logo.svg')}}" class="nav-logo" alt="nav logo" />
          <button class="nav-btn" id="nav-btn">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <!-- nav-links -->
        <ul class="nav-links">
          <li>
            <a href="{{route('home')}}">home</a>
          </li>
          <li>
            <a href="{{route('projects')}}">projects</a>
          </li>
          <li>
            <a href="{{route('contact')}}">contact</a>
          </li>
          <li>
            <a href="{{route('dashboard.admin')}}">dashboard</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
      <div>
        <button class="close-btn" id="close-btn">
          <i class="fas fa-times"></i>
        </button>
        <!-- nav-links -->
        <ul class="sidebar-links">
          <li>
            <a href="index.html">home</a>
          </li>
          <li>
            <a href="about.html">about</a>
          </li>
          <li>
            <a href="projects.html">projects</a>
          </li>
          <li>
            <a href="contact.html">contact</a>
          </li>
        </ul>
        <!-- social icons -->
        <ul class="social-icons">
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-squarespace"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-behance"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </aside>



    @yield('content')




      <!-- footer -->
      <footer class="footer">
        <!-- social icons -->
        <ul class="social-icons">
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-squarespace"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-behance"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
  
        <p>&copy; <span id="date"></span> john doe. all rights reserved</p>
      </footer>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
  </html>
  