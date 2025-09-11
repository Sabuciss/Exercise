<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="main-container">

        <div class="left-container">

    <div class="workout-tabs">
        <button class="workout-tab active" onclick="openWorkoutTab(event, 'full-body')">Full body</button>
        <button class="workout-tab" onclick="openWorkoutTab(event, 'upper-body')">Upper body</button>
        <button class="workout-tab" onclick="openWorkoutTab(event, 'lower-body')">Lower body</button>
    </div>

    <div id="full-body" class="workout-content" style="display:block;">
        <h3>Select muscle groups:</h3>
        <label><input type="checkbox" value="Chest"> Chest</label>
        <label><input type="checkbox" value="Back"> Back</label>
        <label><input type="checkbox" value="Legs"> Legs</label>
        <label><input type="checkbox" value="Arms"> Arms</label>
        <label><input type="checkbox" value="Shoulders"> Shoulders</label>
        <button onclick="generateWorkout('full-body')">Generate Workout</button>
        <div class="workout-result" id="result-full-body"></div>
    </div>

    <div id="upper-body" class="workout-content">
        <h3>Select muscle groups:</h3>
        <label><input type="checkbox" value="Chest"> Chest</label>
        <label><input type="checkbox" value="Biceps"> Biceps</label>
        <label><input type="checkbox" value="Triceps"> Triceps</label>
        <label><input type="checkbox" value="Shoulders"> Shoulders</label>
        <label><input type="checkbox" value="Back"> Back</label>
        <button onclick="generateWorkout('upper-body')">Generate Workout</button>
        <div class="workout-result" id="result-upper-body"></div>
    </div>

    <div id="lower-body" class="workout-content">
        <h3>Select muscle groups:</h3>
        <label><input type="checkbox" value="Quads"> Quads</label>
        <label><input type="checkbox" value="Hamstrings"> Hamstrings</label>
        <label><input type="checkbox" value="Glutes"> Glutes</label>
        <label><input type="checkbox" value="Calves"> Calves</label>
        <button onclick="generateWorkout('lower-body')">Generate Workout</button>
        <div class="workout-result" id="result-lower-body"></div>
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