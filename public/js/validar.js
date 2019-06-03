$("#formCheckPassword").validate({
           rules: {
               clave: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   cfmPassword: { 
                    equalTo: "#clave",
                     minlength: 6,
                     maxlength: 10
               }


           },
     messages:{
         clave: { 
                 required:"Password Requerido",
                 minlength: "Minimo 6 caracteres",
                 maxlength: "Maximo 10 caracteres"
               },
       cfmPassword: { 
         equalTo: "La clave debe ser igual al anterior",
         minlength: "Minimo 6 caracteres",
         maxlength: "Maximo 10 caracteres"
       }
     }

});