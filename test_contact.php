

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная форма</title>
</head>
<body>


    <form action="send_message.php" method="POST">
        <div class="title">Сўров жўнатиш</div>
        <div class="row">
            <div class="col-md-12">
                <input type="text" name="fullname" placeholder="Исм-шарифингиз" required>
                <input type="email" name="email" placeholder="Электрон почта" required>
                <input type="text" name="phone" placeholder="Телефон номер">
                <input type="text" name="company" placeholder="Корхона номи">
            </div>
            <div class="col-md-12">
                <textarea name="message" placeholder="Хабар матни" required></textarea>
                <input type="submit" value="Жўнатиш">
            </div>
        </div>
    </form>

</body>
</html>
