var pacientes = document.querySelectorAll(".produtos");

var tabela = document.querySelector("#tabela-produtos");

tabela.addEventListener("dblclick", function(event) {
    event.target.parentNode.classList.add("fadeOut");

    setTimeout(function() {
        event.target.parentNode.remove();
    }, 500);

});


