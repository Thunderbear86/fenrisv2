
import ScoreBoard from './scoreBoard.js';


const scoreboard = new ScoreBoard();


scoreboard.createScoreboard();


function updateScores() {
    console.log('Update Scores');
}


function addScore() {
    console.log('Add Score');
}


function subtractScore() {
    console.log('Subtract Score');
}

function reset() {
    console.log('Reset');
}

function startOver() {
    console.log('Start Over');
}

// Attach event listeners for buttons (moved from ScoreBoard class)
document.getElementById("addScore").addEventListener("click", addScore);
document.getElementById("subtractScore").addEventListener("click", subtractScore);
document.getElementById("reset").addEventListener("click", reset);
document.getElementById("startOver").addEventListener("click", startOver);
