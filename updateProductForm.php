<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showProduct.php")    
    ?>

<form action="updateStudents.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="product id" type="text"><br>
        <label>Нове значення Назви</label><input name="product name" type="text"><br>
        <label>Нове значення id кольору</label><input name="color id" type="text"><br>
        <label>Нове значення id розміру</label><input name="size id" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>