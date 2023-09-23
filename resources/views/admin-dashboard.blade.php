<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/m-01/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/m-01/dataTables.bootstrap5.min.css" />
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
    <link rel="stylesheet" href="../css/m-01/style.css" />
    <title>Dashboard</title>
</head>
<body>
<!-- DASHBOARD -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                        <i class="bi bi-person-fill"></i> User0001
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-3" style="min-width:350px;">
                        <li>
                            <span class="p-2 text-muted">Administrateur</span>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Retour au site</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- MENU LEFT -->
<div
    class="offcanvas offcanvas-start sidebar-nav bg-dark"
    tabindex="-1"
    id="sidebar"
>
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark navbar-nav">
            <!-- Core section -->
            <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mt-2">
                    Core
                </div>
            </li>
            <!-- Menu Core -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#gestion" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                    <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Gestion</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="gestion">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Utilisateurs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Droits</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Menu Administration -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#admin" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                    <span class="me-2">
                      <!-- Icon menu -->
                        <!-- <i class="bi bi-person-circle"></i> -->
                    </span>
                    <!-- Titre menu -->
                    <span>Administration</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                      <span class="right-icon">
                        <i class="bi bi-chevron-down"></i>
                      </span>
                    </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="admin">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Serveur</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Interface section -->
            <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mt-2">
                    Interface
                </div>
            </li>
            <!-- Menu Pages -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#pages" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                    <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Pages</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="pages">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Main Page</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Template Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Menu Cours -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#course" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                     <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Cours</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                     <span class="right-icon">
                     <i class="bi bi-chevron-down"></i>
                     </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="course">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Liste des cours</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Menu Emploi -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#emploi" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                     <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
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
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Offre d'emploi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Menu Mail -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#mail" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                    <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Mail</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="mail">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Template Mail</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Menu Theme -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#theme" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                    <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Theme</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="theme">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Liste des thèmes</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Statistique section -->
            <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mt-2">
                    Statistiques
                </div>
            </li>
            <!-- Menu Donnée site -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#data-site" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                    <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Données du site</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="data-site">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Donnée en graphique</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Donnée en tableau</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Support section -->
            <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mt-2">
                    Support
                </div>
            </li>
            <!-- Menu Ticket -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#ticket" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                     <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Ticket</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                     <span class="right-icon">
                     <i class="bi bi-chevron-down"></i>
                     </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="ticket">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Liste de ticket</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Paiement section -->
            <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mt-2">
                    Paiement
                </div>
            </li>
            <!-- Menu Transaction -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#transaction" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                    <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Transaction</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="transaction">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Historique de paiement</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Configuration section -->
            <li>
                <div class="text-muted small fw-bold text-uppercase px-3 mt-2">
                    Configuration
                </div>
            </li>
            <!-- Menu Accés Administrateurs -->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#admin-access" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                <span class="me-2">
                  <!-- Icon menu -->
                    <!-- <i class="bi bi-person-circle"></i> -->
                </span>
                    <!-- Titre menu -->
                    <span>Accés Administrateurs</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="admin-access">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Mot de passe</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Menu Log du site-->
            <li>
                <!-- Lien ouverture de menu -->
                <a href="#console" class="nav-link px-3 sidebar-link collapsed" data-bs-toggle="collapse" style="color:white" >
                  <span class="me-2">
                     <!-- Icon menu -->
                      <!-- <i class="bi bi-person-circle"></i> -->
                  </span>
                    <!-- Titre menu -->
                    <span>Log du site</span>
                    <!-- Fleche menu -->
                    <span class="ms-auto">
                     <span class="right-icon">
                     <i class="bi bi-chevron-down"></i>
                     </span>
                  </span>
                </a>
                <!-- Contenu menu avec id reliant le lien d'ouverture-->
                <div class="collapse" id="console">
                    <ul class="navbar-nav ps-3">
                        <!-- Liste des elements du menu-->
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"></span>
                                <span>Console développeur</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </nav>
    </div>
</div>
<!-- DASHBOARD MAIN PAGE -->
<main class="mt-5 pt-3">

</main>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap5.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>
