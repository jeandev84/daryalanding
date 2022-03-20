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
        <?php include(__DIR__.'/../partials/menu.php'); ?>
        <div id="section___main__presentation" style="margin: 20% auto;">
            <div class="container">
                <?php include(__DIR__.'/../sections/main.php'); ?>
            </div>
        </div>
    </div>
</section>
<section id="section__about_me">
    <div class="container">
        <?php include(__DIR__.'/../sections/about.php'); ?>
    </div>
</section>
<section id="section__help_resolve">
    <div class="container">
        <?php include(__DIR__.'/../sections/tasks.php'); ?>
    </div>
</section>
<section id="section__blog" style="background-color: #f5f1f0;">
    <div class="container">
        <?php include(__DIR__.'/../sections/blog.php'); ?>
    </div>
</section>
<section id="feedback">
    <div class="container">
        <?php include(__DIR__.'/../sections/feedback.php'); ?>
    </div>
</section>
<section id="section__contact_references" style="background-color: #f5f1f0">
    <div class="container">
        <?php include(__DIR__.'/../sections/contact.php'); ?>
    </div>
</section>
<script src="/assets/bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
<script src="/assets/js/app.js" type="application/javascript"></script>
</body>
</html>