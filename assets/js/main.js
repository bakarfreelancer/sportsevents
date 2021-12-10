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
  let allPlayerEditBtn = document.querySelectorAll(".editPlayer");
  for (let i = 0; i < allPlayerEditBtn.length; i++) {
    allPlayerEditBtn[i].addEventListener("click", function () {
      let editModal = document.getElementById("editPlayerModal");
      let game = this.parentElement.parentElement.childNodes;
      let gameCurrentTime = game[5].textContent;
      gameCurrentTime = Date.parse(gameCurrentTime);
      let dateToBeDisplayed = new Date(gameCurrentTime * 1000);
      console.log(dateToBeDisplayed);
      let filterdData = [
        game[3].textContent,
        game[5].textContent,
        game[7].textContent,
      ];
      document.querySelector(".gameName").value = filterdData[0];
      document.querySelector(".gameDate").value = filterdData[1];
      document.querySelector(".gameVenue").value = filterdData[2];
    });
  }
})();
