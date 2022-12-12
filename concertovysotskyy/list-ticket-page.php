<?php
require_once './config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./common/css/style-list-ticket.css">
    <link rel="stylesheet" href="./common/css/style-fonts.css">
    <title>Shop</title>
</head>

<header>
    <a href="./index.php" class="return">Return</a>
</header>

<body>
    <div id="canvas_container">
        <section>
            <div class="wrapper-ticket">
                <?php
                $datas = mysqli_query($connect, "SELECT * FROM `tconcert`");
                $datas = mysqli_fetch_all($datas);
                $btn_id = 1;
                $id = 1;
                foreach ($datas as $data) {
                ?>
                    <div class="ticket">
                        <div class="ticket-name">
                            <?php
                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                            $datas = mysqli_fetch_all($datas);
                            foreach ($datas as $data) {
                            ?>
                                <p class="name-ticket"><?= $data[1] ?></p>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="ticket-body">
                            <div class="ticket-photo">
                                <?php
                                $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                $datas = mysqli_fetch_all($datas);
                                foreach ($datas as $data) {
                                ?>

                                    <img src="<?= $data[8] ?>" alt="" srcset="">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="ticket-description">
                                <form action="./config/prenotation.php" method="post">
                                    <div class="wrapper-ticket-status-group">
                                        <div class="ticket-group">
                                            <?php
                                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                            $datas = mysqli_fetch_all($datas);
                                            foreach ($datas as $data) {
                                            ?>
                                                <p class="group-name"><?= $data[6] ?></p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="ticket-status">
                                            <?php
                                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                            $datas = mysqli_fetch_all($datas);
                                            foreach ($datas as $data) {
                                            ?>
                                                <?php
                                                if ($data[3] <= 0) {
                                                ?>
                                                    <div class="numbers">
                                                        <p class="ticket-number">Tickets:</p>
                                                        <p>SOLD OUT</p>
                                                    </div>

                                                <?php
                                                } else {
                                                ?>
                                                    <div class="numbers">
                                                        <p class="ticket-number">Tickets:</p>
                                                        <input class="ticket-number" readonly name="quantity" value="<?= $data[3] ?>">
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="ticket-data">
                                        <?php
                                        $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                        $datas = mysqli_fetch_all($datas);
                                        foreach ($datas as $data) {
                                        ?>
                                            <p class="data-ticket"><?= $data[7] ?></p>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="ticket descr">
                                        <?php
                                        $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                        $datas = mysqli_fetch_all($datas);
                                        foreach ($datas as $data) {
                                        ?>
                                            <p class="ticket-description"><?= $data[4] ?></p>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="wrapper-price-status">
                                        <div class="wrapper-tikcet-price">
                                            <div class="ticket-price">
                                                <?php
                                                $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                                $datas = mysqli_fetch_all($datas);
                                                foreach ($datas as $data) {
                                                ?>
                                                    <p class="price-ticket"><?= $data[5] ?> $</p>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>




                                        <div class="wrapper-ticket-status">
                                            <?php
                                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                                            $datas = mysqli_fetch_all($datas);
                                            foreach ($datas as $data) {
                                            ?>
                                                <?php
                                                if ($data[3] <= 0) {
                                                ?>
                                                    <button class="ticket-btn-sold" disabled type="submit" name="id" value="<?= $btn_id ?>">SOLD OUT</button>
                                                <?php
                                                } else {
                                                ?>
                                                    <button class="ticket-btn" type="submit" name="id" value="<?= $btn_id ?>">BUY </button>
                                                <?php
                                                }
                                                ?>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                <?php
                    $btn_id += 1;
                    $id += 1;
                }
                ?>
            </div>
        </section>
        <script src="./common/js/script-index.js"></script>
    </div>
</body>

</html>