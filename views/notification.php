<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Example</title>
    <style>
        /* Style de la notification */
        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Apparition de la notification */
        .notification.show {
            opacity: 1;
            visibility: visible;
        }

        /* Bouton de fermeture */
        .close-btn {
            margin-left: 20px;
            font-size: 20px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #FFCDD2;
        }
    </style>
</head>
<body>

    <div id="notification" class="notification">
        <span class="message"><?= $message ?></span>
        <span class="close-btn">&times;</span>
    </div>

    <script>
        $(document).ready(function() {
            function showNotification() {
                var $notification = $('#notification');

                // Mettre à jour le message de la notification
                $notification.find('.message')

                // Afficher la notification
                $notification.addClass('show');

                // Masquer la notification après 2 secondes
                setTimeout(function() {
                    hideNotification();
                }, 1500);

                // Fermer la notification lorsqu'on clique sur le bouton X
                $notification.find('.close-btn').on('click', function() {
                    hideNotification();
                });
            }

            function hideNotification() {
                var $notification = $('#notification');
                $notification.removeClass('show');
            }

            // Exemple d'utilisation
            // Appelez showNotification() avec le message souhaité pour afficher la notification
            showNotification();
        });
    </script>

</body>
</html>

<?php $message = ''; ?>