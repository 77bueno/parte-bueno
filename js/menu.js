const botao = document.querySelector("nav h2");
const linksMenu = document.querySelector(".menu");
const icone = document.querySelector("#icone");

botao.addEventListener("click", function(event) {
    event.preventDefault();
    linksMenu.classList.toggle("aberto");

    if (icone.classList.contains("bi-list")) {
        icone.classList.remove("bi-list");
        icone.classList.add("bi-x");
    } else {
        icone.classList.remove("bi-x");
        icone.classList.add("bi-list");
    }
});
