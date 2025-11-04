
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
        <div class="exercise-card" onclick="openExerciseModal('${exercise.replace(/'/g, "\\'")}')">
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

const exerciseVideos = {
  "Bench Press": "https://media.musclewiki.com/media/uploads/videos/branded/male-barbell-bench-press-front.mp4",
  "Push-Ups": "https://media.musclewiki.com/media/uploads/videos/branded/male-Bodyweight-push-up-side.mp4",
  "Incline Dumbbell Press": "https://media.musclewiki.com/media/uploads/videos/branded/male-dumbbell-incline-bench-press-front_q2q0T12.mp4",
  "Chest Fly": "https://media.musclewiki.com/media/uploads/videos/branded/male-dumbbell-incline-chest-flys-side_em1D4Db.mp4",
  "Cable Crossover": "https://media.musclewiki.com/media/uploads/videos/branded/male-Cables-cable-cross-pushdown-side.mp4",

  "Pull-Ups": "https://media.musclewiki.com/media/uploads/videos/branded/male-bodyweight-pullup-front.mp4",
  "Deadlift": "https://media.musclewiki.com/media/uploads/videos/branded/male-Barbell-barbell-deadlift-side.mp4",
  "Barbell Row": "https://media.musclewiki.com/media/uploads/videos/branded/male-barbell-bent-over-row-side.mp4",
  "Lat Pulldown": "https://media.musclewiki.com/media/uploads/videos/branded/male-machine-pulldown-side.mp4",
  "Single Arm Dumbbell Row": "https://media.musclewiki.com/media/uploads/videos/branded/male-Dumbbells-dumbbell-single-arm-row-side.mp4",

  "Squats": "https://media.musclewiki.com/media/uploads/videos/branded/male-Barbell-barbell-squat-side.mp4",
  "Lunges": "https://media.musclewiki.com/media/uploads/videos/branded/male-Bodyweight-forward-lunges-side.mp4",
  "Leg Press": "https://media.musclewiki.com/media/uploads/videos/branded/male-machine-leg-press-side.mp4",
  "Step-Ups": "",
  "Leg Extensions": "",

  "Bicep Curls": "",
  "Tricep Dips": "",
  "Hammer Curls": "",
  "Skull Crushers": "",
  "Close-Grip Pushups": "",

  "Overhead Press": "",
  "Lateral Raises": "",
  "Arnold Press": "",
  "Front Raises": "",
  "Upright Row": "",

  "Barbell Curls": "",
  "Chin-Ups": "",
  "Cable Curls": "",
  "Concentration Curls": "",
  "EZ Bar Curl": "",

  "Close Grip Bench Press": "",
  "Overhead Tricep Extension": "",
  "Dips": "",
  "Tricep Pushdowns": "",
  "Kickbacks": "",

  "Front Squats": "",
  "Leg Extensions (Quads)": "",
  "Bulgarian Split Squats": "",
  "Hack Squats": "",
  "Sissy Squats": "",

  "Romanian Deadlift": "",
  "Leg Curl": "",
  "Good Mornings": "",
  "Nordic Hamstring Curl": "",
  "Kettlebell Swings": "",

  "Hip Thrusts": "",
  "Glute Kickbacks": "",
  "Sumo Deadlift": "",
  "Step-Ups (Glutes)": "",
  "Frog Pumps": "",

  
  "Standing Calf Raise": "",
  "Seated Calf Raise": "",
  "Donkey Calf Raise": "",
  "Single-Leg Calf Raise": "",
  "Jump Rope": ""
};




function openExerciseModal(exerciseName) {
  const modal = document.getElementById("exerciseModal");
  const nameElem = document.getElementById("modalExerciseName");
  const vidElem = document.getElementById("modalExerciseVideo");

  nameElem.textContent = exerciseName;

  const videoUrl = exerciseVideos[exerciseName];

  if (videoUrl) {
    vidElem.src = videoUrl;
    modal.style.display = "flex";
  } else {
    alert("No video found for " + exerciseName);
  }
}

function closeModal() {
  const modal = document.getElementById("exerciseModal");
  const vidElem = document.getElementById("modalExerciseVideo");

  vidElem.pause();
  vidElem.src = "";
  modal.style.display = "none";
}


