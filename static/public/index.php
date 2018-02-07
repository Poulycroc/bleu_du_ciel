<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/app.css">
    <script src='assets/js/lib/jquery-3.2.1.slim.min.js'></script>
</head>
<body>
    <div class="main_logo">
        <?php include 'parts/logo.php'; ?>
    </div>

    <?php include 'parts/nav.php'; ?>

    <main>
        <section class="about _vertical">
            <div class="content">
                <div class="head">
                    <h4>About</h4>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <article class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores amet, aliquam cum, molestias error ipsam corporis fuga culpa illo atque aut quam asperiores voluptates nam molestiae? Iusto non molestiae inventore!
                </article>
            </div>
        </section>
        <section class="work _vertical">
            <div class="content">
                <div class="head">
                    <h4>Work</h4>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="list_work">
                    <ul>
                        <?php for ($i=0; $i < 5; $i++): ?>
                            <li class='card _work'>
                                <figure class="img_holder">
                                    <img src="http://placehold.it/253x200" alt="work name" />
                                </figure>
                                <div class="about_work_holder">
                                    <article>
                                        <h4>Work Name</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa nostrum doloremque porro suscipit distinctio ex quam aliquam eos officiis.</p>
                                    </article>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class='footer'>
            <div class="content">
                <div class="head">
                    <h4>Me contacter</h4>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <article class="contact">
                    <a href="mailto:me@contacter.be">bleuduciel@contact.be</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </article>
            </div>
        </section>
    </main>

    <script src="assets/js/app.js"></script>
</body>
</html>