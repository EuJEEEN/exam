<?php
include "index.php";
include "comments.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Страница</title>

</head>

<body>
    <form enctype="multipart/form-data" method="POST" action="">
        <div class="card mb-3" style="max-width: 1400px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="image\mobile.gif" name="pic" alt="mobile">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Смартфон Xiaomi Redmi 9A 2/32GB Black</h5>
                        <p class="text">
                            - Поддержка стандартов связи: 4G/LTE (B1/2/3/4/5/7/8/20/28/38/40/41); 3G/WCDMA (B1/2/4/5/8); GSM 850/900/1800/1900 МГц; два слота под SIM карты
                            - Размеры: 164,9х77,07х9 мм
                            - Вес: 196 г
                            - Платформа: MIUI 12 на базе Android 10
                            - Процессор: 2 ГГц, восьмиядерный, MediaTek Helio G25
                            - Дисплей: 6,53-дюймовый, разрешением 720×1600 пикселей
                            - Основная камера: 13 МП, фазовый автофокус, светодиодная подсветка; поддержка Full HD видеосъёмки
                            - Фронтальная камера: 5 МП, f/2.2
                            - FM-радио
                            - Память: 2 Гб ОЗУ (LPDDR4X), 32 Гб встроенной (eMMC 5.1), слот под microSD карты памяти
                            - Коммуникации: Wi-Fi 802.11 b/g/n, Bluetooth 5.0, micro USB, GPS/AGPS/ГЛОНАСС/Beidou, аудио разъём 3,5 мм
                            - Аккумулятор: 5000 мАч
                            - Прочее: Акселерометр, Датчики приближения и освещения.</p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </div>
            </div>
        </div>

        <p><input type="text" required name="email" placeholder="введите email"></p>
        <p><input type="text" required name="name" placeholder="Имя" maxlength="6"></p>
        <p><input type="text" required name="surname" placeholder="Фамилия" maxlength="9"></p>
        <p><textarea name="message" rows="2" cols="30" maxlength="1000" placeholder="Коментарий:"></textarea></p>
        <p><input type="file" name="f" value="image"></p>
        <p><b>Оцените товар</b></p>
        <input type="radio" required name="appraisal" value="5">5
        <input type="radio" required name="appraisal" value="4">4
        <input type="radio" required name="appraisal" value="3">3
        <input type="radio" required name="appraisal" value="2">2
        <input type="radio" required name="appraisal" value="1">1

        <p><input type="submit" name="submit" value="Отправить"></p>
        <input type="hidden" name="action" value="create">
    </form>

</body>

</html>
<script>

</script>