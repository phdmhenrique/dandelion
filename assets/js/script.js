const btnContributions = document.getElementById("button-contribution");
const closeButton = document.getElementById("close-button");
const backgroundForm = document.getElementById("background-form");

btnContributions.addEventListener("click", () => {
    backgroundForm.classList.add("active-background");
});

closeButton.addEventListener("click", () => {
    backgroundForm.classList.remove("active-background");
});