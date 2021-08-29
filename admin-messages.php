<?php include('base/head.php') ?>

<body>

<?php include ('base/header-admin.php') ?>

    <section class="message section">
        <div class="container grid">
            <div class="message__container container grid">

                <div class="message__info">
                    <h1 class="message__info-title">Vous avez un mess@ge !</h1>
                </div>

                <div class="message__data">
                    <h3 class="message__data-title">statut : admin</h3>
                    <h3 class="message__data-title">Nombre de commande : ##</h3>
                    <h3 class="message__data-title">Nombre de message (non-lu) : ##</h3>
                </div>
            </div>
            <div class="message__button">
                <a href="admin.php" class="message__button-option button">Retour Acceuil</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container grid">
            <div class="message__table-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="message__table-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td>Doe</td>
                        <td>John</td>
                        <td>john@doe.fr</td>
                        <td>
                            Bonjour, je voulais vous dire bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
                        </td>
                    </tr>
                    <tr>
                        <td>Stark</td>
                        <td>Tony</td>
                        <td>tony@ironman.com</td>
                        <td>
                            Bonjour, je voulais vous dire bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
                        </td>
                    </tr>
                    <tr>
                        <td>Gates</td>
                        <td>Bill</td>
                        <td>bill@microsoft.com</td>
                        <td>
                            Bonjour, je voulais vous dire bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?php include('base/footer.php') ?>

<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>