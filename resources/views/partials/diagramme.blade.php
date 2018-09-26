<div class="container" style="margin-top: 100px" id="canvaSkill">
    <div class="row">
        <figure class="col-md-3 col-sm-3 text-center">
            <div class="chart" id="graph1" data-percent="80" data-color="#FF5733">
            </div>
            <figcaption>
                <h3>HTML</h3>
            </figcaption>
        </figure>
        <figure class="col-md-3 col-sm-3 text-center">
            <div class="chart" id="graph2" data-percent="80" data-color="#2D48EF">
            </div>
            <figcaption>
                <h3>CSS</h3>
            </figcaption>
        </figure>
        <figure class="col-md-3 col-sm-3 text-center">
            <div class="chart" id="graph3" data-percent="60" data-color="#FFC300"></div>
            <figcaption>
                <h3>Java Script</h3>
            </figcaption>
        </figure>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
    .row {
        font-family: 'Titillium web';
        font-weight: 400;
    }

    .chart {
        position: relative;
        width: 165px;
        height: 165px;
        margin: 0 auto;
        font-family: 'Titillium web';
        font-weight: 300;

    }

    canvas {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
    }

    span {
        color: #555;
        display: block;
        line-height: 165px;
        text-align: center;
        width: 165px;
        font-size: 40px;
        font-weight: 300;
        margin-left: 5px;
    }

</style>

<script>
    jQuery(document).ready(function () {

        var el;
        var options;
        var canvas;
        var span;
        var ctx;
        var radius;

        var createCanvasVariable = function (id) { // get canvas
            el = document.getElementById(id);
        };

        var createAllVariables = function () {
            options = {
                percent: el.getAttribute('data-percent') || 25,
                size: el.getAttribute('data-size') || 165,
                lineWidth: el.getAttribute('data-line') || 15,
                rotate: el.getAttribute('data-rotate') || 0,
                color: el.getAttribute('data-color')
            };

            canvas = document.createElement('canvas');
            span = document.createElement('span');
            span.textContent = options.percent + '%';

            if (typeof (G_vmlCanvasManager) !== 'undefined') {
                G_vmlCanvasManager.initElement(canvas);
            }

            ctx = canvas.getContext('2d');
            canvas.width = canvas.height = options.size;

            el.appendChild(span);
            el.appendChild(canvas);

            ctx.translate(options.size / 2, options.size / 2); // change center
            ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI); // rotate -90 deg

            radius = (options.size - options.lineWidth) / 2;
        };


        var drawCircle = function (color, lineWidth, percent) {
            percent = Math.min(Math.max(0, percent || 1), 1);
            ctx.beginPath();
            ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);
            ctx.strokeStyle = color;
            ctx.lineCap = 'square'; // butt, round or square
            ctx.lineWidth = lineWidth;
            ctx.stroke();
        };

        var drawNewGraph = function (id) {
            el = document.getElementById(id);
            createAllVariables();
            drawCircle('#efefef', options.lineWidth, 100 / 100);
            drawCircle(options.color, options.lineWidth, options.percent / 100);


        };
        drawNewGraph('graph1');
        drawNewGraph('graph2');
        drawNewGraph('graph3');
        drawNewGraph('graph4');


    });

</script>
