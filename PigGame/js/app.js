let scores, roundScore, activePlayer, dice, gamePlaying, lastDise, winningScore;

function init(){
  scores = [0, 0];
  roundScore = 0;
  activePlayer = 0;
  gamePlaying = true;
  document.getElementById('dice-0').style.display = 'none';
  document.getElementById('dice-1').style.display = 'none';

  document.getElementById('score-0').textContent = '0';
  document.getElementById('current-0').textContent = '0';
  document.getElementById('score-1').textContent = '0';
  document.getElementById('current-1').textContent = '0';
  document.getElementById('name-0').textContent = 'بازیکن اول';
  document.getElementById('name-1').textContent = 'بازیکن دوم';
  document.querySelector('.player-' + activePlayer + '-panel').classList.remove('winner');
  document.querySelector('.player-0-panel').classList.remove('winner');
  document.querySelector('.player-1-panel').classList.remove('winner');
  document.querySelector('.player-0-panel').classList.remove('active');
  document.querySelector('.player-1-panel').classList.remove('active');
  document.querySelector('.player-0-panel').classList.add('active');
}
init();

let x = document.querySelector('#score-0').textContent;

function roll(){
  if (gamePlaying) {
    let  dice0 = Math.floor(Math.random() * 6) + 1;
    let  dice1 = Math.floor(Math.random() * 6) + 1;
    document.getElementById('dice-0').style.display = 'block';
    document.getElementById('dice-1').style.display = 'block';
    document.getElementById('dice-0').src = 'images/dice-' + dice0 + '.png';
    document.getElementById('dice-1').src = 'images/dice-' + dice1 + '.png';
    if (dice === 6 && lastDise ===6) {
      scores[activePlayer] = 0;
      document.querySelector('#score-' + activePlayer).textContent = '0';
      nextPlayer();
    }else if (dice0 !== 1 && dice1 !== 1){
      roundScore += dice0 + dice1 ;
      document.querySelector('#current-' + activePlayer ).textContent = roundScore;
    } else {
  	nextPlayer();
    }
    lastDise = dice;
  }

}

document.querySelector('.btn-roll').addEventListener('click', roll);


function hold(){
  if (gamePlaying) {
    scores[activePlayer] += roundScore;
  	document.querySelector('#score-' + activePlayer).textContent = scores[activePlayer];
    let input = document.querySelector('.final-score').value;
    if (input) {
      winningScore = input;
    }else {
      winningScore = 100;
    }
  	if(scores[activePlayer] >= winningScore){
  	document.querySelector('#name-' + activePlayer).textContent = 'Winner !';
    document.getElementById('dice-0').style.display = 'block';
    document.getElementById('dice-1').style.display = 'blcok';
  	document.querySelector('.player-' + activePlayer + '-panel').classList.add('winner');
  	document.querySelector('.player-' + activePlayer + '-panel').classList.remove('active');
    gamePlaying = false;
  	}else{
  		nextPlayer();
  	}
  }
}
document.querySelector('.btn-hold').addEventListener('click', hold);

function nextPlayer(){
	 activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;
    roundScore = 0 ;

    document.getElementById('current-1').textContent = '0';
    document.getElementById('current-0').textContent = '0';

	  document.querySelector('.player-1-panel').classList.toggle('active');
    document.querySelector('.player-0-panel').classList.toggle('active');

    document.getElementById('dice-0').style.display = 'none';
    document.getElementById('dice-1').style.display = 'none';
}

document.querySelector('.btn-new').addEventListener('click', init)
