@extends('layouts.app')

@section('page_title', 'A mon propos')

@section('content')
    <div class="row">
        <div class="col">
            <div>
                <div class="text-center">
                    <img src="{{ asset('images/about/me.jpg') }}"
                         class="img-fluid bordered mb-3 mr-3 float-md-left" />
                </div>
                <p>
                    Je me nomme Raphaël Jorel, et je suis né le 20 Juin 1993 à Brignoles (dans le Var).
                </p>
                <p>
                    Après mon Bac Scientifique spécialité Physique-Chimie, j'ai commencé mes études d'informatique, en
                    2011, à l'université de Perpignan Via Domitia. Durant les 3 années de la licence, j'ai appris en
                    grande partie la théorie derrière les concepts informatiques, et pratiqué différents langages de
                    programmation, tel Python, C / C++, PHP MySQL, Java, OCaml et même un peu d'assembleur.
                </p>
                <p>
                    En 2014, j'ai poursuivi en master Génie Logiciel à Bordeaux, la première année restant encore assez
                    théorique. La seconde année visait plus la professionalisation, par l'apprentissage de technologies
                    telles NodeJS et Angular, JavaEE, etc.. Après ce master, j'ai voulu reprendre un année d'étude en
                    spécialité Image et Son, et ainsi acquérir un second master. J'y ai notamment appris la manière de
                    générer des scènes 3D, que ce soit en <i>ray tracing</i> ou en <i>rasterization</i>, avec certains
                    algorithmes fondamentaux pour chacune des méthodes. J'ai également vu divers algorithmes autour du
                    traitement d'images, de vidéos et du son (analyse et synthèse).
                </p>
                <p>
                    Aujourd'hui, je travaille pour l'entreprise
                    <a href="https://self-and-consult.fr" target="_blank">SELF & CONSULT</a>,
                    basée à Bordeaux. Celle-ci vise à démocratiser l'accès au secteur du conseil, et le rendre plus
                    abordable aux jeunes entreprises telles les <i>start-up</i> et les TPEs.
                </p>
            </div>
            <div>
                <div class="text-center">
                    <img src="{{ asset('images/about/goat.jpg') }}"
                         class="img-fluid bordered mb-3 ml-3 float-md-right" />
                </div>
                <p>
                    Mon intérêt pour l'informatique n'est aucunement lié à ma parenté. En effet, mon père est vigneron
                    et possède une exploitation d'environ 7-8 hectares qu'il travaille en cave particulière. Ma mère et
                    mon père habitent à la campagne, non loin de Perpignan, dans un village du nom de Saint-Paul de
                    Fenouillet. J'ai pu, au cours de mes études, mettre en place et administrer un site web pour
                    l'entreprise de mon père, qui m'a permis de travailler particulièrement ce domaine de
                    l'informatique. Etant parti de zéro, je n'ai que plus apprécié les différentes évolutions techniques
                    apportées au site, et en particulier le passage au <i>framework</i> Laravel.
                </p>
            </div>
            <div>
                <div class="text-center">
                    <img src="{{ asset('images/about/brotherhood.jpg') }}"
                         class="img-fluid bordered mb-3 mr-3 float-md-left" />
                </div>
                <p>
                    Je suis l'aîné de deux soeurs, la première étant plus jeune de 19 mois et la seconde de 7 ans. Ma
                    première soeur se destine à être restauratrice de mobiliers, et la seconde en est encore au début de
                    ses études dans le supérieur. Tous les 3 issus des mêmes études générales, il est parfois assez
                    étonnant de constater la divergence de spécialisation qu'il peut y avoir au sein d'une même
                    fratrie..
                </p>
                <p>
                    Côté loisir, j'aime à pratiquer le parkour ainsi que m'adonner aux jeux vidéo de temps à autre. Je
                    joue également de la guitare et de la basse, de façon très régulière. A la guitare, je pratique
                    surtout le chant, et à la basse j'accompagne principalement le groupe de louange de mon église tous
                    les Dimanches. Il m'arrive aussi de dessiner quelque fois (voici d'ailleurs
                    <a href="{{ url('repository/#/drawings') }}">ici</a> quelques uns de mes dessins).
                </p>
            </div>
        </div>
    </div>
@endsection
