@extends('layouts.app')



@section('content')

<header class="projects-hero">
    <!-- section title -->
    <div class="section-title">
      <h1>my projects</h1>
      <div class="underline"></div>
    </div>
    <!--end of section title -->
  </header>
  <section class="section">
    <div class="section-center projects-page-center">
      <!-- single project -->
      <article class="single-project">
        <div class="project-container">
          <img src="{{asset('images/project-1.jpeg')}}" alt="single project" />
          <a href="https://www.johnsmilga.com" class="project-icon">
            <i class="fas fa-home"></i>
          </a>
        </div>
        <div class="project-details">
          <h4>project name</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
            eveniet amet odit aperiam, provident cum possimus sapiente minus
            quos! Ipsum?
          </p>
          <div class="project-footer">
            <span>
              <i class="fab fa-github"></i>
            </span>
            <a href="https://www.github.com">source code</a>
          </div>
        </div>
      </article>


      <article class="single-project">
        <div class="project-container">
          <img src="{{asset('images/project-1.jpeg')}}" alt="single project" />
          <a href="https://www.johnsmilga.com" class="project-icon">
            <i class="fas fa-home"></i>
          </a>
        </div>
        <div class="project-details">
          <h4>project name</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
            eveniet amet odit aperiam, provident cum possimus sapiente minus
            quos! Ipsum?
          </p>
          <div class="project-footer">
            <span>
              <i class="fab fa-github"></i>
            </span>
            <a href="https://www.github.com">source code</a>
          </div>
        </div>
      </article>


      <article class="single-project">
        <div class="project-container">
          <img src="{{asset('images/project-1.jpeg')}}" alt="single project" />
          <a href="https://www.johnsmilga.com" class="project-icon">
            <i class="fas fa-home"></i>
          </a>
        </div>
        <div class="project-details">
          <h4>project name</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
            eveniet amet odit aperiam, provident cum possimus sapiente minus
            quos! Ipsum?
          </p>
          <div class="project-footer">
            <span>
              <i class="fab fa-github"></i>
            </span>
            <a href="https://www.github.com">source code</a>
          </div>
        </div>
      </article>



      <article class="single-project">
        <div class="project-container">
          <img src="{{asset('images/project-1.jpeg')}}" alt="single project" />
          <a href="https://www.johnsmilga.com" class="project-icon">
            <i class="fas fa-home"></i>
          </a>
        </div>
        <div class="project-details">
          <h4>project name</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
            eveniet amet odit aperiam, provident cum possimus sapiente minus
            quos! Ipsum?
          </p>
          <div class="project-footer">
            <span>
              <i class="fab fa-github"></i>
            </span>
            <a href="https://www.github.com">source code</a>
          </div>
        </div>
      </article>
      <!-- end of single project -->
    </div>
  </section>
  <!-- ############## -->
  <!-- ############## -->
  <!-- ############## -->
  <!-- ############## -->

@endsection

