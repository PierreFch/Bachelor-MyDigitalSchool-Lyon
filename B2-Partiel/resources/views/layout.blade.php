<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Roman Ojuara</title>
    <link rel="icon" type="image/png" href="{{ asset('data/images/favicon.png') }}" />

    <!-- Meta -->
    <meta name="description" content="Candidat à la présidentielle 2022 de MyDigitalSchool Lyon, Roman Ojuara mettra en place de nouvelles réformes qui révolutionneront votre avenir.
    Ensemble, bâtissons l'école digitale de vos rêves.">
    <meta name="keywords" content="Roman Ojuara, Junior entreprise, Junior entreprise Lyon, Digital Day, Lyon, Président Lyon, MyDigitalSchool, MyDigitalSchool Lyon, MyDigitalSchool Rhône alpes">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/css?f[]=satoshi@300,301,400,401,500,501,700,701,900,901,1,2&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('data/css/specific.css') }}">

  </head>
  <body>
    <header>
      <div class="container">
        <div class="banner">
          <div class="logo">
              <a href="{{ route('home') }}" title="Accueil">
                <img src="{{ asset('data/images/logo-roda-BLANC.svg') }}" alt="Roman Ojuara" title="Roman Ojuara"/>
              </a>
          </div>
          <div class="burger-menu">
            <label for="toggle">
              <span></span>
              <span></span>
              <span></span>
            </label>
            <input type="checkbox" id="toggler">
          </div>
          <nav id="menu">
            <ul>
              <li><a href="{{ route('programme') }}" title="Le programme">Le programme</a></li>
              <li><a href="{{ route('actions') }}" title="Nos actions">Nos actions</a></li>
              <li><a href="{{ route('news.index') }}" title="Actualités">Actualités</a></li>
              <li class="support"><a href="{{ route('home') }}#soutien" title="Soutenir Roman Ojuara" class="button">Soutenir Roman Ojuara</a></li>
                @if(Auth::user())
                    <li><a href="{{ route('auth.logout') }}" title="Se déconnecter" class="button">Se déconnecter</a></li>
                @endif
            </ul>
          </nav>
        </div>
          </div>
      </header>

    @if (session('success'))
    <div class="container alert">
      <div class="success">
        {{ session('success') }}
    </div>
    </div>
    @endif
    @if (session('error'))
    <div class="container alert">
      <div class="error">
        {{ session('error') }}
    </div>
    </div>
    @endif

      @yield('content')

      <footer>
        <div class="container">
          <div class="top">
            <div class="content">
              <div class="logo">
                <a href="" title="Accueil">
                  <img src="{{ asset('data/images/logo-roda-BLANC.svg') }}" alt="Roman Ojuara" title="Roman Ojuara"/>
                </a>
              </div>
              <div class="social">
                <ul>
                  <li>
                    <a href="https://www.instagram.com/romanojuara2022/?hl=fr" title="Suivre Roman Ojuara sur Instagram." target="blank">
                      <img src="{{ asset('data/images/instagram.svg') }}" alt="Instagram" title="Suivre Roman Ojuara sur Instagram.">
                    </a>
                  </li>
                  <li>
                    <a href="https://vm.tiktok.com/ZML4E8TKP/" title="Suivre Roman Ojuara sur TikTok." target="blank">
                      <img src="{{ asset('data/images/tik-tok.svg') }}" alt="TikTok" title="Suivre Roman Ojuara sur TikTok.">
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/romanojuara?s=21&t=4cvkYY6L8puJSqZcBmDAnw" title="Suivre Roman Ojuara sur Twitter." target="blank">
                      <img src="{{ asset('data/images/twitter.svg') }}" alt="Twitter" title="Suivre Roman Ojuara sur Twitter.">
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/channel/UCMgUf0QoY4kaKAXh4HOcYyw" title="Suivre Roman Ojuara sur YouTube." target="blank">
                      <img src="{{ asset('data/images/youtube.svg') }}" alt="" title="Suivre Roman Ojuara sur YouTube.">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <nav>
              <ul>
                <li><a href="{{ route('mentionsLegales') }}" title="Mentions légales">Mentions légales</a></li>
                <li><a href="{{ route('politiqueConfidentialite') }}" title="Politique de confidentialité">Politique de confidentialité</a></li>
                <li><a href="{{ route('donneesPersonnelles') }}" title="Données personnelles">Données personnelles</a></li>
              </ul>
            </nav>
          </div>
          <div class="bottom text-center">
            <a href="mailto:contact@romanojuara.fr" title="Contacter l'équipe de Roman Ojuara par email">
              Nous contacter : contact@romanojuara.fr
            </a>
            <div class="credit">
              © 2022 Roman Ojuara
            </div>
          </div>
        </div>
      </footer>

      <script src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="{{ asset('data/js/script.js') }}"></script>
    </body>
</html>
