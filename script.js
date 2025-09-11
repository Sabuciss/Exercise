
// scripts priekš pogam lai parādītu ēdienu sadaļās
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].classList.remove("active");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
  }


// Exercise daļa no script
function openWorkoutTab(evt, tabName) {

  const contents = document.getElementsByClassName("workout-content");
  for (let i = 0; i < contents.length; i++) {
    contents[i].style.display = "none";
  }

  const tabs = document.getElementsByClassName("workout-tab");
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("active");
  }

  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.classList.add("active");
}

const workouts = {
  "Chest": ["Bench Press", "Push-Ups", "Incline Dumbbell Press", "Chest Fly", "Cable Crossover"],
  "Back": ["Pull-Ups", "Deadlift", "Barbell Row", "Lat Pulldown", "Single Arm Dumbbell Row"],
  "Legs": ["Squats", "Lunges", "Leg Press", "Step-Ups", "Leg Extensions"],
  "Arms": ["Bicep Curls", "Tricep Dips", "Hammer Curls", "Skull Crushers", "Close-Grip Pushups"],
  "Shoulders": ["Overhead Press", "Lateral Raises", "Arnold Press", "Front Raises", "Upright Row"],
  "Biceps": ["Barbell Curls", "Chin-Ups", "Cable Curls", "Concentration Curls", "EZ Bar Curl"],
  "Triceps": ["Close Grip Bench Press", "Overhead Tricep Extension", "Dips", "Tricep Pushdowns", "Kickbacks"],
  "Quads": ["Front Squats", "Leg Extensions", "Bulgarian Split Squats", "Hack Squats", "Sissy Squats"],
  "Hamstrings": ["Romanian Deadlift", "Leg Curl", "Good Mornings", "Nordic Hamstring Curl", "Kettlebell Swings"],
  "Glutes": ["Hip Thrusts", "Glute Kickbacks", "Sumo Deadlift", "Step-Ups", "Frog Pumps"],
  "Calves": ["Standing Calf Raise", "Seated Calf Raise", "Donkey Calf Raise", "Single-Leg Calf Raise", "Jump Rope"]
};

function randomSetsReps() {
  const sets = Math.floor(Math.random() * 2) + 3;
  const reps = [8, 10, 12, 15];
  const chosenReps = reps[Math.floor(Math.random() * reps.length)];
  return `${sets} sets x ${chosenReps} reps`;
}

function generateWorkout(tabName) {
  const container = document.getElementById(tabName);
  const checkboxes = container.querySelectorAll("input[type='checkbox']:checked");
  let selectedGroups = [];
  checkboxes.forEach(cb => selectedGroups.push(cb.value));

  let resultDiv = document.getElementById("result-" + tabName);

  if (selectedGroups.length === 0) {
    resultDiv.innerHTML = `<p class="no-selection">⚠️ Please select at least one muscle group.</p>`;
    return;
  }

  let workoutPlan = [];
  selectedGroups.forEach(group => {
    let options = [...workouts[group]];
    let chosenExercises = [];

    let exerciseCount = Math.floor(Math.random() * 2) + 2;
    for (let i = 0; i < exerciseCount; i++) {
      if (options.length === 0) break;
      let randomIndex = Math.floor(Math.random() * options.length);
      let exercise = options.splice(randomIndex, 1)[0];
      chosenExercises.push(`
        <div class="exercise-card">
          <span class="exercise-icon">🏋️</span>
          <div class="exercise-text">
            <div class="exercise-name">${exercise}</div>
            <div class="exercise-sets">${randomSetsReps()}</div>
          </div>
        </div>
      `);
    }

    workoutPlan.push(`
      <div class="muscle-group">
        <h4>${group}</h4>
        ${chosenExercises.join("")}
      </div>
    `);
  });

  resultDiv.innerHTML = workoutPlan.join("");
}
