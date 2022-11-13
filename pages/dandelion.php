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
    <div class="background__form" id="background-form">
        <form class="form-create-account__contribuir" id="insert-contribution-form">
            <div class="close" id="close-button__insert">
                <i class="fa-solid fa-square-xmark"></i>
            </div>
            <div class="title">
                <div class="date-progress">
                    <h1>Sua contribuição</h1>
                    <span>CMD São Marcos</span>
                </div>
                <span class="date-progress__divisory"></span>
            </div>

            <div class="col-12 mb-4">
                <label class="form-label">Atividade</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="row mb-4">
                <div class="col-6 photo">
                    <span>Foto(s)</span>
                    <div class="photo-file">
                        <label class="form-label">(Escolha o arquivo)</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple required>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Categoria</label>
                    <select id="inputState" class="form-select" required>
                        <option selected>...</option>
                        <option>Mecânica</option>
                        <option>Encanador</option>
                        <option>Instrutor</option>
                    </select>
                </div>    
            </div>

            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea class="form-control field-textarea" required></textarea>
            </div>

            <span class="date-progress__divisory"></span>

            <div class="available-times">
                <h1>Horários disponíveis</h1>
                <div class="options-service">
                    <div class="col-7">
                        <label class="form-label">Dia da semana</label>
                        <select id="inputState" class="form-select" required>
                            <option selected class="option-neuter">Selecione o dia</option>
                            <option>Segunda-feira</option>
                            <option>Terça-feira</option>
                            <option>Quarta-feira</option>
                            <option>Quinta-feira</option>
                            <option>Sexta-feira</option>
                            <option>Sábado</option>
                            <option>Domingo</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Das</label>
                        <input type="time" class="service-hours"  />
                    </div>

                    <div class="col-2">
                        <label class="form-label">Até</label>
                        <input type="time" class="service-hours" />
                    </div>
                </div>
            </div>

            <div class="next-page__contribuir">
                <div class="next-page__container__contribuir">
                    <span>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Importante! <br> Preencha todos os dados.
                    </span>

                    <button type="submit" href="../index.php" class="next-page__button">Finalizar</a>
                </div>
            </div>

        </form>

        <form class="form-create-account__contribuir" id="alter-contribution-form">
            <div class="close" id="close-button__alter">
                <i class="fa-solid fa-square-xmark"></i>
            </div>
            <div class="title">
                <div class="date-progress">
                    <h1>Alterar contribuição</h1>
                    <span>CMD São Marcos</span>
                </div>
                <span class="date-progress__divisory"></span>
            </div>

            <div class="col-12 mb-4">
                <label class="form-label">Atividade</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="row mb-4">
                <div class="col-6 photo">
                    <span>Foto(s)</span>
                    <div class="photo-file">
                        <label class="form-label">(Escolha o arquivo)</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple required>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Categoria</label>
                    <select id="inputState" class="form-select" required>
                        <option selected>...</option>
                        <option>Mecânica</option>
                        <option>Encanador</option>
                        <option>Instrutor</option>
                    </select>
                </div>    
            </div>

            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea class="form-control field-textarea" required></textarea>
            </div>

            <span class="date-progress__divisory"></span>

            <div class="available-times">
                <h1>Horários disponíveis</h1>
                <div class="options-service">
                    <div class="col-7">
                        <label class="form-label">Dia da semana</label>
                        <select id="inputState" class="form-select" required>
                            <option selected class="option-neuter">Selecione o dia</option>
                            <option>Segunda-feira</option>
                            <option>Terça-feira</option>
                            <option>Quarta-feira</option>
                            <option>Quinta-feira</option>
                            <option>Sexta-feira</option>
                            <option>Sábado</option>
                            <option>Domingo</option>
                        </select>
                    </div>

                    <div class="col-2">
                        <label class="form-label">Das</label>
                        <input type="time" class="service-hours"  />
                    </div>

                    <div class="col-2">
                        <label class="form-label">Até</label>
                        <input type="time" class="service-hours" />
                    </div>
                </div>
            </div>

            <div class="next-page__contribuir">
                <div class="next-page__container__contribuir">
                    <span>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Importante! <br> Preencha todos os dados.
                    </span>

                    <button type="submit" href="../index.php" class="next-page__button">Finalizar</a>
                </div>
            </div>
        </form>

        <form class="form-delete-contribution" id="delete-contribution-form">
            <div class="delete-container">
                <div class="top-container">
                    <h5>Remover contribuição</h5>
                </div>

                <div class="sure-remove">
                    <div class="about-remove">
                        <p>Você tem certeza que deseja remover essa contribuição?</p>
                    </div>
                    <div class="button-removes">
                        <button type="submit" class="sure-buttons">Sim</button>
                        <button class="sure-buttons" id="no-delete">Não</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
        <section class="dandelion-template">
            <article class="logo-dandelion">
                <div class="dandelion-logo__icon">
                    <a href="../index.php"><img src="../assets/imgs/dandelion_icon.png" alt="Logo Dandelion"></a>    
                </div>
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
                            Opções
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- hash-channel -->
                                <div class="hash-channel__options" id="button-contribution">
                                    <div class="left-white-space"></div>
                                    <div class="right-space">
                                        <span>Contribuir</span>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="21" height="21" fill="url(#pattern0)"/>
                                            <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_301_362" transform="scale(0.0104167)"/>
                                            </pattern>
                                            <image id="image0_301_362" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAADcUlEQVR4nO3cv2sUQRjG8WdU0ihiZQot0ohIRAuLVDYam4BgaSlE/wQVBDG2EhUTRRCtLexEIoZY6R+gRC2ChWghCTYaf0C8+LXYnEgw3O3uzL7j3fvpb+6957nZ3HGzkZxzzjnnnHP9JlgPsB6wX9JpSaOShiRtbXiEb5LeSZqTdDeE8Krh57cBDAC3gFXy0QKmgYFUrzuLHbD2Ah9LOmI9ywaeShoLIazEXnhT7AUruq58w5eko5ImUyxsvgMorvkvJG22nqWDVUkHQwivYy6aww44o/zDl4oZx2MvmkMBo9YDlHAs9oI5XIKWJW2znqNLyyGE7TEXzKEA6jw+hFDqNTT9fJ3kcAnqa16AMS/AmBdgzAsw5gUY8wKMbbEeoK66n+ut+Q4w5gUY8wKMeQHGvABjXoAxL8CYF2DMCzDmBRjzAozlUMCy9QAlfIm9YA4FfLAeoIT3sRfMoYBZ6wFKeBJ7wRyOpQxLeqn8T8etSjoQQngTc1HzHbB21vK29RxduBk7fCmDHSD9OZ4+o+IUco7mVBxP/xl7YfMdIElr5+7HJE2r2Oq5aEm6oUThS5nsgL+t/U0YV3EQdkjNnxv9quIWpVlJ91JcdpxzzjlXEzACPACWgBXgLTAJDFrP1vOAc2x8T/MiMGI9Y88CJrq4yXsR2Gk9a8/pMvy2K53WM/kiBuyRdFzSYUn7JA1K2tHEc9e5xwuYkHSpxEMWQgh7qz5fVEAATgDPS7yDoqsxf5l3ftuPmBlWBgwDz+JGWU3F+auED/AxdpZVhj8FfI8XYT0V5q8aPsD9FJmWGf5CpNxiKfWbLvXCbwGHUmWbevhU5huc/2zKfFMPn8rVhuYv80kprgjDp9Ki+K0h9fwTTeScaviUphqY38PfwBwd/u8bHn4SLWAKD79Ry8A8cA2/5kf1CNiV2fx9Ez7A7szm76vwIWIBEebvu/ABZohQQoT5+zL8XPg3XEMeviEP31DS8Ls5HZ3Hz2o2JkIIl62HEHDe+m1owO6y8y/0Vwl5hd9Gf5SQZ/ht9HYJeYffRu99MvoFXLTOtRR6p4RPwEmrHGsdTaT8Ub1cLElakPRQ0p0Qwmfjeaqj3t+E/7G8/FQswcOPqWQJHn4KXZbg4afUoQQPvwkblODhN2ldCR6+BYova3a/oTrnnHPOOedchn4DPx8kNqQneIsAAAAASUVORK5CYII="/>
                                            </defs>
                                        </svg>
                                    </div>  
                                </div>

                                <a href="contribuicoes.php" class="hash-channel__options">
                                    <div class="left-white-space"></div>
                                    <div class="right-space">
                                        <span>Contribuições</span>
                                        <img src="../assets/imgs/contributions-handle.png" alt="">
                                    </div>  
                                </a>

                            </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Conectados
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Canais
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="channel">
                                    <span class="selected__span">#Livros</span>
                                    <div class="channel-selected">2</div>
                                </div>

                                <div class="channel">
                                    <span class="channel-span">#Serviços Gerais</span>
                                    <div class=""></div>
                                </div>

                                <div class="channel">
                                    <span class="channel-span">#Serviços Domésticos</span>
                                    <div class="channel-selected">2</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Mensagens
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
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
                                    <div class="channel-selected">2</div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
                                            
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                                            <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
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
                                        <div class="dropdown" ata-bs-toggle="dropdown" aria-expanded="false">
                                            <button class="dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">Detalhes</button>
                                            <div class="dropdown-menu">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium minus esse, cumque corrupti perspiciatis eveniet doloremque, voluptas commodi repudiandae sapiente aliquid blanditiis magni culpa quibusdam rem ullam architecto. Aliquid.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero dolorum dolorem. Quisquam alias dolor quos quam accusantium! Excepturi quibusdam deserunt ipsa, a autem minima quisquam praesentium vitae architecto nam.
                                            </div>
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
                                            <div class="comunity-solicites__icon">
                                                <img src="../assets/imgs/queue.png" alt="">
                                            </div>
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
                        <div class="informations-comunity">
                            <h3>Conversa <span>#Livros</span></h3>
                        </div>

                        <div class="contributions"></div>

                        <main class="messages-container">
                            <div class="favorite-message">
                                <div class="photo-people">
                                    <div class="people-status online"></div>
                                    <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                </div>

                                <div class="message-container">
                                    <div class="name-message-fixed">
                                        <h5>Mariana Lemos</h5>
                                        <div class="fixed">
                                            <i class="fa-solid fa-thumbtack"></i>
                                            <span>2 dias atrás</span>
                                        </div>     
                                    </div>
                                    <p>É claro que o comprometimento entre as equipes deve passar por modificações independentemente das diversas correntes de pensamento. Por outro lado, a revolução dos costumes desafia a capacidade de equalização do impacto na agilidade decisória.</p>
                                </div>
                            </div>

                            <div class="comum-messages">
                                <div class="comum-messages__container">
                                    <div class="photo-people">
                                        <div class="people-status online"></div>
                                        <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                    </div>

                                    <div class="comum-user__container">
                                        <div class="message-for-user">
                                            <h5>Mariana Lemos</h5>
                                            <div class="fixed">
                                                <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
                                                <span>2 dias atrás</span>
                                            </div>     
                                        </div>
                                        <p>É claro que o comprometimento entre as equipes deve passar por modificações independentemente das diversas correntes de pensamento. Por outro lado, a revolução dos costumes desafia a capacidade de equalização do impacto na agilidade decisória.</p>
                                    </div>
                                </div>

                                <div class="comum-messages__container">
                                    <div class="photo-people">
                                        <div class="people-status online"></div>
                                        <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                    </div>

                                    <div class="comum-user__container">
                                        <div class="message-for-user">
                                            <h5>Mariana Lemos</h5>
                                            <div class="fixed">
                                                <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
                                                <span>2 dias atrás</span>
                                            </div>     
                                        </div>
                                        <p>É claro que o comprometimento entre as equipes deve passar por modificações independentemente das diversas correntes de pensamento. Por outro lado, a revolução dos costumes desafia a capacidade de equalização do impacto na agilidade decisória.</p>
                                    </div>
                                </div>

                                <div class="comum-messages__container">
                                    <div class="photo-people">
                                        <div class="people-status online"></div>
                                        <img src="../assets/imgs/man_photo01.png" alt="girl photo" />
                                    </div>

                                    <div class="comum-user__container">
                                        <div class="message-for-user">
                                            <h5>Carlos Dias</h5>
                                            <div class="fixed">
                                                <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
                                                <span>2 dias atrás</span>
                                            </div>     
                                        </div>
                                        <p>No entanto, não podemos esquecer que a contínua expansão de nossa atividade maximiza as possibilidades por conta dos conhecimentos estratégicos para atingir a excelência.</p>
                                    </div>
                                </div>

                                <div class="comum-messages__container">
                                    <div class="photo-people">
                                        <div class="people-status online"></div>
                                        <img src="../assets/imgs/girl_photo01.png" alt="girl photo" />
                                    </div>

                                    <div class="comum-user__container">
                                        <div class="message-for-user">
                                            <h5>Mariana Lemos</h5>
                                            <div class="fixed">
                                                <div class="dropdown">
                                                <i class="fa-solid fa-ellipsis" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" id="alter-button">Alterar</li>
                                                    <li class="dropdown-item" id="delete-button">Excluir</li>
                                                </ul>
                                            </div>
                                                <span>2 dias atrás</span>
                                            </div>     
                                        </div>
                                        <p>É claro que o comprometimento entre as equipes deve passar por modificações independentemente das diversas correntes de pensamento. Por outro lado, a revolução dos costumes desafia a capacidade de equalização do impacto na agilidade decisória.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="send-messages">
                                <div class="send-message__message">
                                    <textarea placeholder="Responder..."></textarea>
                                    <div class="send-message__field">
                                        <i class="fa-regular fa-comment-dots"></i>
                                        <div class="act">
                                            <i class="fa-solid fa-a"></i>
                                            <i class="fa-regular fa-face-smile"></i>
                                            <i class="fa-solid fa-paperclip"></i>
                                        </div>
                                        <i class="fa-regular fa-paper-plane"></i>
                                    </div>    
                                </div>
                            </div>
                        </main>
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
    
    <script defer src="../assets/js/script.js"></script>
</body>
</html>