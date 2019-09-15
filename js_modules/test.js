console.log("K53 Console Info");

let State = {
    user: "000001",
    questionSet: [
        {
            questionNumber: 26,
            userAnswer: "",
            rightAnswer: "C"
        }, {
            questionNumber: 27,
            userAnswer: "",
            rightAnswer: "B"
        }
    ],
    currentQuestion: 0, /* of the questionSetArray Index */
    currentSelection: ""
}

function loadPost() {}

function questionCycle() {    
    console.log("Start Here");
    if (State['currentSelection'] == "") {
        console.log("Selection is empty");
        alert("Please select an answer before proceeding to the next question!");
    } else {
        State['questionSet'][State.currentQuestion]['userAnswer'] = State['currentSelection'];
        State['currentSelection'] = "";
        //hide current question
        console.log(State.questionSet[State.currentQuestion].questionNumber);
        document.getElementById((State.questionSet[State.currentQuestion].questionNumber).toString()).style.display = "none";      
        State.currentQuestion++;        
        //show next question
        document.getElementById((State.questionSet[State.currentQuestion].questionNumber).toString()).style.display = "inherit";    
        console.log(State);   
    }
}

function selectAnswer(selection) {
    if (State.currentSelection != "") {
        console.log(State.currentQuestion)
        document.getElementById(State.questionSet[State.currentQuestion].questionNumber.toString())
            .getElementsByClassName('select' + State.currentSelection)[0].style.background = "inherit";
            
    }   
    State['currentSelection'] = selection;
    console.log("Selection is: " + selection);    
    document.getElementById(State.questionSet[State.currentQuestion].questionNumber.toString())
        .getElementsByClassName('select' + selection)[0]
        .style.background = "lightgreen";       
}