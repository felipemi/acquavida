jQuery(function($){
    $('#contact_form').validate({
        rules: {
            nome: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true
            },
            modalidade: {
                required: true
            },
            mensagem: {
                required: true
            }
        },
        messages: {
            nome: {
                required: "O campo nome é obrigatorio.",
                minlength: "O campo nome deve conter no mínimo 5 caracteres."
            },
            email: {
                required: "O campo email é obrigatorio.",
                email: "O campo email deve conter um email válido."
            },
            telefone: {
                required: "O campo telefone é obrigatorio."
            },
            modalidade: {
                required: "Selecione uma modalidade."
            },
            mensagem: {
              required: "O campo mensagem é obrigatorio"  
            }
        }
    });
    $('#form-promocao').validate({
        rules: {
            nome: {
                required: true,
                minlength: 5
            },
             email: {
                required: true,
                email: true
            }
        },
        messages: {
            nome: {
                required: "O campo nome é obrigatorio.",
                minlength: "O campo nome deve conter no mínimo 5 caracteres."
            },
            email: {
                required: "O campo email é obrigatorio.",
                email: "O campo email deve conter um email válido."
            }
        }
    });
     $('#form-news').validate({
        rules: {
            nome: {
                required: true,
                minlength: 5
            },
             email: {
                required: true,
                email: true
            }
        },
        messages: {
            nome: {
                required: "O campo nome é obrigatorio.",
                minlength: "O campo nome deve conter no mínimo 5 caracteres."
            },
            email: {
                required: "O campo email é obrigatorio.",
                email: "O campo email deve conter um email válido."
            }
        }
    });
   
});


