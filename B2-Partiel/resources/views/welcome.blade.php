@extends ('layout')

@section('content')

<div class="divPage divWelcome">
  <section class="presentation">
    <div class="container">
      <h1>“Prendre parti de votre avenir.”</h1>
      <div class="support">
        <div class="content">
            <div class="left">
                <h2>Soutenez la candidature de <br> Roman Ojuara</h2>
                <p>
                    Candidat à la présidentielle 2022 de MyDigitalSchool Lyon, Roman Ojuara mettra en place de nouvelles
                    réformes qui révolutionneront votre avenir. <br>
                    Ensemble, bâtissons l'école digitale de vos rêves.
                </p>
                <div class="bottom">
                  <a href="#soutien" title="Roman Ojuara">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 35.9 35.9" style="enable-background:new 0 0 35.9 35.9;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;}
                      .st1{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
                    </style>
                    <g>
                      <path class="st0" d="M18,1.4L18,1.4c-6.6,0-11.9,5.3-11.9,11.9v9.3c0,6.6,5.3,11.9,11.9,11.9h0c6.6,0,11.9-5.3,11.9-11.9v-9.3
                        C29.8,6.7,24.5,1.4,18,1.4z"/>
                      <line class="st1" x1="18.1" y1="10.5" x2="18.1" y2="16.2"/>
                    </g>
                    </svg>
                    <span>Soutenir</span>
                  </a>
              </div>
            </div>
            <div class="right">
                <img src="{{ asset('data/images/ROMAIN.webp') }}" alt="Roman Ojuara" title="Roman Ojuara"/>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="values">
    <div class="container">
      <h2 class="line">Nos valeurs</h2>
      <div class="list">
        <div class="card">
          <h3>Transmission</h3>
          <div class="description">
            Vous transmettre aujourd'hui le savoir de demain. Notre promesse est de vous offrir une formation professionnelle et 
            professionnalisante  en lien avec les demandes du marché de l'emploi.
          </div>
        </div>
        <div class="card">
          <h3>Projection</h3>
          <div class="description">
            Nous avons à cœur de nous projeter au sein de votre avenir professionnel. Nous orientons votre accompagnement selon
            vos souhaits d'orientation.
          </div>
        </div>
        <div class="card">
          <h3>Innovation</h3>
          <div class="description">
            Innover de nouvelles propositions et solutions pour votre pédagogie, c'est vous garantir une insertion professionnelle fiable et durable.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pitch">
    <div class="container">
      <h2 class="line">Au service des étudiants</h2>
      <div class="description">
        <p>
          Mes Chers Étudiants.
        </p>
        <p>
          Aujourd’hui, l’heure est venue de penser à vous !
        </p>
        <p>
          On vous a répété que c’était de votre faute, que vous étiez trop exigeant.
          Mais derrière l’exigence se cache la volonté de bien faire, de réussir, d’accomplir sa mission.
          On vous a répété que c’était de votre faute, que vous deviez vous en contenter.
          Mais c’est maintenant vous qui avez les cartes en main !
        </p>
        <p>
          Aujourd’hui, je me présente à cette campagne pour vous, pour vous soutenir, pour vous défendre, pour que vous puissiez accomplir avec succès la mission qui vous 
          incombe : obtenir votre diplôme !
          L’objectif de ma campagne est essentiellement basé sur votre bien-être. <br>
          En votant pour moi, vous voterez pour le MyDigitalSchool du futur.
        </p>
        <p>
          Le programme que je défends a pour vocation de transmettre des compétences solides, de vous projeter au sein d'un avenir radieux et 
          également d'innover en mettant en œuvre des solutions efficaces pour vous garantir une pédagogie sans faille. 
        </p>
        <p>
          Mais ne vous méprenez pas.
        </p>
        <p>
          Je ne suis pas politologue, je ne suis pas technocrate, je ne suis pas bureaucrate, et encore moins idéologue, je suis Roman Ojuara, le candidat qui se soucis de votre avenir.
        </p>
        <p>
          Ensemble, bâtissons l’école digitale de vos rêves.
        </p>
        <p>
          Car votre avenir, c’est notre préoccupation.
        </p>
        <div class="text-center">
          <img src="{{ asset('data/images/logo-roda.svg') }}" alt="Roman Ojuara" title="Roman Ojuara"/>
        </div>
      </div>
    </div>
  </section>
  <section id="soutien" class="support">
    <div class="container">
      <div class="support-form">
        <div class="picture">
          <img src="{{ asset('data/images/ROMAIN.webp') }}" alt="Roman Ojuara" title="Roman Ojuara"/>
          <div class="overlay"></div>
        </div>
          <h2>Soutenez la candidature de <br> Roman Ojuara</h2>
          <p class="light">Elections dans :</p>
          <div id="countdown"></div>
          <form action="https://online.us14.list-manage.com/subscribe/post?u=76724c603fc3bf4cb0f1ded98&amp;id=a6d416c7ed" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="input-field">
              <label for="mce-LNAME">Nom *</label>
              <input type="text" value="" name="LNAME" class="required" id="LNAME">
            </div>
            <div class="input-field">
              <label for="FNAME">Prénom *</label>
              <input type="text" value="" name="FNAME" class="required" id="FNAME">
            </div>
            <div class="input-field">
              <label for="PHONE">Numéro de téléphone</label>
              <input type="text" name="PHONE" class="" value="" id="PHONE">
            </div>
            <div class="input-field">
              <label for="EMAIL">Adresse mail *</span>
            </label>
              <input type="email" value="" name="EMAIL" class="required email" id="EMAIL">
            </div> 
            <div class="rgpd">
              <p>En soumettant ce formulaire, vous consentez à ce que vos données personnelles soient exploitées dans le but de vous recontacter.</p>
            </div>
            <div class="submit">
              <input type="submit" name="submit" id="submit" value="Soutenir Roman Ojuara">
            </div>
            <div id="mce-responses" class="clear foot">
              <div class="response alert error" id="mce-error-response" style="display:none"></div>
              <div class="response alert success" id="mce-success-response" style="display:none"></div>
            </div>
          </form>
      </div>
    </div>
  </section>
  <section class="actualites">
    <div class="container">
        <h2 class="line">Nos dernières actualités</h2>
        <div class="list">
            @foreach($news as $new)
                <div class="card">
                    <h3>{{ $new->title }}</h3>
                    <div class="description">
                        <p>{{ $new->short_description }}</p>
                    </div>
                    <a href="{{ route('news.show', $new) }}" title="En savoir plus sur {{ $new->title }}" class="showmore"></a>
                </div>
            @endforeach
        </div>
        <div class="bottom text-center">
          <a href="{{ route('news.index') }}" title="Voir toutes les actualités" class="button blue">Toutes les actualités</a>
        </div>
    </div>
  </section>
</div>







@endsection




