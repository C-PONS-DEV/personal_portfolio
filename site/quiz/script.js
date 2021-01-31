class Question {
  constructor(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
  }
  isCorrectAnswer(choice) {
    return this.answer === choice;
  }
}
let questions = [
  new Question("Quest ce qu'un cookie de connexion ?", ["Une images du site", "Un ensemble de règles à respecter", "Un fichier qui est déposé par le navigateur sur votre ordinateur"], "Un fichier qui est déposé par le navigateur sur votre ordinateur"),
  new Question("Qui exploite ces FAMEUX cookies de connexion", ["L'hebergeur du site Web","Le développeur du site", "Internet"], "L'hebergeur du site Web"),
  new Question("A quoi sert un cookies ?", ["A rester identifié et à cibler le marketing","Pour garantir la sécurité du site", "Un moyen d'acheminer des informations et de sécuriser la connexion."], "A rester identifié et à cibler le marketing"),
  new Question("Pourquoi les cookies existe ?", ["Pour retracer les achats","A des fins marketing", "Pour encombrer le disque dur"], "A des fins marketing"),
  new Question("Pourquoi demandent ils une autorisation ?", ["En général ils ne demande pas d'autorisation","Pour récuperer des données", "Afin de se conformer aux règles du RGPD"], "Afin de se conformer aux règles du RGPD"),
  new Question("Peut il vous soumettre à des Newsletters ?", ["Oui, si l'utilisateur accepte","Non, le fichier n'est pas relié à l'Internet du Web", "Non meme si l'utilisateur accepte"], "Oui, si l'utilisateur accepte"),
  new Question("Quels avantages pour l'utilisateur ?", ["Il dégrade l'expérience utilisateur","Il améliore l'expérience de navigation", "Protéger sa vie privée"], "Il améliore l'expérience de navigation"),
  new Question("Quels avantages pour l'hebergeur du site ?", ["Il peux les utilisaters pour tracer les utilisateur","Il peux vendre les cookies de connexions", "Il possède les habitudes de son client"], "Il possède les habitudes de son client"),
  new Question("Comment Google récupère il les cookies ? ", ["Grace à l'intelligence artificielle","Via les connexions depuis son moteur de recherche", "Avec des virus sur l'ordinateur de son clients"], "Via les connexions depuis son moteur de recherche"),
  new Question("Peut on les bloquer ?", ["Oui, en envoyant un mail au site","Oui", "Non"], "Non")
];

class Quiz {
  constructor(questions) {
    this.score = 0;
    this.questions = questions;
    this.currentQuestionIndex = 0;
  }
  getCurrentQuestion() {
    return this.questions[this.currentQuestionIndex];
  }
  guess(answer) {
    if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
      this.score++;
    }
    this.currentQuestionIndex++;
  }
  hasEnded() {
    return this.currentQuestionIndex >= this.questions.length;
  }
}

const display = {
  elementShown: function(id, text) {
    let element = document.getElementById(id);
    element.innerHTML = text;
  },
  endQuiz: function() {
    endQuizHTML = `
      <h1>Quiz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>`;
    this.elementShown("quiz", endQuizHTML);
  },
  question: function() {
    this.elementShown("question", quiz.getCurrentQuestion().text);
  },
  choices: function() {
    let choices = quiz.getCurrentQuestion().choices;

    guessHandler = (id, guess) => {
      document.getElementById(id).onclick = function() {
        quiz.guess(guess);
        quizApp();
      }
    }
    // affichage choix + prise en compte du choix
    for(let i = 0; i < choices.length; i++) {
      this.elementShown("choice" + i, choices[i]);
      guessHandler("guess" + i, choices[i]);
    }
  },
  progress: function() {
    let currentQuestionNumber = quiz.currentQuestionIndex + 1;
    this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
  },
};

// Game logic
quizApp = () => {
  if (quiz.hasEnded()) {
    display.endQuiz();
  } else {
    display.question();
    display.choices();
    display.progress();
  } 
}
// Create Quiz
let quiz = new Quiz(questions);
quizApp();
