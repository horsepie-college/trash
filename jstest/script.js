document.write("<h1>My Page</h1>");
document.write("<p>Its my personal page</p>");

function startGame() {
  var playerName = prompt("Welcome! Please enter your name:");
  alert("Hello, " + playerName + ". Let's start your adventure!");
  
  var choice = prompt("You find yourself in a dark room. There are two doors: left and right. Which door do you choose? (Type 'left' or 'right')");
  
  if (choice === 'left') {
    alert("You've found a treasure chest! Congratulations, " + playerName + "!");
  } else if (choice === 'right') {
    alert("Oh no, you've encountered a monster! Better luck next time, " + playerName + ".");
  } else {
    alert("You didn't choose a valid option. Game over, " + playerName + ".");
  }
}