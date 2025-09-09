<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main-container">

        <div class="left-container">
            <div class="full-body">
                <h2>Full body</h2>
            </div>

            <div class="upper-body">
                <h2>Upper body</h2>
            </div>

            <div class="lower-body">
                <h2>Lower body</h2>
            </div>
        </div>

        <div class="right-container">

            <div class="tabs">
                <button class="tablinks active" onclick="openTab(event, 'bulking')">Bulking</button>
                <button class="tablinks" onclick="openTab(event, 'leaning')">Leaning</button>
                <button class="tablinks" onclick="openTab(event, 'constant')">Constant</button>
            </div>

            <div id="bulking" class="tabcontent" style="display:block;">
                <div class="recipe-row">

                <img class="recipe-img" src="bulking-food.jpg" alt="Bulking Food">
                <div class="recipe-info">
                    <div class="recipe-title">Bulking: Vistas un rīsi</div>
                    <div class="recipe-desc">Liels vistas un rīsu šķīvis – piemērots kaloriju palielināšanai muskuļu masas audzēšanai.</div>
                    <a class="recipe-link" href="https://piemers-recepte.lv/bulking" target="_blank">Apskati recepti</a>
                </div>
                
                </div>
            </div>

            <div id="leaning" class="tabcontent">
                <div class="recipe-row">

                <img class="recipe-img" src="leaning-food.jpg" alt="Leaning Food">
                <div class="recipe-info">
                    <div class="recipe-title">Leaning: Olas un avokado</div>
                    <div class="recipe-desc">Vārītas olas un avokado – vieglas maltītes kaloriju samazināšanai.</div>
                    <a class="recipe-link" href="https://piemers-recepte.lv/leaning" target="_blank">Apskati recepti</a>
                </div>

                </div>
            </div>

            <div id="constant" class="tabcontent">
                <div class="recipe-row">

                <img class="recipe-img" src="constant-food.jpg" alt="Constant Food">
                <div class="recipe-info">
                    <div class="recipe-title">Constant: Grauzdiņš ar omleti</div>
                    <div class="recipe-desc">Pilngraudu grauzdiņš ar omleti – ideāli kaloriju uzturēšanai līmenī.</div>
                    <a class="recipe-link" href="https://piemers-recepte.lv/constant" target="_blank">Apskati recepti</a>
                </div>


                </div>
            </div>
        </div>


    </div>    

    <script src="script.js"></script>

</body>
</html>