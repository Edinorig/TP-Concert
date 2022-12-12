<?php
require_once './config/connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./common/css/style-list-ticket.css">
    <link rel="stylesheet" href="./common/css/style-fonts.css">
    <title>Ticket</title>
</head>

<body>
    <header>
    <a href="./list-ticket-page.php" class="return">Return</a>
    </header>
    
    <section class="result-ticket">
        
        <div class="wrapper-ticket">
            <?php
            $id = $_SESSION['id'];
            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
            $datas = mysqli_fetch_all($datas);
            foreach ($datas as $data) {
            ?>
                <div class="ticket">
                    <div class="ticket-name">
                    <p class="group-name"><?= $data[1] ?></p>
                    </div>
                    <div class="ticket-body">
                        <div class="ticket-photo">

                            <img src="<?= $data[8] ?>" alt="" srcset="">
                        </div>
                        <div class="ticket-description">
                            <form action="./config/prenotation.php" method="post">
                                <div class="wrapper-ticket-status-group">
                                    <div class="ticket-group">
                                        <p class="group-name"><?= $data[6] ?></p>
                                    </div>

                                    <p class="group-name"><?= $data[9] ?></p>
                                
                                </div>

                                <div class="ticket-data">
                                    <p class="data-ticket"><?= $data[7] ?></p>
                                </div>

                                <div class="ticket descr">
                                    <p class="ticket-description"><?= $data[4] ?></p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            <?php
            }
            ?>
        </div>
    </section>

</body>

</html>