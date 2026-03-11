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

