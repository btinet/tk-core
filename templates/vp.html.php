<div class="l-docs__title" id="main-content">
    <div class="p-section--shallow">
        <div class="row">
            <div class="col-12">
                <h1>Vertretungsplan</h1>
            </div>
        </div>
    </div>
</div>

<div class="l-docs__meta">
    <div class="l-docs__sticky-container">
        <aside class="p-table-of-contents">
            <div class="p-table-of-contents__section p-strip is-shallow">
                <h2 class="p-table-of-contents__header">Auf dieser Seite</h2>
                <nav class="p-table-of-contents__nav" aria-label="Table of contents">
                    <ul class="p-table-of-contents__list">
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
</div>

<main>


<section class="p-section">
    <div class="row">
        <div class="col">
           Übungsprojekt zur Modernisierung des Vertretungsplans.
        </div>
        <div class="col">
            <canvas id="myCanvas" width="400" height="380" onmousedown="start_stop();">
                Der aktuelle Browser unterst&uuml;tzt kein HTML5 / canvas. Es wird empfohlen, eine neuere Version von Mozilla Firefox oder Google Chrome als Browser zu verwenden.
            </canvas>

            <div id="fps" style="color: #666666;">fps = 0</div>

            <script>
                var canvas = document.getElementById('myCanvas');
                var context = canvas.getContext('2d');
                var n = canvas.width;
                var m = canvas.height-80;

                window.requestAnimFrame = (function(callback) {
                    return window.requestAnimationFrame ||
                        window.webkitRequestAnimationFrame ||
                        window.mozRequestAnimationFrame ||
                        window.oRequestAnimationFrame ||
                        window.msRequestAnimationFrame ||
                        function(callback) {
                            window.setTimeout(callback, 10);
                        };
                })();

                init();
                animate(canvas, context);
            </script>
        </div>
    </div>
</section>

</main>