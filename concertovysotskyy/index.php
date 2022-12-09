<?php
require_once './config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./common/css/style-index.css">
    <title>Shop</title>
</head>

<body>
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
                    echo "<pre>";
                    foreach ($datas as $data) {
                    ?>
                        <p><?= $data[1] ?></p>
                    <?php
                    }
                    echo "</pre>";
                    ?>
                </div>
                <div class="ticket-body">
                    <div class="ticket-photo"></div>
                    <div class="ticket-description">
                        <div class="ticket descr">
                            <?php
                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                            $datas = mysqli_fetch_all($datas);
                            foreach ($datas as $data) {
                            ?>
                                <p><?= $data[4] ?></p>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="ticket-group">
                        <?php
                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                            $datas = mysqli_fetch_all($datas);
                            foreach ($datas as $data) {
                            ?>
                                <p><?= $data[6] ?></p>
                            <?php
                            }
                            ?>
                            <p>Trieste band</p>
                        </div>
                    </div>
                </div>
                <div class="wrapper-tikcet-price">
                    <div class="ticket-price">
                    <?php
                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                            $datas = mysqli_fetch_all($datas);
                            foreach ($datas as $data) {
                            ?>
                                <p><?= $data[5] ?> $</p>
                            <?php
                            }
                            ?>
                    </div>
                    <div class="wrapper-ticket-status">
                    <form action="./config/prenotation.php" method="post">
                        <div class="ticket-status">
                        <?php
                            $datas = mysqli_query($connect, "SELECT * FROM `tconcert` where id = $id");
                            $datas = mysqli_fetch_all($datas);
                            foreach ($datas as $data) {
                            ?>
                                <input type="number" name="quantity" value="<?= $data[3] ?>">
                            <?php
                            }
                            ?>
                        </div>
                        
                            <button class="ticket-btn" type="submit" name="id" value="<?= $btn_id ?>"  >BUY</button>
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
</body>

</html>