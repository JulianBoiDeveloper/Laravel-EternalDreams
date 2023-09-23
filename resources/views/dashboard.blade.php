<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/m-01/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/m-01/dataTables.bootstrap5.min.css" />
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
    <link rel="stylesheet" href="css/m-01/style.css" />
    <title>Dashboard</title>
    <style type="text/css">
        .bg-purple{
            background: mediumpurple;
        }
    </style>
</head>
<body>
<!-- DASHBOARD -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#4a05cb">
    <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sidebar"
            aria-controls="offcanvasExample"
        >
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
            class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
            href="#"
        >Eternal Dreams</a
        >
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#topNavBar"
            aria-controls="topNavBar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
            <div class="d-flex ms-auto m-3 my-lg-0">
            </div>
            <ul class="navbar-nav">
                <!-- MENU PROFIL -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle ms-2"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="bi bi-person-fill"></i> {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-3" style="min-width:350px;">
                        <li>
                            @if(Auth::user()->role == 'admin')
                                <a href="/admin/dashboard"><span class="p-2 text-muted">Administrateur</span></a>
                            @else
                                <span class="p-2 text-muted">Membres</span>
                            @endif


                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Retour au site</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- MENU LEFT -->
<div
    class="offcanvas offcanvas-start sidebar-nav"
    tabindex="-1"
    id="sidebar" style="background-color:#4a05cb"
>
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark navbar-nav">
            <li>
                <span class="me-2">
                 </span>
            </li>
            <li>
                <!-- Accueil -->
                <a href="#main" class="nav-link px-3 sidebar-link text-white">
                     <span class="me-2">
                     </span>
                    <span >Accueil</span>
                </a>
              </span>
            </li>
            <!-- Mon Compte -->
            <li>
                <a href="#mon-compte" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                    <span class="me-2">
                    </span>
                    <!-- Titre menu -->
                    <span>Mon Compte</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                      <span class="right-icon">
                        <i class="bi bi-chevron-down"></i>
                      </span>
                    </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="mon-compte">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#profil" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Paramètres</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Boutique -->
            <li>
                <a href="#boutique" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                    <span class="me-2">
                    </span>
                    <!-- Titre menu -->
                    <span>Boutique</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                      <span class="right-icon">
                        <i class="bi bi-chevron-down"></i>
                      </span>
                    </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="boutique">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#abonnements" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Abonnements</span>
                            </a>
                        </li>
                        <li>
                            <a href="#formules" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Formules</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Emploi -->
            <li>
                <a href="#emploi" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                    <span class="me-2">
                    </span>
                    <!-- Titre menu -->
                    <span>Emploi</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                      <span class="right-icon">
                        <i class="bi bi-chevron-down"></i>
                      </span>
                    </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="emploi">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#offre-jobs" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Offres d'emploi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Support -->
            <li>
                <a href="#support" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                    <span class="me-2">
                    </span>
                    <!-- Titre menu -->
                    <span>Support</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                      <span class="right-icon">
                        <i class="bi bi-chevron-down"></i>
                      </span>
                    </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="support">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#soumettre" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Demande d'assistance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#suivi" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Suivi des tickets en cours</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </nav>
    </div>
</div>
<style>
    .card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: #0078d4;
        font-size: 1.5em;
        margin-bottom: 1rem;
    }

    .card-text {
        font-size: 1.2em;
        color: #333;
    }
</style>
<!-- DASHBOARD MAIN PAGE -->
<main class="mt-5 pt-3">
    <!-- Section Accueil -->
    <section id="main">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nombre de Visiteurs</h5>
                            <p class="card-text">Aujourd'hui : 250</p>
                            <p class="card-text">Hier : 300</p>
                            <p class="card-text">Total : 5000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Autre Statistique</h5>
                            <p class="card-text">Stat 1 : 100</p>
                            <p class="card-text">Stat 2 : 200</p>
                            <p class="card-text">Stat 3 : 300</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Mon Compte -->
    <section id="profil">
        PROFIL
    </section>
    <section id="settings">
       SETTINGS
    </section>

    <!-- Section Boutique -->
    <section id="abonnements">
        ABO
    </section>
    <section id="formules">
       FORMULE
    </section>

    <!-- Section Emploi -->
    <section id="offre-jobs">
        JOBS
    </section>

    <!-- Section Support -->
    <section id="soumettre">
       ASSIST
    </section>
    <section id="suivi">
        <!-- Contenu pour la section Suivi des tickets en cours -->
        SUIVI
    </section>
</main>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap5.min.js"></script>
<script src="./js/script.js"></script>
<script>
    window.location.href = window.location.href.split('#')[0] + '#main';
    document.addEventListener('DOMContentLoaded', function() {
        const liensSousMenu = document.querySelectorAll('.navbar-nav .collapse a');

        function showSection(targetId) {
            const sections = document.querySelectorAll('main section');
            sections.forEach(section => {
                if (section.id === targetId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }

        function getTargetIdFromLink(link) {
            const targetId = link.getAttribute('href').split('#')[1];
            return targetId ? targetId : null;
        }

        liensSousMenu.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const targetId = getTargetIdFromLink(this);
                if (targetId) {
                    showSection(targetId);
                    window.history.pushState({}, '', `#${targetId}`);
                }
            });
        });

        // Afficher la section selon l'ID dans l'URL
        const currentHash = window.location.hash.substring(1);
        if (currentHash) {
            showSection(currentHash);
        }

        // Ajout de l'événement pour le lien d'accueil
        const lienAccueil = document.querySelector('a[href="#main"]');
        lienAccueil.addEventListener('click', function(event) {
            event.preventDefault();
            showSection('main');
            window.history.pushState({}, '', '#main');
        });
    });

















</script>
</body>
</html>
