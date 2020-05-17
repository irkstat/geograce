<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#################################">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <title>Верньер</title>
</head>

<body>
    <?php
        require "../../module_php/menu_general.php";
    ?>

    <div class="description_general">
        <h1 class="h1_description_general">Верньер</h1>
        <p class="txt_description_general"><strong>Верньер</strong> - отсчетная шкала для измерений долей делений на
            равномерной шкале, например, долей делений на лимбе теодолита или на дальномерной рейке. Для изготовления
            верньера дуга в n делений лимба делится на n + 1 частей. При измерении части деления лимба, заключенной
            между штрихом лимба и начальным (нулевым) делением верньера, некоторый штрих дуги верньера совпадает с
            направлением некоторого штриха лимба. Если T - угловая величина деления лимба, то конструктивная величина
            t<sub>0</sub> деления верньера будет:</p>
        <p class="formula_description">$$t_0 = {Tn \over n+1}$$</p>
        <p class="txt_description_general">Угловая величина и измеряемой доли деления лимба, записываемая в журнале
            измерений, будет:</p>
        <p class="formula_description">$$u=(T-t_0)k$$</p>
        <p class="txt_description_general">где:</p>
        <p class="txt_description_general">k - номер совпадающего штриха верньера, считая его начальный штрих нулевым.
        </p>

        <p class="txt_description_general">Величина (T - t<sub>0</sub>)k обычно прочитывается по подписям на верньере.
            Если, например, T = 10', n = 59, то t<sub>0</sub> = 90' 50" и T - t<sub>0</sub> = 10"</p>

        <p class="txt_description_general">Действительная угловая величина t деления верньера может отличаться от
            конструктивной t<sub>0</sub>. Если n + 1 делениям верньера соответствует дуга лимба, равная T<sub>n</sub> +
            &delta;, то будем иметь:</p>
        <p class="formula_description">$$t = t_0+{&delta; \over n+1}$$</p>
        <p class="txt_description_general">В отсчет по такому верньеру вводится поправка, равная:</p>
        <p class="formula_description">$${&delta; \over n+1}k$$</p>

        <p class="txt_description_general">Величину &delta; находят из исследований, совмещая при каждой установке
            верньера его нулевой штрих со штрихом лимба и производя затем отсчеты по другому концу дуги В., условно
            принимая его (n + 1)- й штрих за нулевой. Если, например, &delta; = + 12", то поправка на одну минуту
            отсчета по верньеру, указанному выше в примере, будет равна:</p>
        <p class="formula_description">$$+{12 \over 60}*6$$</p>
    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>