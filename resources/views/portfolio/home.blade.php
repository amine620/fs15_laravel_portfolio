@extends('layouts.app')
@section('content')
    <!-- header -->
    <header class="hero">
        <div class="section-center hero-center">
          <article class="hero-info">
            <div class="underline"></div>
            <h1>i'm john</h1>
            <h4>freelance web & mobile UI/UX Designer</h4>
            <a href="contact.html" class="btn hero-btn">hire me</a>
            <!-- social icons -->
            <ul class="social-icons hero-icons">
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
          </article>
          <article class="hero-img">
            <img src="{{asset('images/hero-img.jpeg')}}" class="hero-photo" alt="john doe" />
          </article>
        </div>
      </header>
      <!-- end of header -->
      <!-- about -->
      <section class="section about">
        <div class="section-center about-center">
          <!-- about img -->
          <article class="about-img">
            <img
              src="{{asset('images/about-img.jpeg')}}"
              class="hero-photo"
              alt="about img"
            />
          </article>
          <!-- about info -->
          <article class="about-info">
            <!-- section title -->
            <div class="section-title about-title">
              <h2>about</h2>
              <div class="underline"></div>
            </div>
            <!--end of section title -->
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quae,
              eum maiores est enim earum fugiat aspernatur. Fuga qui iste amet
              reiciendis possimus rerum omnis recusandae molestias error
              consequuntur, doloribus inventore reprehenderit officiis. Dolore
              aut, repellendus eius fugiat numquam cumque.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quae,
              eum maiores est enim earum fugiat aspernatur. Fuga qui iste amet
              reiciendis possimus rerum omnis recusandae molestias error
              consequuntur, doloribus inventore reprehenderit officiis. Dolore
              aut, repellendus eius fugiat numquam cumque.
            </p>
            <a href="about.html" class="btn">about me</a>
          </article>
        </div>
      </section>
      <!-- end of about -->
@endsection