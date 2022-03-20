<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/fonts/css/font-awesome.css">
    <!--
   <link rel="stylesheet" href="/assets/bootstrap/fonts/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
          integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Персональный сайт | Дарья</title>
</head>
<body>
<section id="section___main">
    <div class="container">
        <nav id="section__main__navbar" class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse">
                <ul id="section__main__menu__links" class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a href="#section__portfolio" class="nav-link">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section__services" class="nav-link">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section__blog" class="nav-link">Блог</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0 section__main__social__links">
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="telegram">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="section___main__presentation">
            <div class="container">
                <?php include(__DIR__.'/../blocks/main.php'); ?>
            </div>
        </div>
    </div>
</section>
<section id="section__about_me">
    <div class="container">
        <?php include(__DIR__.'/../blocks/about.php'); ?>
    </div>
</section>
<section id="section__help_resolve">
    <div class="container">
        <?php include(__DIR__.'/../blocks/tasks.php'); ?>
    </div>
</section>
<!--
<section id="section__portfolio">
    <div class="container">
        <article>
            <h2>Мое портфолио</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, dolor.</p>
            <div>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </article>
    </div>
</section>
<section id="section__job">
    <div class="container service__article_job">
        <article id="service__article_job">
            <h2>Как я работаю</h2>
            --><!-- start timeline --><!--
            <div class="timeline">
                <div class="row">
                    <div class="col-md-6">
                        <div class="timeline__outer">
                            <div class="timeline__card">
                                <div class="timeline__info">
                                    <h3 class="timeline__title">1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                            <div class="timeline__card">
                                <div class="timeline__info">
                                    <h3 class="timeline__title">2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline__outer">
                            <div class="timeline__card">
                                <div class="timeline__info">
                                    <h3 class="timeline__title">3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                            <div class="timeline__card">
                                <div class="timeline__info">
                                    <h3 class="timeline__title">4</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            !--><!-- end timeline --><!--
        </article>
    </div>
</section>
<section id="section__services">
    <div class="container">
        <article>
            <h2>Мои услуги</h2>
            <p>Все услуги можно модифицировать или скомбинировать по вашим пожеланиям</p>
            <div class="row">
                <div class="col-md-4">Shopping1</div>
                <div class="col-md-4">Shopping2</div>
                <div class="col-md-4">Shopping3</div>
            </div>
        </article>
    </div>
</section>
<section id="section__contact_me">
   <div class="container">
       <article>
           <h2>Свяжитесь со мной</h2>
           <p>Расскажите о своих пожеланиях, и я с вами свяжусь в течение двух часов для назначения встречи</p>
           <form action="/contact.php" method="POST" enctype="multipart/form-data">
              <div class="contact__group">
                  <div>
                      <label for="username"></label>
                      <input type="text" id="username" name="username" placeholder="Имя">
                  </div>
                  <div>
                      <label for="phone"></label>
                      <input type="tel" id="phone" name="phone" placeholder="+7 900 000-00-00">
                  </div>
                  <div>
                      <label for="comment"></label>
                      <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Comment"></textarea>
                  </div>
                  <button type="submit" class="btn__common" style="display: inline-block">Отправить</button>
              </div>
           </form>
       </article>
   </div>
</section>
-->
<section id="section__blog">
    <div class="container">
        <?php include(__DIR__.'/../blocks/blog.php'); ?>
    </div>
</section>
<section id="section__contact_references">
    <div class="container">
        <?php include(__DIR__.'/../blocks/contact.php'); ?>
    </div>
</section>
<script src="/assets/bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
<script src="/assets/js/app.js" type="application/javascript"></script>
</body>
</html>