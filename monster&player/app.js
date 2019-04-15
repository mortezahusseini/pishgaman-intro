Vue.config.devtools = true;
new Vue ({
  el : '#app',
  data : {
    playerHealth : 100,
    monsterHealth : 100,
    gameIsRunning : false,
    turns : []
  },
  methods : {
    startGame : function () {
      this.gameIsRunning = true;
      this.playerHealth = 100;
      this.monsterHealth = 100;
      this.turns = []
    },
    attack : function () {
      this.monsterHealth -= this.calculateDamage(3 , 10);
      if (this.checkWin()) {
        return;
      }
      this.monsterAttacks();
      this.turns.unshift({
        isPlayer : true,
        text : 'شما به غول ضربه زدید  ' + this.calculateDamage(3 , 10)
      })
    },
    specialAttack : function () {
      this.monsterHealth -= this.calculateDamage(10, 20);
      if (this.checkWin()) {
        return;
      }
      this.monsterAttacks();
      this.turns.unshift({
        isPlayer : true,
        text : 'شما خیلی محکم به غول ضربه زدید ' + this.calculateDamage(10 , 20)
      })
    },
    heal : function () {
      if (this.playerHealth >= 90){
        this.playerHealth += 10 ;
      } else {
        this.playerHealth = 100 ;
      }
      this.monsterAttacks();
      this.turns.unshift({
        isPlayer : true,
        text : 'شما 10 تا خون گرفتید'
      })
    },
    giveUp : function () {
      this.gameIsRunning = false;
    },
    monsterAttacks :function (){
      this.playerHealth -= this.calculateDamage(5 , 12);
      this.checkWin();
      this.turns.unshift({
        isPlayer : false,
        text : 'غول به شما ضربه زده است ' + (this.calculateDamage(5 , 12) - 1)
      })
    },
    calculateDamage : function (min , max) {
      return Math.max(Math.floor(Math.random() * max) + 1 , min) ;
    },
    checkWin : function () {
      if (this.monsterHealth <= 0) {
        if (confirm('شما برنده شدید! دوباره شروع کنیم؟ ?')) {
          this.startGame();
        }else {
          this.gameIsRunning = false;
        } return true;
      }else if (this.playerHealth <= 0){
        if (confirm('واهههه. شما باختید! دوباره شروع کنیم؟ ?')){
          this.startGame()
        }else {
          this.gameIsRunning = false;
        }
        return true;
      }
      return false;
    }
  }
})
