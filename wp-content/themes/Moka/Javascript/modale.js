// Attend que le contenu de la page soit entièrement chargé
document.addEventListener("DOMContentLoaded", function () {
  // Récupère la modale et le bouton de fermeture
  var modal = document.querySelector(".popup-overlay");
  var closeButton = document.querySelector(".popup-contact .close-button");

  // Fonction pour afficher la modale
  function openModal() {
    modal.style.display = "block";
  }

  // Fonction pour masquer la modale
  function closeModal() {
    modal.style.display = "none";
  }

  // Événement pour afficher la modale
  // Vous pouvez déclencher cet événement comme vous le souhaitez (par exemple, au clic sur un bouton)
  openModal();

  // Événement pour masquer la modale lorsque l'utilisateur clique sur le bouton de fermeture
  closeButton.addEventListener("click", closeModal);

  // Événement pour masquer la modale lorsque l'utilisateur clique en dehors de celle-ci
  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });
});
