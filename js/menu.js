const botao = document.querySelector("nav h2");
const linksMenu = document.querySelector(".menu");
const icone = document.querySelector("#icone");

botao.addEventListener("click", function(event) {
    event.preventDefault();
    linksMenu.classList.toggle("aberto");

    if (icone.classList.contains("bi-list")) {
        menuIcon.classList.remove("bi-list");
        menuIcon.classList.add("bi-x");
    } else {
        menuIcon.classList.remove("bi-x");
        menuIcon.classList.add("bi-list");
    }
});
