<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Азимут геодезический - двугранный угол, образованный плоскостью геодезического меридиана точки наблюдения и плоскостью, проходящей через нормаль к поверхности референц-эллипсоида в точке наблюдения и данное направление">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <title>Азимут геодезический</title>
</head>

<body>

    <?php
        require "../../module_php/menu_general.php";
    ?>
    <div class="description_general">
        <h1 class="h1_description_general">Азимут геодезический</h1>
        <p class="txt_description_general"><strong>Азимут геодезический</strong> - двугранный угол, образованный
            плоскостью геодезического меридиана точки наблюдения и плоскостью, проходящей через нормаль к поверхности
            референц-эллипсоида в точке наблюдения и данное направление; отсчитывается от северного направления
            меридиана по ходу часовой стрелки от 0 до 360°. А. г. может быть получен двумя путями:</p>
        <ol class="list_description_general">
            <li>путем передачи азимутов по сторонам геодезической сети, пользуясь исходным азимутом в начальной ее
                точке, полученным при ориентировании референц-эллипсоида, и углами сети;</li>
            <li>путем определения астрономического азимута &alpha; <sub>ik</sub> и получения затем геодезического
                азимута A <sub>ik</sub> направления <em>ik</em> по формуле:</li>
        </ol>
        <p class="formula_description">$$A_{ik}=\alpha_{ik}+(L_i-\lambda_i)sin\phi_i+\delta_u+\delta_H$$</p>
        <p class="txt_description_general">где</p>
        <p class="txt_description_general">L<sub>i</sub> - геодезическая и &lambda;<sub>i</sub> - астрономическая
            долготы точки <em>i</em> ;</p>
        <p class="txt_description_general">&phi;<sub>i</sub> - астрономическая широта точки <em>i</em> ;</p>
        <p class="txt_description_general">&delta;<sub>u</sub> и &delta;<sub>H</sub> - редукционные поправки в
            направление <em>ik</em> за перенос его с земной поверхности на поверхность референц-эллипсоида, причем
            &delta;<sub>u</sub> - поправка за уклонение отвеса в точке <em>i</em>, а &delta;<sub>H</sub> - поправка за
            высоту визирной цели в точке <em>k</em>.</p>
        <p class="txt_description_general">Геодезический азимут, полученный по вышеуказанной формуле, называют азимутом
            Лапласа. Геодезический пункт, на котором были определены астрономические азимут и долгота, называют пунктом
            Лапласа, а поправочный член (L<sub>i</sub> - &lambda;<sub>i</sub>)<em>sin</em>&phi; - поправкой Лапласа.</p>
        <p class="txt_description_general">В настоящее время разработаны способы так называемого непосредственного
            получения геодезического азимута (без поправки &delta;<sub>H</sub>) из астрономических наблюдений. В этих способах необходимо иметь геодезические широту и долготу места астрономических наблюдений, но не требуется знать
            астрономический азимут (См. также <a class="link_description_general" href="#">Уклонение отвесной линии</a>).</p>
    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>