const mainBg = document.getElementById('mainBg');
const header = document.getElementById('header-initial');
const updateHeader = document.getElementById("header-updated");
const finalHeader = document.getElementById("header-final");
const footer = document.querySelector('#status');
const questionCard = document.querySelector('#questionCard');
const apiUrl = "https://opentdb.com/api.php?amount=20";
const startBtn = document.querySelector('#startButton');
const tryAgainButton = document.getElementById("tryAgainButton");
const startOverButton = document.getElementById("startOverButton");
const answers = document.getElementById("answers");
const savedCorrectAnswersCount = localStorage.getItem('correctAnswersCount');




header.style.display = 'none';
footer.style.display = 'none';
questionCard.style.display = 'none';
finalHeader.style.display = 'none';

let questions = [];
let questionIndex = 0;
let userScore = 0;
window.location.hash = "";


async function fetchQuestions() {
    try {
        const response = await fetch(apiUrl);
        if (response.ok) {
            const data = await response.json();
            questions = data.results;
            header.style.display = 'block';
            mainBg.style.display = 'none';

        } else {
            throw new Error("Failed to fetch questions.");
        }
    } catch (error) {
        console.error(error);
    }
}

fetchQuestions();

startBtn.addEventListener("click", () => {

    header.style.display = 'none';
    updateHeader.style.display = 'block';

    window.location.hash = "question-1";
    displayQuestion(0);

});

function displayQuestion(questionIndex) {
    const questionData = questions[questionIndex];
    const questionElement = document.getElementById("question");
    const answersElement = document.getElementById("answers");

    questionCard.style.display = 'block';
    footer.style.display = 'block';

    questionElement.textContent = questionData.question;

    answersElement.innerHTML = '';


    const allAnswers = [questionData.correct_answer, ...questionData.incorrect_answers];
    allAnswers.sort(() => Math.random() - 0.5); // Shuffle answers randomly

    allAnswers.forEach((answer) => {
        const answerButton = document.createElement("button");
        answerButton.className = "btn btn-primary answer mx-3";
        answerButton.textContent = answer;
        answerButton.dataset.correct = answer === questionData.correct_answer ? "true" : "false";
        answersElement.appendChild(answerButton);


    });
    updateProgressBar(questionIndex);
}

function updateProgressBar(questionIndex) {
    const progressBar = document.getElementById("progress-bar");
    const completed = questionIndex;
    const total = questions.length;
    progressBar.textContent = `Completed ${completed}/${total}`;
}


window.addEventListener("hashchange", () => {
    const hash = window.location.hash;

    if (hash.startsWith("#question-")) {
        const questionIndex = parseInt(hash.substring("#question-".length), 10);
        displayQuestion(questionIndex - 1);
    }
});

startOverButton.addEventListener("click", () => {

    resetQuestions();

});

answers.addEventListener("click", (event) => {
    if (event.target.classList.contains("answer")) {
        const isCorrect = event.target.dataset.correct === "true";
        let userScore = 0
        if (isCorrect) {

            userScore++;
            correctAnswersCount++;

            console.log("Correct Answers Count:", correctAnswersCount);
            updateCorrectAnswersCount();
        }

        questionIndex++;

        if (questionIndex < questions.length) {
            window.location.hash = `question-${questionIndex + 1}`;
            displayQuestion(questionIndex);
        } else {

            displayResult();
        }
    }
});

let correctAnswersCount = 0;
function updateCorrectAnswersCount() {
    localStorage.setItem('correctAnswersCount', correctAnswersCount);
}

function displayResult() {

    questionCard.style.display = 'none';
    footer.style.display = 'none';
    updateHeader.style.display = 'none';

    finalHeader.style.display = 'block';

    const oldResultMessage = finalHeader.querySelector("p");
    if (oldResultMessage) {
        finalHeader.removeChild(oldResultMessage);
    }

    const resultMessage = document.createElement("p");
    resultMessage.textContent = `You answered ${correctAnswersCount} questions correctly out of ${questions.length}.`;
    finalHeader.appendChild(resultMessage);

    tryAgainButton.addEventListener("click", () => {
        resetQuestions();
        finalHeader.style.display = 'none';
        header.style.display = 'none';
        updateHeader.style.display = 'block';
    });
}

if (questionIndex === questions.length) {
    if (questions.length !== 0) {
        displayResult();
    }
}

function resetQuestions() {
    questionIndex = 0;
    userScore = 0;
    correctAnswersCount = 0;

    updateProgressBar(questionIndex);
    displayQuestion(0);
    window.location.hash = "question-1";
}









