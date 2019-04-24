@extends('layouts.app')

@section('page_title', 'Réalisations')

@section('content')
    <div class="row">
        <div class="col">
            <p>
                Ci-dessous sont listés les quelques sites que j'ai produit pour des entreprises ou associations, dont je
                peux me prévaloir comme exemples de mes compétences dans le domaine du web.
            </p>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col">
            <a href="https://domainejorel.fr" target="_blank">
                <h3 class="title-custom text-center mb-4">Domaine Jorel</h3>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md-12">
            <img src="{{ asset('images/achievements/domaine-jorel.jpg') }}"
                 class="img-fluid bordered mb-2 mx-auto d-block" />

            <table class="table table-custom">
                <tr>
                    <th>Système</th>
                    <td>Laravel 5</td>
                </tr>
                <tr>
                    <th>Style</th>
                    <td>Bootstrap 3 personnalisé</td>
                </tr>
                <tr>
                    <th>Hébergement</th>
                    <td>OVH, serveur privé + nom de domaine séparé</td>
                </tr>
            </table>
        </div>
        <div class="col-lg col-md-12">
            <p>
                Le site web de l'entreprise viticole de mon père, et également le premier site que j'ai réalisé, au
                départ, de toutes pièces pour me former à la programmation web.
            </p>
            <p>
                Débuté <i>from scratch</i> (comme on dit dans le milieu) et amélioré successivement au cours des années
                depuis 2012, ce site a subi plusieurs refontes majeures, notamment deux graphiques, la dernière lui
                permettant d'être <i>responsive design</i> et plus présentable de manière générale.
            </p>
            <p>
                Ce site n'est pas à but commercial, il n'est là que pour présenter l'entreprise et les vins produits,
                ainsi que certaines informations relatives à l'actualité.
            </p>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col">
            <a href="https://www.self-innov.fr" target="_blank">
                <h3 class="title-custom text-center mb-4">SELF & INNOV</h3>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md-12">
            <img src="{{ asset('images/achievements/self-innov.jpg') }}"
                 class="img-fluid bordered mb-2 mx-auto d-block" />

            <table class="table table-custom">
                <tr>
                    <th>Système</th>
                    <td>Laravel 5</td>
                </tr>
                <tr>
                    <th>Style</th>
                    <td>Unify (thème basé sur Bootstrap)</td>
                </tr>
                <tr>
                    <th>Hébergement</th>
                    <td>OVH, serveur privé + nom de domaine séparé</td>
                </tr>
            </table>
        </div>
        <div class="col-lg col-md-12">
            <p>
                Il s'agit de la première application professionnelle que j'ai développé, et que je continue à faire
                évoluer dans le cadre de mon travail au sein de l'entreprise
                <a href="http://self-consult.fr" target="_blank">SELF & CONSULT</a>.
            </p>
            <p>
                Je ne me suis occupé que de la partie fonctionnelle de l'application, ainsi le site de présentation et
                le style ne sont de mon chef, mais de celui de mon directeur (CTO)
                <a href="https://www.linkedin.com/in/simoncreuchet" target="_blank">Simon Creuchet</a>.
            </p>
            <p>
                L'application permet principalement de faire des diagnostics d'éligibilité aux Crédits d'Impôt Recherche
                et Innovation, ainsi que de calculer les montants qu'une entreprise peut toucher en fonction de son
                personnel, les rémunérations et de nombreux facteurs importants à prendre en compte. C'est l'associé de
                l'entreprise
                <a href="https://www.linkedin.com/in/amandineperroux/" target="_blank">Amandine Perroux</a>
                qui s'est chargée de toute la partie métier.
            </p>
            <p>
                Cette application s'inscrit comme la première plateforme d'une longue lignée, l'ambition du président
                <a href="https://www.linkedin.com/in/matthieubacquin/" target="_blank">Matthieu Bacquin</a>
                étant de toucher tous les secteurs du conseil avec comme idée de permettre aux entreprises de réduire
                leurs dépenses en <i>consulting</i> grâce à des outils en ligne et de l'expertise téléphonique.
            </p>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col">
            <a href="https://fery-consulting.com" target="_blank">
                <h3 class="title-custom text-center mb-4">Pardongan</h3>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md-12">
            <img src="{{ asset('images/achievements/fery-consulting.jpg') }}"
                 class="img-fluid bordered mb-2 mx-auto d-block" />

            <table class="table table-custom">
                <tr>
                    <th>Système</th>
                    <td>WordPress</td>
                </tr>
                <tr>
                    <th>Style</th>
                    <td>Thème Allegiant</td>
                </tr>
                <tr>
                    <th>Hébergement</th>
                    <td>OVH, hébergement avec nom de domaine associé</td>
                </tr>
            </table>
        </div>
        <div class="col-lg col-md-12">
            <p>
                M. Asido Fery, soucieux de faire connaître et améliorer le dialogue entre les planteurs de café de
                Sumatra et les vendeurs en France, a décidé de lancer son entreprise unipersonnelle pour arriver à ses
                fins.
            </p>
            <p>
                Ne se limitant pas qu'à cela, le site présente différents produits et informations reliées pour que l'on
                puisse de faire une idée relativement juste de la situation de l'île de Sumatra, et de son besoin de
                travailler avec des exportateurs ne cherchant pas que leurs propres intérêts.
            </p>
        </div>
    </div>
@endsection
