$(document).ready(function () {

    //Máscaras
    $('.codigo').mask('0000000000', { reverse: true });
    $('.dinheiro').mask('000.000.000.000,00', { reverse: true });

    /*Validacao de campos

    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('js_twbs_form');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function () {
                }, false);
                $("#submitBtn").click(function (event) {
                    if (form.checkValidity() === false) {
                        form.classList.add('was-validated');
                        event.preventDefault();
                        event.stopPropagation();
                    }
                });
            });
        }, false);
    })();*/

});