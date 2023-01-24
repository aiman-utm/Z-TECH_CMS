@extends('layouts.about')

@section('content')
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
<header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Z-Tech</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="{{ route('root') }}">Home</a>
        <a class="nav-link active" href="{{ url('aboutus') }}">About us</a>
      </nav>
    </div>
  </header>
</div>

<br><br>

  <main role="main">
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ asset('i\aboutimg\ELYIANA.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Sayang Elyiana</h2>
          <p>My name is Sayang Elyiana Amiera binti Helmey. I am 3rd year UTM student who major in Bachelor of Computer Science (Bioinformatics).
            I am the Scrum Master for the Z-Tech Content Management System (CMS). I always keep track of group progress and be motivated to ensure 
            Z-tech achieve the goals.
          </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Chang Ming Xuan</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ asset('i\aboutimg\AIMAN.jpg') }}" alt="Muhammad Aiman Bin Abdul Razak" width="140" height="140">
          <h2>Muhammad Aiman</h2>
          <p>My full name is Muhammad Aiman Bin Abdul Razak. I am a 3rd year student of UTM, majoring in Bachelor of Computer Science (Bioinformatics).
            I am a developer for the Z-Tech Content Management System (CMS).
            Creating a fully fledged system has increased my understanding of the inner workings of a system in general.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 center">
          <img class="rounded-circle" src="{{ asset('i\aboutimg\JIAYEE.jpg') }}" alt="Lee Jia Yee" width="140" height="140">
          <h2>Lee Jia Yee</h2>
          <p>My name is Lee Jia Yee. I am a UTM 3rd year Bioinformatics student. As a developer for Z=Tech Content Management System (CMS), 
            I usually assist in developing system and publish our system development codings to internet via cPANEL.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Who are<span class="text-muted"> we?</span></h2>
          <p class="lead">We are 3rd year students of Universiti Teknologi Malaysia (UTM), majoring in Bachelor of Computer Science (Bioinformatics).
                          Having Application Development course gives us the opportunity to
                          develop an application that is user-friendly and interactive for all users in every generation.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('i\aboutimg\UTM.jpg') }}" alt="Universiti Teknologi Malaysia (UTM)">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">What do we<span class="text-muted"> do?</span></h2>
          <p class="lead">We provide users with a system that can manage information in an orderly manner without needing to learn the fundamentals of coding.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('i\aboutimg\STUDENT.jpg') }}" alt="Student doing coding">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">What does this CMS<span class="text-muted"> offer?</span></h2>
          <p class="lead">This CMS offer a user-friendly interface, the ability to organize and categorize content, and tools for editing and formatting text.
                          More specifically, we are able to categorize articles to their categories, as well as create pages with just the touch of a button.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('i\aboutimg\CMS.jpg') }}" alt="Content Management System (CMS)">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class="container" style="overflow: hidden">
      <p class="float-right"><a href="{{ route('root') }}">Back to Home</a></p>
      <p>&copy; 2023 Z-Tech</p>
    </footer>
  </main>
@endsection
