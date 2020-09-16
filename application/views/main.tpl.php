<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <p>Телефон: (499) 340-94-71</p>
                <p>Email: info@future-group.ru</p>   
                <h1>Комментарии</h1>
            </div>
            <div class="col">
                <img src="images/logo.png" />
            </div>
        </div>
    </div>
</header>

<div class="main-content">
    <div class='container'>
    <?php 
        $db = DB::connToDB();
        $sth = $db->prepare("SELECT * FROM comments ORDER BY date DESC");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        for ($row = 0; $row < count($array); $row++) {
            echo "
                <div class='row'>
                    <div class='col-3'id='name'>" . $array[$row]["name"] ."</div>
                    
                    <div class='col-4'id='date'>". $array[$row]["date"] . "</div>
                </div>";
                echo "<div class='col-9' id='comment'>" . $array[$row]["comment"] . "</div>
            ";
        }
    ?>
    </div>
    <div class='container'>
        <div class="col-5">
            <form method="post">
                <h2>Оставить комментарий</h2>
                <p><label for="name">Ваше имя</label></p>
                <p><input type="text" name="name" required></p>
                <p><label for="comment">Ваш комментарий</label></p>
                <p><textarea name="comment" required></textarea></p>
                <p><button type="submit">Отправить</button></p>
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/logo.png" />
            </div>
            <div class="col-9">
                <p>Телефон: (499) 340-94-71</p>
                <p>Email: info@future-group.ru</p>
                <p>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                <p class="p">© 2010 - 2014 Future. Все права защищены</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>