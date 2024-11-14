document.addEventListener("DOMContentLoaded", () => {
  console.log("Connexion reussi plugin filtrePost");
  let filtre__bouton = document.querySelectorAll(".filtre__bouton button");
  console.log(filtre__bouton);
  for (const element of filtre__bouton) {
    element.addEventListener("click", (evnt) => {
      const categorie = evnt.target.dataset.id;
      console.log(categorie);
    });
  }
});
