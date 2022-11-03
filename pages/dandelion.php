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
                    <img src="../assets/imgs/hand-welcome.png" alt="">
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
                        <nav class="informations-comunity">
                            <div class="about-comunity">
                                <img src="../assets/imgs/comunidade01.png" class="informations-comunity_img" alt="comunidade foto">
                                <div class="name-comunity">
                                    <div class="name-comunity__info">
                                        <h4>CMD São Marcos</h4>
                                        <i class="fa-solid fa-circle-info"></i>
                                    </div>
                                    <p>Por conseguinte, a complexidade dos estudos efetuados cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte.</p>
                                </div>
                            </div>

                            <div class="users-online">
                                <div class="users-photos_only">
                                    <img src="../assets/imgs/girl_photo-logo.png" alt="foto de usuário" class="photo01">
                                    <img src="../assets/imgs/man_photo03.png" alt="foto de usuário"  class="photo02">
                                    <img src="../assets/imgs/man_photo04.png" alt="foto de usuário" class="photo03">
                                </div>

                                <div class="number-online__users">
                                    <span>68</span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0)"/>
                                        <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_18_751" transform="scale(0.0104167)"/>
                                        </pattern>
                                        <image id="image0_18_751" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAAFWUlEQVR4nO2bT0wcZRjGn/ebbUFL9KKm2BiibQgpB1N2oVo18aAsS2J7aaIeOFkXqjHqUU0rRu+aNFkWQuufpkYDGqtldyVN2iYeNGyJWiOYxhatVrEam7YE0J15PVANwu7ODvPNfhN4f0f22+f7Lc/OzH7zBxAEQRAEQRAEQRAEQRAEQRAEYbVDQYYn8snNBNrFoA6AGwC1aeEV/gngH5gpZ4GOjrT2nQvSI8x+gRTQOf50A9uFF0G0B4ByGc4EDCuLXzq2rf9sED5h9tNeQMdY9+NEdBDADR7fOs+Enlw0/ZZup8WEzc+tfU90jvX0EtG78P7hAKCGGG8m8t37dTotJox+2raAzrGeLia8oyWM8US2NX1IS9Z1wuqnpYD46ae2KHa+AVCjIw/AnG0Xto5uHzyvIyzMflp2Qcrh16DvwwFArWVFXtUVFmY/31tAIp/cDKizOrKW4Nh2YYvfb1nY/XxvAQTahWB+zqqIZe30GxJ2P98FMBD3m1EKh1WH34yw+2k4BtBd/jNKJJOjITvcfjoOwhs1ZJSAbtcQEmo/rQuxAHBMC7jg209HAb9oyCgKARc1xITaT0MBrGWxVAyHacp/Srj9/P8KYsr5zSgJcdZvRNj9fBdggY4imH2149iFT/yGhN3PdwEjrX3nCHjfb85SmHBEx7mWsPtp+RXEcPYBmNORdZ1Zp1B4WVdYmP20FJCNDXxPjKSOLAAA4UldZ0KBcPtpWwdkWtOHmdCrIWp/Npo+oiHnf4TVL4BLkj2PEeEQVnLJD9Sdi/W9rdtpMWHz074SzrWm34vAaQLzAAC7grcwAUOA0xz0Pz+MfoHeltL+xZ47I5a1k0EJAhoYdMfCpHzBYZpS5OQKtv2xzv39avITBEEQBEEQBGF1om0hlhh/5lYUClthcSOYGkHcCMYmADdiYdl/M4A6AOsAvgwQA7gK4CID0wr4mcGTrPAtYf3X2ZYDl3S5efRjADMA/gRwDYwZEE8D+I6hJph5QtnrJrP3HLiiw2vFBbR/1bWB/q570AK3A2hnoEmH0L8QMAnCKdiqN9OW+jVsfgAmAGRAyNTV/vHZUPPQXysJ8VxAPJ9sUbCeBfhR6L3fchnE9GEm1rcbBK70PdX0W8RVMGUUUf9INHXSi2/FBSTG9iaI+AUGHliZozcIdH69VdPy0bY3Llcyvtp+peEviWhfJpo+Vslo1wLi+WS9YqsfxI/4l6scIk5kov2uF9RN+blCyNq26h5tS10oP6wMHfnk/QT1AYDbtMq583k2lr7XbZBBv0r5HQ7tzrb1nSo1oOT1gM6x7ocJahQGPhwRv+I2xqSfB26B4lx8bO9DpQYULaA9n2xiomGs7Fkqv1xqa6kfLTfAsJ9XahXx8MJzCsuJLPsLg6zTahDATUGbFYOYP+2l3tL38VTf7wyBD9pO5DjXXJkavfvwjM7wZQV0jnfHGbhP5yReYFX+TrYq+s0DeH57dGN/2S+ET5YVwExdQU1WCY6Dsg9DV8lvXkElRmKpE77vPXSh2DFgR8BzlsWyrGmXIYH7Efi5kVjqRNDzAMULCPCBBnc2zK3/zWVI0H5n2qL1AwHP8R/FCqit1uTFGNrx+qzLkED9GBgMcp+/lLA/IVN1SPHxas4nBSxhtsb6sZrzLV8HrHFONqeulXs9ke8pe6YzG0t7OsMsW4BhpADDSAGGkQIMIwUYRgowjBRgmEAf0FiNyDpglSEFGEYKMMyaPwa47dODRrYAw0gBhpECDCMFGEYKMIwUYBgpwDBrfh3gFTkXtMqQAgwjBRhGCjCMFGAYKcAwUoBhpADDSAGGkQIMIwUY5h8GjCpsabd4qAAAAABJRU5ErkJggg=="/>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </nav>  

                        <div class="contributions">
                            <div class="contributions-container">
                                <img src="../assets/imgs/hand-voluntaring_icon.png" alt="ícone de voluntário">
                                <span class="contributions-span">Contribuições</span>
                                <span class="contributions-divisory"></span>
                                <span class="contributions-category">#Livros</span>
                                <span class="contributions-divisory"></span>

                            </div>

                            <div class="services-search">
                                <ul class="contributions-services__nav">
                                    <li>
                                        <a href="" class="contributions-services__nav-link link-active">Oferecidas</a>
                                    </li>

                                    <li>
                                        <a href="" class="contributions-services__nav-link">Solicitadas</a>
                                    </li>
                                </ul>

                                <div class="search-services-container">
                                    <img src="../assets/imgs/search-icon.png" alt="">                                   
                                    <input type="search" class="search-services" placeholder="Procurar em serviços" />
                                </div>
                            </div>

                        </div>

                        <main class="main-services">
                            <div class="main-services__container">
                                <div class="card-service">
                                    <div class="card-info">
                                        <div class="photo-info">
                                            <div class="photo-info__user">
                                                <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                                <div class="people-status online"></div>
                                            </div>

                                            <div class="name-user__time-online">
                                                <span>Mariana Lemos</span>
                                                <p>2h</p>
                                            </div>
                                        </div>

                                        <div class="card-options">
                                            <i class="fa-solid fa-ellipsis"></i>
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>

                                    <div class="card-title-service">
                                        <p>Livros de Química em Bom Estado - Seminovos</p>
                                    </div>

                                    <div class="service-img">
                                        <img src="../assets/imgs/livros-img.png" alt="imagem do serviço">
                                    </div>

                                    <div class="service-details">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="service-details__hours">
                                            <i class="fa-solid fa-clock"></i>
                                            <span>Horários</span>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="helping-points">
                                            <i class="fa-solid fa-handshake-angle"></i>
                                            <span>20</span>
                                        </div>
                                    </div>

                                    <div class="solicite-service">
                                        <div class="comunity-solicites">
                                            <i class="fa-solid fa-users-rectangle"></i>
                                            <span>03</span>
                                        </div>

                                        <span class="solicite-services__divisory"></span>

                                        <div class="comunity-coins__price">
                                            <img src="../assets/imgs/dandelion_coin_green.png" alt="">
                                            <span>20</span>
                                        </div>
                                        
                                        <span class="solicite-services__divisory"></span>

                                        <button type="button" class="button-solicite__service">Solicitar</button>

                                    </div>
                                </div>

                                <div class="card-service">
                                    <div class="card-info">
                                        <div class="photo-info">
                                            <div class="photo-info__user">
                                                <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                                <div class="people-status online"></div>
                                            </div>

                                            <div class="name-user__time-online">
                                                <span>Mariana Lemos</span>
                                                <p>2h</p>
                                            </div>
                                        </div>

                                        <div class="card-options">
                                            <i class="fa-solid fa-ellipsis"></i>
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>

                                    <div class="card-title-service">
                                        <p>Livros de Química em Bom Estado - Seminovos</p>
                                    </div>

                                    <div class="service-img">
                                        <img src="../assets/imgs/livros-img.png" alt="imagem do serviço">
                                    </div>

                                    <div class="service-details">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="service-details__hours">
                                            <i class="fa-solid fa-clock"></i>
                                            <span>Horários</span>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="helping-points">
                                            <i class="fa-solid fa-handshake-angle"></i>
                                            <span>20</span>
                                        </div>
                                    </div>

                                    <div class="solicite-service">
                                        <div class="comunity-solicites">
                                            <i class="fa-solid fa-users-rectangle"></i>
                                            <span>03</span>
                                        </div>

                                        <span class="solicite-services__divisory"></span>

                                        <div class="comunity-coins__price">
                                            <img src="../assets/imgs/dandelion_coin_green.png" alt="">
                                            <span>20</span>
                                        </div>
                                        
                                        <span class="solicite-services__divisory"></span>

                                        <button type="button" class="button-solicite__service">Solicitar</button>

                                    </div>
                                </div>

                                <div class="card-service">
                                    <div class="card-info">
                                        <div class="photo-info">
                                            <div class="photo-info__user">
                                                <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                                <div class="people-status online"></div>
                                            </div>

                                            <div class="name-user__time-online">
                                                <span>Mariana Lemos</span>
                                                <p>2h</p>
                                            </div>
                                        </div>

                                        <div class="card-options">
                                            <i class="fa-solid fa-ellipsis"></i>
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>

                                    <div class="card-title-service">
                                        <p>Livros de Química em Bom Estado - Seminovos</p>
                                    </div>

                                    <div class="service-img">
                                        <img src="../assets/imgs/livros-img.png" alt="imagem do serviço">
                                    </div>

                                    <div class="service-details">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="service-details__hours">
                                            <i class="fa-solid fa-clock"></i>
                                            <span>Horários</span>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="helping-points">
                                            <i class="fa-solid fa-handshake-angle"></i>
                                            <span>20</span>
                                        </div>
                                    </div>

                                    <div class="solicite-service">
                                        <div class="comunity-solicites">
                                            <i class="fa-solid fa-users-rectangle"></i>
                                            <span>03</span>
                                        </div>

                                        <span class="solicite-services__divisory"></span>

                                        <div class="comunity-coins__price">
                                            <img src="../assets/imgs/dandelion_coin_green.png" alt="">
                                            <span>20</span>
                                        </div>
                                        
                                        <span class="solicite-services__divisory"></span>

                                        <button type="button" class="button-solicite__service">Solicitar</button>

                                    </div>
                                </div>

                                <div class="card-service">
                                    <div class="card-info">
                                        <div class="photo-info">
                                            <div class="photo-info__user">
                                                <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                                <div class="people-status online"></div>
                                            </div>

                                            <div class="name-user__time-online">
                                                <span>Mariana Lemos</span>
                                                <p>2h</p>
                                            </div>
                                        </div>

                                        <div class="card-options">
                                            <i class="fa-solid fa-ellipsis"></i>
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>

                                    <div class="card-title-service">
                                        <p>Livros de Química em Bom Estado - Seminovos</p>
                                    </div>

                                    <div class="service-img">
                                        <img src="../assets/imgs/livros-img.png" alt="imagem do serviço">
                                    </div>

                                    <div class="service-details">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="service-details__hours">
                                            <i class="fa-solid fa-clock"></i>
                                            <span>Horários</span>
                                        </div>

                                        <span class="service-details__divisory"></span>

                                        <div class="helping-points">
                                            <i class="fa-solid fa-handshake-angle"></i>
                                            <span>20</span>
                                        </div>
                                    </div>

                                    <div class="solicite-service">
                                        <div class="comunity-solicites">
                                            <i class="fa-solid fa-users-rectangle"></i>
                                            <span>03</span>
                                        </div>

                                        <span class="solicite-services__divisory"></span>

                                        <div class="comunity-coins__price">
                                            <img src="../assets/imgs/dandelion_coin_green.png" alt="">
                                            <span>20</span>
                                        </div>
                                        
                                        <span class="solicite-services__divisory"></span>

                                        <button type="button" class="button-solicite__service">Solicitar</button>

                                    </div>
                                </div>
                                

                            </div>
                        </main>
                    </section>

                    <aside class="advert-dandelion">

                    </aside>
                </div>
            </section>

            <footer class="informations footer-dandelion">
                <div class="informations-container">
                    <div class="informations-dandelion">
                        <h4>@Dandelion</h4>
                        <div class="informations__social-midia">
                            <a href="https://twitter.com">
                                <img src="../assets/imgs/twitter.png" alt="twitter icon" />
                            </a>

                            <a href="https://facebook.com">
                                <img src="../assets/imgs/facebook.png" alt="facebook icon" />
                            </a>

                            <a href="https://instagram.com">
                                <img src="../assets/imgs/instagram.png" alt="instagram icon" />
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