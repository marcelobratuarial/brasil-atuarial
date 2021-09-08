$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 4
                },
                empresa: {
                    required: true,
                    minlength: 5
                },
                // number: {
                //     required: true,
                //     minlength: 5
                // },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Informe seu nome",
                    minlength: "Seu nome deve ter ao menos 4 caracteres"
                },
                empresa: {
                    required: "Informe o nome da sua empresa",
                    minlength: ""
                },
                // number: {
                //     required: "come on, you have a number, don't you?",
                //     minlength: "your Number must consist of at least 5 characters"
                // },
                email: {
                    required: "Um e-mail válido é obrigatório.",
                    email: 'Digite um email válido'
                },
                message: {
                    required: "Uma mensagem é obrigatória.",
                    minlength: "Mensagem muito curta"
                }
            },
            submitHandler: function(form) {
                // var data = {
                //     name: $("#name").val(),
                //     email: $("#email").val(),
                //     subject: $("#subject").val(),
                //     message: $("#message").val()
                // } 
                var data = $(form).serializeArray()
                console.log(data)

                $.ajax({
                    type:"POST",
                    data: data,
                    url: base_url + "/contact/send",
                    // dataType: 'json',
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#contactModal').fadeIn()
                            $('.modal').modal('hide');
		                	$('#contactModal').modal("show")

                            $('#contactForm')[0].reset()
                            $(this).find(':input').attr('disabled', false);
                        })
                        
                    },
                    error: function() {
                        console.log("erro")
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})