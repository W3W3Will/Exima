@php
$site_name = get_setting('_site_name');
$site_description = get_setting('_site_desc');
$site_owner = get_setting('_site_owner');

$entry = get_section('Funny');
$entry1 = get_section('Interesting');
$entry2 = get_section1('Python');
$entry3 = get_section1('Publishing Paper for IEEE Journal');

$instagram = get_setting('_instagram');
$youtube = get_setting('_line');

@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $site_name }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{ $site_name }}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>




    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">

        <img class="masthead-avatar mb-5" src="{{ Storage::url($entry->picture) }}" alt="..." />

        <h1 class="masthead-heading text-uppercase mb-0">{{ $entry->title }}</h1>

        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>

        <p class="masthead-subheading font-weight-light mb-0">{{strip_tags($entry->content )}}</p>
      </div>
    </header>


    <section class="page-section portfolio" id="partner">
        <<div class="container d-flex align-items-center flex-column">

            <img class="masthead-avatar mb-5" src="{{ Storage::url($entry1->picture) }}" alt="..." />

            <h1 class="masthead-heading text-uppercase mb-0">{{ $entry1->title }}</h1>

            <div class="divider-custom divider-light">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
            </div>


          </div>
      </section>

      <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

          <img class="masthead-avatar mb-5" src="{{ Storage::url($entry2->picture) }}" alt="..." />

          <h1 class="masthead-heading text-uppercase mb-0">{{ $entry2->title }}</h1>

          <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
          </div>

          <p class="masthead-subheading font-weight-light mb-0">{{strip_tags($entry2->content )}}</p>
        </div>
      </header>


    <section class="page-section portfolio" id="partner">
        <<div class="container d-flex align-items-center flex-column">

            <img class="masthead-avatar mb-5" src="{{ Storage::url($entry3->picture) }}" alt="..." />

            <h1 class="masthead-heading text-uppercase mb-0">{{ $entry3->title }}</h1>

            <div class="divider-custom divider-light">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
            </div>


          </div>
      </section>



    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>

        <div class="row">
          <div class="col-lg-3 ms-auto text-center"><img src="assets/img/Profile-Pic-Circle-Grey-Large-1.png" class="w-75" /></div>
          <div class="col-lg-5 me-auto lead">
            <p>Welcome to my digital workspace! I'm Paul, a freelance developer specializing in Python and C++. With a passion for crafting elegant and efficient solutions, I'm here to turn your ideas into reality.</p>
            <p>As a freelance developer, I am committed to delivering top-notch, tailor-made solutions that align with your unique requirements. With a keen eye for detail and a commitment to staying on the cutting edge of industry trends, I am dedicated to providing code that is not only functional but also future-proof.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Site Owner</h4>
            <p class="lead mb-0">
              {{ $site_owner }}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $youtube }}"><i class="fab fa-fw fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $instagram }}"><i class="fab fa-fw fa-instagram"></i></a>
          </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About {{ $site_name }}</h4>
            <p class="lead mb-0">
              {{$site_description}}
              .
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; {{ $site_name }} 2023</small></div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
