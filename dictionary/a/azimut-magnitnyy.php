<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Азимут магнитный - горизонтальный угол, отсчитываемый от северного направления магнитного меридиана до данного направления по ходу часовой стрелки от 0 до 360°.">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <title>Азимут магнитный</title>
</head>

<body>

    <?php
        require "../../module_php/menu_general.php";
    ?>
    <div class="description_general">
        <h1 class="h1_description_general">Азимут магнитный</h1>
        <p class="txt_description_general"><strong>Азимут магнитный</strong> - горизонтальный угол, отсчитываемый от
            северного направления магнитного меридиана до данного направления по ходу часовой стрелки от 0 до 360°.
            Зависимость между магнитным A<sub>M</sub> и истинным &alpha; азимутами выражается формулой</p>
        <p class="formula_description">$$A_M=\alpha - \delta$$</p>
        <p class="txt_description_general">где &delta; - склонение магнитной стрелки, принимаемое к востоку от истинного меридиана со знаком « + » и к западу со знаком « - ».</p>

    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>