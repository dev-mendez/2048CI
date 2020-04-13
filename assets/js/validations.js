$(document).ready(function() {
    $("#userForm").validate({
        rules: {
            phone: {
                required: true,
                number: true
            },
            REGusername: {
                required: true,
                minlength: 6,
                remote: "Home/existUser",
                REGusername:true
            },
            REGpassword: {
                required: true,
                minlength: 6
            },
            agree: "required"
        },
        messages: {
            phone: {
                required: "Introduce tu teléfono correctamente",
                number: "Solo valores numéricos"
            },
    
            REGusername: {
                required: "Entra un nombre de usuario",
                minlength: "Debe tener almenos 4 caracteres",
                remote: "El usuario esta en uso por favor seleccione otro"
            },
            REGpassword: {
                required: "Introduce una contraseña",
                minlength: "Como mínimo debe tener 6 caracteres"
            },
            agree: "Acepta nuestra politica de privacidad"
        }
    });

        jQuery.validator.addMethod("REGusername", function (value, element) {
        // allow any non-whitespace characters as the host  part
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }, 'Introduce los caracteres correctos.');
    jQuery.validator.addMethod("locale", function (value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }, 'Introduce los caracteres correctos.');
});