<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Азимут прямого нормального сечения - двугранный угол, образованный плоскостью         геодезического меридиана исходной точки и плоскостью, проходящей через нормаль к поверхности эллипсоида в этой точке и заданную вторую точку">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <title>Азимут прямого нормального сечения</title>
</head>

<body>

    <?php
        require "../../module_php/menu_general.php";
    ?>
    <div class="description_general">
        <h1 class="h1_description_general">Азимут прямого нормального сечения</h1>
        <p class="txt_description_general"><strong>Азимут прямого нормального сечения </strong> - двугранный угол,
            образованный плоскостью геодезического меридиана исходной точки и плоскостью, проходящей через нормаль к
            поверхности эллипсоида в этой точке и заданную вторую точку; отсчитывается от северного направления
            меридиана по ходу часовой стрелки от 0 до 360°. Азимут A <sub>1,2</sub> нормального в точке 1
            (B<sub>1</sub>, L<sub>1</sub>) сечения, проходящего через точку 2 (B<sub>2</sub>, L<sub>2</sub>), может быть
            вычислен по следующим формулам, предложенным Б. С. Кузьминым:</p>
        <p class="formula_description">$$m=(1-e^2)tgB_2$$
            $$n=e^2\frac{N_1sinB_1}{N_2sinB_2}$$
            $$ctg\omega=m(1+n)$$
            $$p=ctg\omega*cosB_1$$
            $$q=cos(L_2-L_1)sinB_1$$
            $$tgA_{1.2}=\frac{sin(L_2-L_1)}{p-q}$$</p>
        <p class="txt_description_general">В этих формулах:</p>
        <p class="txt_description_general">B<sub>1</sub>, B<sub>2</sub> и L<sub>1</sub>, L<sub>2</sub> - географические
            (геодезические) широты и долготы точек;</p>
        <p class="txt_description_general">N<sub>1</sub> и N<sub>2</sub> - радиусы кривизны первого вертикала для точек
            с широтами B<sub>1</sub> и B<sub>2</sub>;</p>
        <p class="txt_description_general">e<sup>2</sup> = 0,006693421623 (для эллипсоида Красовского) - квадрат
            эксцентриситета меридианного элиипса;</p>
        <p class="formula_description">$$e'\;^2=\frac{e^2}{1-e^2}=0,006738525415$$</p>
        <p class="txt_description_general">Формулы дают точное значение азимута прямого нормального сечения при любых
            расстояниях.</p>
        <p class="txt_description_general"><em>Пример</em></p>
        <p class="txt_description_general">Дано: B<sub>1</sub> = 43°15'24.76"; B<sub>2</sub> = 63°18'34.65"; L<sub>1</sub> - L<sub>2</sub> = -30°12'59.72"</p>
        <p class="txt_description_general">По приведенным выше указанным формулам найдем A <sub>1,2</sub> = 239°29'42.5"</p>

    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>