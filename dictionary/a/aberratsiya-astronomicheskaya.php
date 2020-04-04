<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Аберрация  астрономическая -явление, состоящее в том, что на результаты измерения направлений на небесные светила оказывают влияние годичное движение Земли вокруг солнца">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <title>Аберрация астрономическая</title>
</head>

<body>
    <?php
        require "../../module_php/menu_general.php";
    ?>

    <div class="description_general">
        <h1 class="h1_description_general">Аберрация астрономическая</h1>
        <p class="txt_description_general"><strong>Аберрация астрономическая</strong> (лат. aberratio, от ab от и
            errare блуждать, уклоняться) – явление, состоящее в том, что на результаты измерения направлений на
            небесные светила оказывают влияние годичное движение Земли вокруг Солнца и суточное вращение ее вокруг
            своей оси.</p>
        <br>
        <p class="txt_description_general">На рис. 1: &sigma; - небесное светило, О – оптический центр объектива, К
            — центр сетки нитей зрительной трубы. Если угломерный прибор находится в покое относительно звезд, то
            при визировании на светило визирный луч &sigma; ОК будет прямолинеен. Но если прибор перемещается со
            скоростью &upsilon; в некотором направлении КА, то за время t, за которое свет пройдет отрезок ОК, точка
            К переместится в направлении КА на расстояние КК<sub>1</sub> = &upsilon; t.
        </p>

        <figure>
            <img class="img_description_general" style="max-width: 200px;"
                src="/img/dictionary/a/aberratsiya-astronomicheskaya-ris1.svg" alt="Аберрация астрономическая">
            <figcaption class="figcaption_general">Рис. 1 Аберрация астрономическая</figcaption>
        </figure>

        <p class="txt_description_general">Чтобы изображение светила &sigma; оказалось в точке К, зрительную трубу при
            визировании необходимо предварительно наклонить в сторону направления движения на некоторый угол &gamma;
            так, чтобы К<sub>2</sub>К было равно КК<sub>1</sub>. Если например, КА &perp; К&sigma;, то</p>
        <p class="formula_description">$$ \gamma \;\;\;\; \rho'' \; \frac{v t}{ct} = \rho'' \; \frac{v}{c}$$</p>
        <p class="txt_description_general">где р'' = 206 265'' и с = 300 000 км/с.</p>
        <p class="txt_description_general">Скорость &upsilon; суточного перемещения наблюдателя может достигать
            0.5 км/с, а годичного 30 км/с. Влияние суточной А. учитывается при обработке астрономических наблюдений.
            Влияние годичной А. учитывается при определении координат небесных тел. Явление А. было открыто
            английским астрономом Джемсом Брадлеем в 1728 г.</p>
    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>