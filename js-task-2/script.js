let cells = document.getElementsByClassName('cell');
let statusText = document.getElementById('status');
let resetBtn = document.getElementById('resetBtn');

let xScoreText = document.getElementById('xScore');
let oScoreText = document.getElementById('oScore');

let currentPlayer = "x";
let board = ["","","","","","","",""];

let xScore = 0;
let oScore = 0;

let winPatterns = [
[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]
];

for(let i =0; i<cells.length; i++){
    cells[i].addEventListener('click',handleClick);
}

resetBtn.addEventListener('click',resetGame);

function handleClick(){
    let index = this.getAttribute('data-index');

    if (board[index] != "" || gameActive == false) {
        return;
    }

    board[index] = currentPlayer;
    this.textContent = currentPlayer;
    this.classList.add('marked');

    checkWinner();
}

function checkWinner(){
    for(let i=0; i<winPatterns.length; i++){
        let a = winPatterns[i][0];
        let b = winPatterns[i][1];
        let c = winPatterns[i][2];

        if (board[a] != "" && board[a] == board[b] && board[a] == board [c]) {
            cells[a].classList.add("winner");
            cells[b].classList.add("winner");
            cells[c].classList.add("winner");
        }

    }
}