<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dandelion - Home</title>
        <link rel="stylesheet" href="../assets/css/style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/brands.min.js" integrity="sha512-1e+6G7fuQ5RdPcZcRTnR3++VY2mjeh0+zFdrD580Ell/XcUw/DQLgad5XSCX+y2p/dmJwboZYBPoiNn77YAL5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
<body class="body">
    <main class="dandelion-full-space">
        <section class="dandelion-template">
            <article class="logo-dandelion">
                <div class="dandelion-logo__icon"><img src="../assets/imgs/dandelion_icon.png" alt="Logo Dandelion"></div>
                <div class="comunity">
                    <img src="../assets/imgs/comunidade01.png" alt="Comunidade" class="img-comunity selected">    
                </div>

                <div class="comunity">
                    <img src="../assets/imgs/comunidade02.png" alt="Comunidade" class="img-comunity">    
                </div>

                <button type="button" class="add-comunity">
                    <i class="fa-solid fa-circle-plus"></i>
                </button>
            </article>

            <sidenav class="sidenav-dandelion">
                <div class="comunity-chosen">
                    <img src="../assets/imgs/comunidade01.png" alt="">
                    <span>CMD São Marcos</span>
                </div>

                <ul class="options-categories">
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-bars"></i>
                            <span>Não Lidos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-comment-dots"></i>
                            <span>Tópicos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa-solid fa-comments"></i>
                            <span>Mensagens</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa-solid fa-people-arrows"></i>
                            <span>Solicitações</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa-regular fa-folder-open"></i>
                            <span>Serviços salvos</span>
                        </a>
                    </li>
                </ul>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Conectados
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- hash-channel -->
                                <div class="hash-channel">
                                    <div class="left-green-space"></div>
                                    <span># Livros</span>
                                </div>

                                <div class="people-same-category people-active">
                                    <div class="photo-people">
                                        <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                        <div class="people-status"></div>
                                    </div>
                                    <span>Mariana Lemos</span>
                                </div>

                                <div class="people-same-category people-active">
                                    <div class="photo-people">
                                        <img src="../assets/imgs/man_photo01.png" alt="man photo" />
                                        <div class="people-status"></div>
                                    </div>
                                    <span>Carlos dias</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Canais
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="channel">
                                    <span class="selected__span">#Livros</span>
                                    <div class="channel-selected"></div>
                                </div>

                                <div class="channel">
                                    <span class="channel-span">#Serviços Gerais</span>
                                    <div class=""></div>
                                </div>

                                <div class="channel">
                                    <span class="channel-span">#Serviços Domésticos</span>
                                    <div class="channel-selected"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Mensagens
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="people-same-category people-active">
                                    <div class="photo-people">
                                        <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                        <div class="people-status online"></div>
                                    </div>
                                    <span>Mariana Lemos</span>
                                </div>

                                <div class="people-same-category">
                                    <div class="photo-people">
                                        <img src="../assets/imgs/man_photo02.png" alt="" />
                                        <div class="people-status offline"></div>
                                    </div>
                                    <span>Josias Alves</span>
                                </div>

                                <div class="people-same-category">
                                    <div class="photo-people">
                                        <img src="../assets/imgs/girl_photo02.png" alt="girl photo" />
                                        <div class="people-status offline"></div>
                                    </div>
                                    <span>Natália Fonseca</span>
                                </div>

                                <div class="people-same-category">
                                    <div class="photo-people">
                                        <img src="../assets/imgs/girl_photo03.png" alt="girl photo" />
                                        <div class="people-status offline"></div>
                                    </div>
                                    <span>Marília  Moreira</span>
                                    <div class="channel-selected"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </sidenav>

            <navbar class="nav-dandelion">
                <div class="welcome">
                    <i class="fa-solid fa-hands-clapping"></i>
                    <div class="welcome-user">
                        <h4>Olá <span class="user-name">Mariana</span>, Bem Vinda de volta!</h4>
                        <p>Continue a colaborar com as suas comunidades</p>
                    </div>
                </div>

                <div class="config-status">
                    <a href="#" class="configs"><i class="fa-solid fa-gear"></i></a>
                    <div class="status-user">
                        <div class="dandelion-coins">
                            <div class="coin">
                                <img src="../assets/imgs/dandelion_coin_blue.png" alt="">
                                <span class="amout-coins__blue">153</span>
                            </div>

                            <span class="divisory-coins"></span>

                            <div class="coin">
                                <img src="../assets/imgs/dandelion_coin_green.png" alt="">
                                <span class="amout-coins__green">68</span>
                            </div>
                        </div>

                        <div class="photo-user">
                            <div class="photo-user__user">
                                <img src="../assets/imgs/girl_photo-logo.png" alt="girl photo" />
                                <div class="people-status__user"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </navbar>
            
            <section class="all-content">
                <div class="container__all-content">
                    <section class="content-dandelion">

                    </section>

                    <aside class="advert-dandelion"></aside>
                </div>
            </section>

            <footer class="informations footer-dandelion">
                <div class="informations-container">
                    <div class="informations-dandelion">
                        <h4>@Dandelion</h4>
                        <div class="informations__social-midia">
                            <a href="#">
                                <i class="fa-brands fa-square-twitter"></i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-square-facebook"></i>    
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <span class="informations-divisory"></span>

                    <div class="addres">
                        <span>Endereço</span>
                        <p>Registro, SP, Brasil <br>Centro, Never Land, 224</p>
                    </div>

                    <span class="informations-divisory"></span>

                    <div class="legal">
                        <span>legal</span>
                        <a href="#">Termos de Uso Programa de Integridade</a>
                    </div>

                    <span class="informations-copyright">dandelion.com © 2022-2022 dandelion LTDA</span>

                </div>
            </footer>
        </section>
    </div>
    
</body>
</html>