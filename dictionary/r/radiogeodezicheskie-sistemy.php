<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Радиогеодезические системы совокупность нескольких взаимодействующих друг с другом радиотехнических станций, предназначенных для определения одной из них, если положение других известно.">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
    <title>Радиогеодезические системы</title>
</head>

<body>
    <?php
        require "../../module_php/menu_general.php";
    ?>
    <div class="description_general">
        <h1 class="h1_description_general">Радиогеодезические системы</h1>
        <p class="txt_description_general"><strong>Радиогеодезические системы</strong> &ndash; совокупность нескольких
            взаимодействующих друг с другом радиотехнических станций, предназначенных для определения одной из них, если
            положение других известно. Положение станций определяется линейными круговыми (или гиперболическими)
            засечками или методом трилатерации. Существуют радиогеодезические системы высокоточные круговые
            (дальномерные) и гиперболические (разностно&ndash;дальномерные) пониженной точности.</p>
        <br>
        <p class="txt_description_general">Высокоточные круговые радиогеодезические системы работают по принципу
            радиодальномера «Теллурометр» на ультракоротких волнах, поэтому дальность их действия ограничивается
            пределами прямой геометрической видимости. Рабочий комплект круговой радиогеодезической системы включает
            две или три наземные станции, работающие как ведомые станции радиодальномера, и одну самолетную
            (вертолетную) станцию, работающую как двух&ndash;трехканальная ведущая станция радиодальномера. Размещение
            основной станции системы на самолете или вертолете обеспечивает прямую видимость на значительные, в
            несколько сотен километров расстояния. Положение станции на самолете определяется по двум&ndash;трем
            расстояниям, одновременно измеренным до наземных станций, и измеренной высотомером высоте самолета. Целью
            таких измерений является или определение координат точек надира на аэрофотоснимках (при аэрофотосъемках с
            картографическими целями), или определение координат контурных точек местности. В первом случае моменты
            измерений необходимо синхронизировать с моментами срабатывания затвора аэрофотоаппарата. Во втором случае
            измерения выполняют, когда летательный аппарат будет находиться по отвесной линии над соответствующей
            контурной точкой.</p>
        <br>
        <p class="txt_description_general">Высокоточными радиогеодезическими системами можно также развивать
            геодезические сети методом трилатерации со сторонами длиной в несколько сотен километров. Измерения таких
            сторон выполняют методом пересечения створа. Две наземные станции располагают на соседних пунктах
            трилатерации. Самолет в горизонтальном полете пересекает створную плоскость между наземными станциями
            примерно посредине. Около створа до его прохождения и после измеряют несколько пар наклонных расстояний до
            наземных станций. В результате обработки измеренных величин и их редуцирования на поверхность относимости
            получают длину стороны трилатерации.</p>
        <br>
        <p class="txt_description_general">Гиперболическими радиогеодезическими системами определяют плановые координаты
            по измерениям двух разностей расстояний от определяемого пункта до трех исходных, положение которых
            известно. Комплект гиперболической системы состоит из трех базисных передающих станций, развертываемых на
            пунктах с известными координатами, и неограниченного числа подвижных приемоиндикаторных станций.
            Гиперболические радиогеодезические системы работают обычно на средних радиоволнах, чем обеспечивается
            возможность измерений вне прямой видимости. При этом измерительная информация может поступать на
            приемоиндикаторы двумя путями: вдоль поверхности Земли по рефракционным кривым и с отражением радиоволн от
            слоев ионосферы. При передаче информации первым путем точность измерений более высокая, зато на
            пространственных волнах увеличивается дальность действия системы. В зависимости от характера решаемых задач
            используют оба пути.</p>
    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>