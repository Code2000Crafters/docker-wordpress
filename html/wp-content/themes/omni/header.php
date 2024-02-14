<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style sheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/styles.css">


</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="" href="#">
                <img src="../assets/images/home_banner.png" alt="" style="height: 80px; width: 100px">

            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div> -->

            <div class="d-flex align-items-center">
                <div class="px-4">
                    <a href="" class="nav-item fw-500 text-decoration-none" style="color: var(--black);">About</a>
                </div>
                <div class="px-4">
                    <a href="" class="nav-item fw-500 text-decoration-none" style="color: var(--black);">Our Solutions</a>
                </div>
                <div class="px-4">
                    <a href="" class="nav-item fw-500 text-decoration-none" style="color: var(--black);">Insights</a>
                </div>
                <div class="px-4">
                    <a href="" class="nav-item fw-500 text-decoration-none" style="color: var(--black);">Careers</a>
                </div>

                <div class="px-4">
                    <button class="nav_button py-2 px-4">Contact Us</button>
                </div>

            </div>

        </div>
    </nav>

    <main class="bg-white">