var elementOfQuestion = document.getElementById('question');
var answerBtnElement = document.getElementById('answerBtn');
var btnOfStart = document.getElementById('startBtn');
var btnOfNext = document.getElementById('nextBtn');
var containerElementOfQuestion = document.getElementById('questionContainer');
var shuffledQuestions;
var currentQuestionIndex;

btnOfStart.addEventListener('click', start);
btnOfNext.addEventListener('click', () => {
  currentQuestionIndex++;
  nextQuestion();
});

function start() {
  btnOfStart.classList.add('hide');
  shuffledQuestions = questions.sort(() => Math.random() - .5);
  currentQuestionIndex = 0;
  containerElementOfQuestion.classList.remove('hide');
  nextQuestion();
}


function nextQuestion() {
  reset();
  showQuestion(shuffledQuestions[currentQuestionIndex]);
}



function showQuestion(Q) {

  elementOfQuestion.innerText = Q.question;
  Q.answers.forEach(answer => {

    var Btn = document.createElement('button');

    Btn.innerText = answer.text;

    Btn.classList.add('btn');

    if (answer.correct) {

      Btn.dataset.correct = answer.correct;

    }

    Btn.addEventListener('click', selectAnswer);

    answerBtnElement.appendChild(Btn);

  })

}

function reset() {

  clearStatusClass(document.body);

  btnOfNext.classList.add('hide');

  while (answerBtnElement.firstChild) {

    answerBtnElement.removeChild(answerBtnElement.firstChild);

  }

}

function selectAnswer(answer) {

  var selectedButton = answer.target;

  var correct = selectedButton.dataset.correct;

  setStatusClass(document.body, correct);

  Array.from(answerBtnElement.children).forEach(button => {

    setStatusClass(button, button.dataset.correct);

  });

  if (shuffledQuestions.length > currentQuestionIndex + 1) {

    btnOfNext.classList.remove('hide');
    elementOfQuestion.classList.remove('hide');

  } else {
    btnOfStart.style.visibility = 'hidden';
    btnOfNext.style.visibility = 'hidden';
    setTimeout(() => {
    document.getElementById('questionContainer').innerHTML = "The Game is finished. Please Refresh the website to try again!";
    reset();

    },2000);
  }

}

function setStatusClass(element, correct) {

  clearStatusClass(element);

  if (correct) {

    element.classList.add('correct');

  } else {

    element.classList.add('wrong');

  }

}

function clearStatusClass(element) {

  element.classList.remove('correct');

  element.classList.remove('wrong');

}

var questions = [

  {

    question: 'What is 2 + 2?',

    answers: [

      { text: '4', correct: true },
      { text: '3', correct: false },
      { text: '5', correct: false },
      { text: '6', correct: false }

    ]

  },

  {

    question: 'What is 10 / 2??',

    answers: [

      { text: '5', correct: true },

      { text: '6', correct: false },

      { text: '2', correct: false },

      { text: '8', correct: false }

    ]

  },

  {

    question: 'What is 20 * 3?',

    answers: [

      { text: '80', correct: false },

      { text: '40', correct: false },

      { text: '100', correct: false },

      { text: '60', correct: true }

    ]

  },

  {

    question: 'What is 20 - (15/3)?',

    answers: [

      { text: '10', correct: false },

      { text: '15', correct: true },

      { text: '5', correct: false },

      { text: '0', correct: false }

    ]

  },

  {

    question: 'What is 100 / (15/3)?',

    answers: [

      { text: '10', correct: false },

      { text: '20', correct: true },

      { text: '5', correct: false },

      { text: '15', correct: false }

    ]

  }
  

];