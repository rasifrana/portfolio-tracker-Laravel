<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Karla&display=swap"
      rel="stylesheet"
    />
    <!-- custom css file -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title> @yield('title') - page</title>
  </head>
  <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
      <div class="container">
        <a
          class="navbar-brand text-success text-uppercase"
          href="/"
          >Stacked</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarNavAltMarkup">
          <div class="navbar-nav bg-white">
            <a class="nav-item nav-link" href=""
              >Portfolio <span class="sr-only">(current)</span></a
            >
            <a
              class="nav-item nav-link bg-white"
              href=""
              >Investments</a
            >
            <a class="nav-item nav-link bg-white" href="#saving">Save</a>
            <a class="nav-item bg-white nav-link ml-2" href="#pricing"
              >Pricing</a
            >
            <a class="nav-item bg-white nav-link ml-2" href="#footer"
              >Contact</a
            >
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Heading -->

    @section('content')
    @show

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
