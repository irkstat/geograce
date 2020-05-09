<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Аэрофотоснимок - фотографическое изображение местности, полученное с самолета или другого летательного аппарата.">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="icon" href="/img/general/logo_geograce.svg">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <title>Аэрофотоснимок</title>
</head>

<body>
    <?php
        require "../../module_php/menu_general.php";
    ?>

    <div class="description_general">
        <h1 class="h1_description_general">Аэрофотоснимок</h1>
        <p class="txt_description_general"><strong>Аэрофотоснимок</strong> - фотографическое изображение местности, полученное с самолета или другого летательного аппарата. В геометрическом отношении А. представляет собой центральную (или иную) проекцию, центром проектирования которой служит задняя узловая точка объектива аэрофотоаппарата (АФА). В зависимости от вида аэрофотосъемки, типа АФА, которым производилась аэрофотосъемка, и последующей обработки рассматриваются аэрофотоснимки следующих наименований.</p>

        <p class="list_description_general"><strong>1. аэрофотоснимок горизонтальный</strong> - снимок полученный при строго отвесном положении оптической оси АФА. В случае плоской и без наклона местности масштаб горизонтального А. по всей его площади постоянный (см. <a class="link_description_general" href="#">Масштаб аэрофотоснимка</a>) и определяется отношением:</p>
        <p class="formula_description">$${1 \over m}={f \over H}$$</p>
        <p class="list_description_general">Привести АФА в полете в такое положение, чтобы его оптическая ось была строго отвесна, практически невозможно, поэтому горизонтальный аэрофотоснимок — явление случайное и служит лишь некоторым эталоном для сравнения с ним реальных А. в теоретических расчетах.</p>
        <p class="list_description_general"><strong>2. аэрофотоснимок плановый</strong> - снимок полученный при производстве плановой аэрофотосъемки (см. <a class="link_description_general" href="#">Аэрофотосъемка</a>). Отклонение оптической оси АФА от отвесного положения при этом обычно не превосходит 3°, поэтому масштаб планового А. при измерениях, не требующих высокой точности, определяется по той же формуле, что и горизонтального А. В равнинных районах плановым А., если известен его масштаб, можно пользоваться в измерительных целях так же, как и картой, при этом ошибка в определении расстояний не превысит 1 - 2 мм по сравнению с тем, как если бы А. был горизонтальным. Если, пользуясь плановым А., требуется определить расстояние на местности так, чтобы ошибка не превышала заданной величины &Delta;, то аэрофотоснимком можно пользоваться лишь в пределах окружности, описанной из координатной точки аэрофотоснимка радиусом r, величину которого можно вычислить по формуле:</p>
        <p class="formula_description">$$r=\sqrt{\Delta f60\over m \alpha}$$</p>

        <p class="txt_description_general">Где:</p>
        <p class="txt_description_general">&Delta; - допустимая ошибка, выраженная в тех же мерах, что и f;</p>
        <p class="txt_description_general">f - фокусное расстояние камеры АФА;</p>
        <p class="txt_description_general">m - знаменатель масштаба аэрофотоснимка;</p>
        <p class="txt_description_general">&alpha; - угол наклона аэрофотоснимка, выраженный в градусах (см. также <a class="link_description_general" href="#">Искажения на аэрофотоснимке.</a>)</p>
        <p class="txt_description_general"><em>Пример:</em></p>
        <p class="txt_description_general">Даны плановые аэрофотоснимки масштаба 1 : 20 ООО, сфотографированные камерой с фокусным расстоянием f = 140 мм. Требуется определить по ним расстояния с ошибкой, не превышающей 10 м на местности, т. е. &Delta; = 10 ООО мм, если &alpha; = 2°. В данном случае аэрофотоснимком можно пользоваться в пределах окружности радиуса</p>
        <p class="formula_description">$$r=\sqrt{10000*100*60\over 20000*2}=46 мм$$</p>
        <p class="txt_description_general">Если аэрофотосъемка производилась с гиростабилизирующей установкой, то угол &alpha; не превосходит 0,5°. В этом случае при вышеприведенных исходных данных плановый аэрофотоснимок может быть использован в радиусе 90 мм, т. е. в пределах всей площади А. формата 18x18 см. В холмистой местности в положение точек, между которыми определяется расстояние, следует ввести поправки за рельеф (см. <a class="link_description_general" href="#">Искажения на аэрофотоснимке.</a>); аэрофотоснимки горной местности в измерительных целях могут быть использованы лишь с применением соответствующих фотограмметрических приборов.</p>

        <p class="list_description_general"><strong>3. аэрофотоснимок перспективный</strong> — снимок, полученный при перспективной аэрофотосъемке. Местность на перспективном аэрофотоснимке изображается без сохранения подобия фигур, масштаб аэрофотоснимка в разных его частях различен. Например, при угле наклона &alpha; = 40°, высоте съемки H = 4000 м и фокусном расстоянии f = 200 мм масштаб по горизонтали переднего плана будет около 1 : 20 000, а по горизонтали заднего плана - около 1 : 40 000. Следовательно, пользоваться перспективным аэрофотоснимком в измерительных целях без применения фотограмметрических приборов нельзя. Перспективные А. широко используются при аэрофоторазведке, так как на них фотографируется большая площадь, чем на плановых, а в некоторых случаях облегчается и дешифрирование.</p>


        <p class="list_description_general"><strong>4. аэрофотоснимок цветной</strong> - снимок, на котором местность изображается в цветах, близких к натуральным. По сравнению с черно-белыми аэрофотоснимками на цветных появляется дополнительный дешифровочный признак - цвет. На аэрофотоснимке цветном легче, полнее и достовернее дешифрируется растительный покров, реки, болота, населенные пункты и другие объекты местности. Для получения А.ц. используют специальные трех слойные фотографические материалы.</p>
        <p class="list_description_general"><strong>5. аэрофотоснимок спектрозональный</strong> - цветной аэрофотоснимок, на котором объекты местности изображаются не в натуральных, присущих им цветах, а в условных, резко отличных один от другого, например, в пурпурном и голубом, красном и зеленом. Благодаря этому различные объекты четко отличаются друг от друга по своей окраске. Спектрозоиальные аэрофотоснимки позволяют легче обнаруживать замаскированные объекты, породы леса, типы почв и т. п. Для получения спектрозональных аэрофотоснимков используют специальные фотографические материалы, чаще всего двухслойные, позволяющие фотографировать местность в таких спектральных зонах, в которых контраст объектов наибольший.</p>
        <p class="list_description_general"><strong>6. аэрофотоснимок топографический</strong> - снимок, полученный топографическим АФА. А.т. отличается большой разрешающей способностью и высокой точностью построения изображения. На А. т. фиксируются координатные метки и координатная точка, величина фокусного расстояния АФА, уровень, перекрестия контрольной сетки или метки, позволяющие учесть деформацию снимка, дата фотографирования, номер снимка и другие сведения, имеющие значение при фотограмметрической обработке аэрофотоснимков.</p>
        <p class="list_description_general"><strong>7. аэрофотоснимок панорамный</strong> - снимок, полученный панорамным АФА. По геометрическим свойствам является перспективным снимком, масштаб в центральной его части близок к плановому и становится тем мельче, чем ближе изображение к горизонту. Размер сторон, параллельных линии полета, равен ширине фотопленки; поперек линии полета размер А. панорамного зависит от величины угла сканирования и фокусного расстояния АФА. Для картографирования аэрофотоснимок топографический не используется.</p>
        <p class="list_description_general"><strong>8. аэрофотоснимок щелевой</strong> - снимок, полученный щелевым АФА, представляет собой сплошной фильм (без разделений на отдельные кадры) длиной, в зависимости от емкости кассеты, 60 или 120 м. По геометрическим свойствам А.щ. близок к плановым аэрофотоснимкам. В целях картографирования не используется.</p>
        <p class="list_description_general"><strong>9. аэрофотоснимок ортогональный</strong> - фотографическое изображение местности в ортогональной проекции. Получаются путем дифференциального трансформирования плановых аэрофотоснимков на щелевом фототрансформаторе, ортофотопроекторе или на других фотограмметрических приборах, снабженных устройством для проектирования через щель.</p>
        <p class="list_description_general"><strong>10. аэрофотоснимок трансформированный</strong> - плановый или перспективный аэрофтоснимок, приведенный к горизонтальному посредством трансформирования.</p>
        <p class="txt_description_general"></p>

    </div>

    <?php
        require "../../module_php/footer_general.php";
    ?>

    <script src="/js/mobile_menu_general.js"></script>
</body>

</html>