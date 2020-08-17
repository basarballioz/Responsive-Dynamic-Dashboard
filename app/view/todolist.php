<?php require '../model/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Yapılacaklar Listesi </title>
    <link rel="stylesheet" href="../assets/css/todoStyle.css">
</head>
<body>
<div class="main-section">
    <div class="add-section">
        <form action="../controller/add.php" method="POST" autocomplete="off">
            <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                <input type="text"
                       name="title"
                       style="border-color: #13abff"
                       placeholder="Bu alan gereklidir"/>
                <button type="submit"> Oluştur </button>

            <?php } else { ?>
                <input type="text"
                       name="title"
                       placeholder="Eklenecek ögeyi yazın: "/>
                <button type="submit"> Oluştur </button>
            <?php } ?>
        </form>
    </div>
    <?php
    $todos = $database->query("SELECT * FROM todos ORDER BY id DESC");
    ?>
    <div class="show-todo-section">
        <?php if ($todos->rowCount() <= 0) { ?>
            <div class="todo-item">
                <div class="empty">
                </div>
            </div>
        <?php } ?>

        <?php while ($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="todo-item">
                    <span id="<?php echo $todo['id']; ?>"
                          class="remove-to-do">x</span>
                <?php if ($todo['checked']) { ?>
                    <input type="checkbox"
                           class="check-box"
                           data-todo-id="<?php echo $todo['id']; ?>"
                           checked/>
                    <h2 class="checked"><?php echo $todo['title'] ?></h2>
                <?php } else { ?>
                    <input type="checkbox"
                           data-todo-id="<?php echo $todo['id']; ?>"
                           class="check-box"/>
                    <h2><?php echo $todo['title'] ?></h2>
                <?php } ?>
                <br>
                <small><b> Oluşturulma Tarihi: <?php echo $todo['date_time'] ?> </b></small>
            </div>
        <?php } ?>
    </div>
    <form action="http://login/">
        <input type="submit" value="Dashboard'a Geri Dön" class="buttonReturn" />
    </form>
</div>

<script src="../assets/js/jquery-3.2.1.min.js"></script>

<script>
    $(document).ready(function () {
        $('.remove-to-do').click(function () {
            const id = $(this).attr('id');

            $.post("../controller/remove.php",
                {
                    id: id
                },
                (data) => {
                    if (data) {
                        $(this).parent().hide(600);
                    }
                }
            );
        });

        $(".check-box").click(function (e) {
            const id = $(this).attr('data-todo-id');

            $.post('../controller/check.php',
                {
                    id: id
                },
                (data) => {
                    if (data != 'error') {
                        const h2 = $(this).next();
                        if (data === '1') {
                            h2.removeClass('checked');
                        } else {
                            h2.addClass('checked');
                        }
                    }
                }
            );
        });
    });
</script>
</body>
</html>