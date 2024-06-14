@extends ('layout')

@section('content')

<div class="divPage divProgramme">
    <div class="container">
        <section class="top">
            <h1>Notre programme</h1>
            <div class="description">
                L'ensemble de mon programme présidentiel est orienté en fonction des besoins de nos étudiants. <br>
                Notre souhait est de vous faire vivre les meilleures années de votre vie.
            </div>
        </section>
        <section class="list">
            <h2 class="text-center">8 mesures pour les étudiants</h2>
            <div class="content">
                <div class="promise">
                    <h3>Inclure une assistance virtuelle pour les étudiants.</h3>
                    <div class="description">
                        <p>
                            En prenant en compte le développement de l'effectif de MyDigitalSchool Lyon, une borne interactive sera mise à la disposition des étudiants. 
                            Cette assistance virtuelle vous permettra de consulter les stages ou alternances disponibles avec la possibilité de contacter l'entreprise 
                            choisie. Egalement, il vous sera possible de prendre rendez-vous avec les membres de l'équipe pédagogique, trouver la réponse à vos questions 
                            grâce à notre FAQ ou même retirer un billet de retard.
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Instaurer un distributeur de plats préparés en guise de service de restauration.</h3>
                    <div class="description">
                        <p>
                            Votre santé et vos dépenses sont notre priorité. Des bornes seront à votre disposition afin de vous proposer un service de 
                            restauration équilibré à un coût abordable.
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Renforcement du BDE : mise en place d'activités sportives extra-scolaires.</h3>
                    <div class="description">
                        <p>
                            L'association étudiante du BDE vous proposera des activités sportives, des initiés aux plus compétiteurs ! <br>
                            Ces activités ont pour objectifs de vous permettre de vous dépenser d’une autre manière et de vous dépasser physiquement, votre 
                            santé physique et mentale est notre priorité ! <br>
                            Également, il s'agit d'une occasion pour renforcer votre cohésion de groupe.
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Mise en place d'une "Digital Day".</h3>
                    <div class="description">
                        <p>
                            À l'image de la MyDigitalWeek, la Digital Day reprendra le même concept.
                            Un jour par mois, vous vous retrouverez immergé dans un nouvel univers digital, avec la venue d'intervenants spécialisés, dont 
                            le seul but est de vous transmettre leur passion.
                            De nombreux domaines, tels que la réalité virtuelle, l'initiation au pilotage de drone et bien d’autres encore, seront 
                            enfin à votre portée. Cette occasion unique vous offre 
                            l'opportunité d'élargir votre champ de compétences.
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Réaménagement du centre de formation.</h3>
                    <div class="description">
                        <p>
                            Un des points fondamentaux de notre campagne est de mettre à votre disposition un environnement de travail professionnel et confortable :
                            <ul>
                                <li>Changement de la disposition des espaces de travail pour une disposition en U des tables.</li>
                                <li>Installation d'une climatisation fonctionnelle pour garantir votre bien-être.</li>
                                <li>Installation d'un service de restauration automatique.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Déploiement d'une junior entreprise.</h3>
                    <div class="description">
                        <p>
                            Notre projet de junior entreprise est de vous offrir l'opportunité de financer le remboursement de vos années de formation à MyDigitalSchool Lyon. 
                            Cette junior entreprise :
                        </p>
                        <ul>
                            <li>
                                vous offrira une seconde chance pour éviter le rattrapage.
                            </li>
                            <li>
                                vous offrira des points supplémentaires, attribués au module concerné.
                            </li>
                            <li>
                                vous permettra d'acquérir une expérience professionnelle certifiée et reconnue.
                            </li>
                            <li>
                                vous offrira l'accès à un réseau professionnel préconstruit.
                            </li>
                        </ul>
                        <p>
                            Cette junior entreprise est donc la chance d'avoir enfin confiance en vous et en vos compétences.
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Gestion d'un projet réel dans le cadre du financement du BDE.</h3>
                    <div class="description">
                        <p>
                            Dans le but de permettre à l'association des étudiants du BDE de vous proposer bon nombre d'activités variées, un projet pour un client réel 
                            sera suivi par les étudiants sur une période définie de six mois. Ce projet, à visée pédagogique, vous permettra de développer vos 
                            compétences et de les mettre au profit de l'association du BDE afin de vous permettre de bénéficier de riches activités.
                        </p>
                    </div>
                </div>
                <div class="promise">
                    <h3>Semaine d'intégration étudiants et formateurs.</h3>
                    <div class="desccription">
                        <p>
                            Afin d'intégrer les étudiants au sein de ce nouvel univers digital nécessitant innovation et cohésion, une semaine d'intégration aura lieu la 
                            première semaine de rentrée. Semaine parsemée de surprises ainsi que d'activités ludiques et interactives, vos talents seront mis en éveil.
                            Une intégration est prévue pour les étudiants mais aussi pour les formateurs. La cohésion entre les différents intervenants est le mot 
                            d'ordre pour garantir une formation qualitative à nos étudiants.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bottom text-center">
                <a href="{{ asset('data/pdf/programme-roman-ojuara.pdf') }}" title="Télécharger le programme" class="button blue">Télécharger le programme</a>
            </div>
        </section>
    </div>
</div>

@endsection