let budgetController = function () {

}

let UIController = function () {
  return {
    getInput : function () {
      return {
        type : document.querySelector('.add_type').value,
        description : document.querySelector('.add__description').value,
        value : document.querySelector('.add__value').value
      };

    }
  };
}

// GLOBAL APP CONROLLER
let controller = (function(budgetCtrl,UICtrl){
  let controlAddItem = function () {
    var input = UIController.getInput();
    console.log(input);
  }
  document.querySelector('.add__btn').addEventListener('click', controlAddItem);

  document.addEventListener('keypress', function (event) {
    if (event.keyCode === 13 || event.witch === 13 ) {
      controlAddItem();
    }
  })

})(budgetController,UIController)
