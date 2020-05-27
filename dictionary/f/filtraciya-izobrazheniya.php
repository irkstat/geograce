<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Фильтрация изображения метод обработки и анализа изображения, применяемый для ослабления помех, снижающих качество изображения, коррекции изображения, обнаружения и выделения заданных элементов (фигур, областей), распознавания (классификации) обнаруженных изображений объектов, идентификации изображений одного участка местности па разных фотоснимках.">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
    <title>Фильтрация изображения</title>
</head>

<body>
    <?php
        require "../../module_php/menu_general.php";
    ?>
    <div class="description_general">
        <h1 class="h1_description_general">Фильтрация изображения</h1>
        <p class="txt_description_general"><strong>Фильтрация изображения</strong> &ndash; метод обработки и анализа
            изображения, применяемый для ослабления помех, снижающих качество изображения, &ndash; коррекции
            изображения, обнаружения и выделения заданных элементов (фигур, областей), распознавания (классификации)
            обнаруженных изображений объектов, идентификации изображений одного участка местности па разных фотоснимках
            и т. д. Фильтрация изображения выполняется в «пространственной области» &ndash; над исходными изображениями
            и в «частотной области» &ndash; над спектром пространственных частот изображения (обычно над преобразованием
            Фурье исходного изображения).</p>
        <br>
        <p class="txt_description_general">Для аналоговой (оптической) фильтрации в целях распознавания объектов
            предварительно синтезируются фильтры &ndash; фотографическое изображение спектров Фурье изображений
            объектов, подлежащих классификации. Для цифровой фильтрации изображения, выполняемой на ЭВМ, составляются
            программы фильтрации в соответствии с решаемой задачей. По отклику распознающей системы
            (алгоритма распознавания) на предъявляемую совокупность объектов, анализируемую данным фильтром, судят о
            наличии соответствующего объекта на изображении. </p>
    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>