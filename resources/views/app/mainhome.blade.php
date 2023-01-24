@extends('layouts.home')

@section('content')
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Z-Tech</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="{{ url('aboutus') }}">About us</a>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">Effortlessly organize and publish your content with our CMS</h1>
      <p class="lead">Z-Tech Content Management System (CMS) is a system that simplifies the process of managing, editing and publishing digital content on a website, making it easy for non-technical users to update and maintain the website without the need for manual coding or web developer assistance</p>
      <p class="lead">
        <a href="{{ url('articles') }}" class="btn btn-lg btn-secondary">Go to CMS</a>
      </p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Z-Tech</p>
      </div>
    </footer>
  </div>
@endsection
