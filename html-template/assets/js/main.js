// ADD GAME FORM VALIDATION
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// EDIT GAME MODAL
(function () {
  let allGameEditBtn = document.querySelectorAll(".editGame");
  for (let i = 0; i < allGameEditBtn.length; i++) {
    allGameEditBtn[i].addEventListener("click", function () {
      let game = this.parentElement.parentElement.childNodes;

      let filterdData = [
        game[1].textContent,
        game[3].textContent,
        game[5].textContent,
        game[7].textContent,
      ];
      document.querySelector(".gameId").value = filterdData[0];
      document.querySelector(".gameName").value = filterdData[1];
      document.querySelector(".gameDate").value = filterdData[2];
      document.querySelector(".gameVenue").value = filterdData[3];
      console.log(filterdData[0]);
    });
  }
})();

// EDIT PLAYER MODAL
(function () {
  let allPlayerEditBtn = document.querySelectorAll(".editPlayer");
  for (let i = 0; i < allPlayerEditBtn.length; i++) {
    allPlayerEditBtn[i].addEventListener("click", function () {
      let game = this.parentElement.parentElement.childNodes;

      let filterdData = [
        game[1].textContent,
        game[3].textContent,
        game[5].textContent,
        game[7].textContent,
      ];
      document.querySelector(".playerId").value = filterdData[0];
      document.querySelector(".playerName").value = filterdData[1];
      document.querySelector(".address").value = filterdData[2];
      document.querySelector(".playerContact").value = filterdData[3];
      console.log(filterdData[0]);
    });
  }
})();

// EDIT PLAYER MODAL
(function () {
  let allAwardsEditBtn = document.querySelectorAll(".editAward");
  for (let i = 0; i < allAwardsEditBtn.length; i++) {
    allAwardsEditBtn[i].addEventListener("click", function () {
      let game = this.parentElement.parentElement.childNodes;

      let filterdData = [
        game[1].textContent,
        game[5].textContent,
        game[9].textContent,
      ];
      console.log(filterdData);
      document.querySelector(".playerNic").value = filterdData[0];
      document.querySelector(".GId").value = filterdData[1];
      document.querySelector(".awardName").value = filterdData[2];
    });
  }
})();

// EDIT ITEM MODAL
(function () {
  let allItemEditBtn = document.querySelectorAll(".editItem");
  for (let i = 0; i < allItemEditBtn.length; i++) {
    allItemEditBtn[i].addEventListener("click", function () {
      let game = this.parentElement.parentElement.childNodes;

      let filterdData = [game[3].textContent, game[7].textContent];
      console.log(filterdData);
      document.querySelector(".playerNic").value = filterdData[0];
      document.querySelector(".sportsItem").value = filterdData[1];
      // document.querySelector(".awardName").value = filterdData[2];
    });
  }
})();
