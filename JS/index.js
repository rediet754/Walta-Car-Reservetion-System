const humburger = document.querySelector(".humburger");
const navul = document.querySelector(".ul");
humburger.addEventListener("click", () => {
    humburger.classList.toggle("active");
    navul.classList.toggle("active");
});