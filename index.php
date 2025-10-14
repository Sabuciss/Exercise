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
                    <img class="recipe-img" src="/img/1.jpeg" alt="Bulking Food">
                    <div class="recipe-info">
                    <div class="recipe-title">Chicken & Chorizo Jambalaya</div>
                    <div class="recipe-desc">Augstas kalorijas un olbaltumvielas – lieliski masas palielināšanai.</div>
                    <a class="recipe-link" href="https://www.bbcgoodfood.com/recipes/chicken-chorizo-jambalaya" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/2.webp" alt="Curried Tofu Wraps">
                    <div class="recipe-info">
                    <div class="recipe-title">Curried Tofu Wraps</div>
                    <div class="recipe-desc">Vegan draudzīgs, ar augstu olbaltumvielu un šķiedrvielu saturu.</div>
                    <a class="recipe-link" href="https://www.bbcgoodfood.com/recipes/curried-tofu-wraps" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/3.jpeg" alt="Peanut Butter Chicken">
                    <div class="recipe-info">
                    <div class="recipe-title">Peanut Butter Chicken</div>
                    <div class="recipe-desc">Garšīga un sātīga vistas recepte ar zemesriekstu mērci.</div>
                    <a class="recipe-link" href="https://www.bbcgoodfood.com/recipes/peanut-butter-chicken" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/4.webp" alt="Egg White Oatmeal">
                    <div class="recipe-info">
                    <div class="recipe-title">Egg White Oatmeal</div>
                    <div class="recipe-desc">Viegla un sātīga brokastu recepte ar olbaltumvielām.</div>
                    <a class="recipe-link" href="https://www.eatingbirdfood.com/egg-white-oatmeal/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/5.jpeg" alt="Beef and Rice">
                    <div class="recipe-info">
                    <div class="recipe-title">Beef and Rice Bowl</div>
                    <div class="recipe-desc">Sātīgs ēdiens ar olbaltumvielām un ogļhidrātiem.</div>
                    <a class="recipe-link" href="https://www.legionathletics.com/bulking-recipes/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/6.webp" alt="Protein Smoothie">
                    <div class="recipe-info">
                    <div class="recipe-title">Protein Smoothie</div>
                    <div class="recipe-desc">Viegla uzkoda ar proteīnu un augļiem.</div>
                    <a class="recipe-link" href="https://www.bbcgoodfood.com/recipes/berry-protein-smoothie" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/7.jpg" alt="Chickpeas and Veggies">
                    <div class="recipe-info">
                    <div class="recipe-title">Chickpeas & Veggies</div>
                    <div class="recipe-desc">Veselīgs veids, kā palielināt kalorijas dienas laikā.</div>
                    <a class="recipe-link" href="https://www.thegardengrazer.com/roasted-vegetables-and-chickpeas/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/8.jpeg" alt="High-Calorie Salad">
                    <div class="recipe-info">
                    <div class="recipe-title">High-Calorie Salad</div>
                    <div class="recipe-desc">Bagāta ar olbaltumvielām un veselīgām omega-3 taukvielām.</div>
                    <a class="recipe-link" href="https://thegeriatricdietitian.com/high-calorie-salads/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                </div>

                <div id="leaning" class="tabcontent">
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/9.jpeg" alt="Eggs and Avocado">
                    <div class="recipe-info">
                    <div class="recipe-title">Eggs and Avocado</div>
                    <div class="recipe-desc">Vieglas maltītes kaloriju samazināšanai.</div>
                    <a class="recipe-link" href="https://www.allrecipes.com/recipe/265304/avocado-toast-with-egg/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/10.jpeg" alt="Grilled Fish with Veggies">
                    <div class="recipe-info">
                    <div class="recipe-title">Grilled Fish with Vegetables</div>
                    <div class="recipe-desc">Zema tauku un kaloriju maltīte ar olbaltumvielām.</div>
                    <a class="recipe-link" href="https://www.dianekochilas.com/grilled-whole-fish-and-summer-vegetables/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/11.jpeg" alt="Yogurt with Berries">
                    <div class="recipe-info">
                    <div class="recipe-title">Yogurt with Berries</div>
                    <div class="recipe-desc">Veselīgs uzkoda ar olbaltumvielām un antioksidantiem.</div>
                    <a class="recipe-link" href="https://gratefulgrazer.com/greek-yogurt-bowls/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/12.jpeg" alt="Vegetable Soup">
                    <div class="recipe-info">
                    <div class="recipe-title">Vegetable Soup</div>
                    <div class="recipe-desc">Viegla un veselīga maltīte ar daudz šķiedrvielām.</div>
                    <a class="recipe-link" href="https://www.cookingclassy.com/vegetable-soup/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/13.jpeg" alt="Spinach Omelette">
                    <div class="recipe-info">
                    <div class="recipe-title">Spinach Omelette</div>
                    <div class="recipe-desc">Olbaltumvielu avots ar veselīgām lapu dārzeņu iezīmēm.</div>
                    <a class="recipe-link" href="https://www.allrecipes.com/recipe/69471/baby-spinach-omelet/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/14.jpeg" alt="Fresh Fruits">
                    <div class="recipe-info">
                    <div class="recipe-title">Fresh Fruits</div>
                    <div class="recipe-desc">Dabisks un veselīgs saldums bez kaloriju palielināšanas.</div>
                    <a class="recipe-link" href="https://small.lv/veseligas-un-garsigas-auglu-plates-recepte-radosa-uzkoda-jusu-pasakumiem/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/15.jpeg" alt="Ginger Green Tea">
                    <div class="recipe-info">
                    <div class="recipe-title">Ginger Green Tea</div>
                    <div class="recipe-desc">Palīdz vielmaiņai un kaloriju dedzināšanā.</div>
                    <a class="recipe-link" href="https://www.whiskaffair.com/ginger-green-tea/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                </div>

                <div id="constant" class="tabcontent">
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/16.jpeg" alt="Toast with Omelette">
                    <div class="recipe-info">
                    <div class="recipe-title">Toast with Omelette</div>
                    <div class="recipe-desc">Ideāli kaloriju uzturēšanai līmenī.</div>
                    <a class="recipe-link" href="https://www.indianhealthyrecipes.com/bread-omelet-sandwich-recipe/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/17.jpeg" alt="Veggie Wrap">
                    <div class="recipe-info">
                    <div class="recipe-title">Veggie Wrap</div>
                    <div class="recipe-desc">Pilngraudu wrap ar dārzeņiem un sieru.</div>
                    <a class="recipe-link" href="https://tastesbetterfromscratch.com/hummus-edamame-veggie-wrap/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/18.jpeg" alt="Chicken Salad">
                    <div class="recipe-info">
                    <div class="recipe-title">Chicken Salad</div>
                    <div class="recipe-desc">Viegla, olbaltumvielām bagāta maltīte.</div>
                    <a class="recipe-link" href="https://www.spendwithpennies.com/classic-chicken-salad-recipe/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/19.jpeg" alt="Yogurt Parfait">
                    <div class="recipe-info">
                    <div class="recipe-title">Yogurt Parfait</div>
                    <div class="recipe-desc">Svaigs deserts ar augļiem un granolu.</div>
                    <a class="recipe-link" href="https://www.allrecipes.com/recipe/37095/yogurt-parfait/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/20.jpeg" alt="Smoothie">
                    <div class="recipe-info">
                    <div class="recipe-title">Green Mango Smoothie</div>
                    <div class="recipe-desc">Viegls dzēriens ar vitamīniem un minerālvielām.</div>
                    <a class="recipe-link" href="https://www.wellplated.com/mango-green-smoothie-recipe/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/21.webp" alt="Egg Sandwich">
                    <div class="recipe-info">
                    <div class="recipe-title">Egg Sandwich</div>
                    <div class="recipe-desc">Vienkārša un barojoša maltīte ar olbaltumvielām.</div>
                    <a class="recipe-link" href="https://www.allrecipes.com/recipe/139551/egg-sandwich/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/22.jpeg" alt="Vegetable Stir Fry">
                    <div class="recipe-info">
                    <div class="recipe-title">Vegetable Stir Fry</div>
                    <div class="recipe-desc">Veselīga dārzeņu un olbaltumvielu kombinācija.</div>
                    <a class="recipe-link" href="https://www.loveandlemons.com/stir-fry-recipe/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                <div class="recipe-row">
                    <img class="recipe-img" src="/img/22.jpeg" alt="Oatmeal">
                    <div class="recipe-info">
                    <div class="recipe-title">Oatmeal with Fruits</div>
                    <div class="recipe-desc">Viegla brokastu maltīte ar šķiedrvielām un vitamīniem.</div>
                    <a class="recipe-link" href="https://www.forksoverknives.com/recipes/vegan-breakfast/fruit-and-nut-healthy-oatmeal/" target="_blank">Apskati recepti</a>
                    </div>
                </div>
                </div>

            </div>
        </div>


    </div>    

    <script src="script.js"></script>

</body>
</html>