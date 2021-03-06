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
        game[5].textContent.replace(" ", "T"),
        game[7].textContent,
      ];
      document.querySelector(".gameId").value = filterdData[0];
      document.querySelector(".gameName").value = filterdData[1];
      document.querySelector(".gameDate").value = filterdData[2];
      document.querySelector(".gameVenue").value = filterdData[3];
      document.querySelector(
        ".deleteGame"
      ).href = `includes/handlers/deleteGame.php?id=${filterdData[0]}`;
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
      document.querySelector(".pid").value = filterdData[0];
      document.querySelector(".playerId").value = filterdData[0];
      document.querySelector(".playerName").value = filterdData[1];
      document.querySelector(".address").value = filterdData[2];
      document.querySelector(".playerContact").value = filterdData[3];
      document.querySelector(
        ".deletePlayer"
      ).href = `includes/handlers/deleteplayer.php?id=${filterdData[0]}`;
    });
  }
})();

// EDIT AWARD MODAL
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
      document.querySelector(".playerNic").value = filterdData[0];
      document.querySelector(".GId").value = filterdData[1];
      document.querySelector(".oldGId").value = filterdData[1];
      document.querySelector(".awardName").value = filterdData[2];
      document.querySelector(".oldAwardName").value = filterdData[2];
      document.querySelector(
        ".deleteAward"
      ).href = `includes/handlers/deleteAward.php?GId=${filterdData[1]}&awardName=${filterdData[2]}`;
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
      document.querySelector(".oldPNIC").value = filterdData[0];
      document.querySelector(".playerNic").value = filterdData[0];
      document.querySelector(".oldItem").value = filterdData[1];
      document.querySelector(".sportsItem").value = filterdData[1];
      document.querySelector(
        ".deleteItem"
      ).href = `includes/handlers/deleteitem.php?id=${filterdData[0]}&item=${filterdData[1]}`;
    });
  }
})();
