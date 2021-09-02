<?php
    session_start();
    require_once 'models/message.model.php';
    require_once ('dbcontroller.php');

    $db_handle = new DBController();
    $messages = $db_handle -> runQuery('SELECT * FROM `message`');
?>

<?php include('base/head.php') ?>

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

    <?php
        foreach($messages as $message) {
            if ($item['message_id'] == $message['id']) {
                return $item;
            }
        }
    ?>

        <div class="message__table-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Telephone</th>
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
                    <td><?php $message['Prenom'] ?></td>
                    <td><?php $message['Telephone'] ?></td>
                    <td><?php $message['Mail'] ?></td>
                    <td><?php $message['Message'] ?></td>
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

<?php include ('base/script.php') ?>