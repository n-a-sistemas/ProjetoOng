$(document).ready(function () {
    $.validator.setDefaults({
        submitHandler: function () {
        }
    });

    $('#quickForm').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 5
            },
            terms: {
                required: true
            },

            messages: {
                email: {
                    required: "Insira um endereço de e-mail",
                    email: "Insira um endereço de e-mail válido"
                },

                password: {
                    required: "Insira sua senha",
                    minlength: "Sua senha deve ter pelo menos 5 caracteres"
                },

                terms: "Por favor, aceite os termos."
            },

            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },

            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },

            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        }
    });
});
