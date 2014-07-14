
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

});




$(function () {
                $('#datetimepicker2').datetimepicker({
                    language: 'es'
                });
            });
			
			
			 $(function () {
                $('#datetimepicker3').datetimepicker({
                    language: 'es'
                });
            });
			
			
			
			
			
	  $(document).ready(function() {
    $('.registro').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			idcontinente: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			abreviatura: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			apellido: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			peso: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			estatura: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			edad: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			idequipo: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			idpais: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			escuddo: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			bandera: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere cargar un archivo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
			foto: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere cargar un archivo'
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
			
            
			editorial: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
			
			
			
        }
    });
});