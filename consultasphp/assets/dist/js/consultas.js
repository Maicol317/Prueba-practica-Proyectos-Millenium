$(document).ready(function() {
    poblartabla1();

    $(function() {
        $("form[name='myForm']").validate({
          // Specify validation rules
          rules: {
            firstName: "required",
            lastName: "required",
          },
          // Specify validation error messages
          messages: {
            firstName: "Escriba Nombre",
            lastName: "Escriba apellidos"
          },
          submitHandler: function(form) {
            //form.submit();
          }
        });
    });


    $('#BtnGuardar').on('click', function(e){
        e.preventDefault();
        if($('#myForm').valid()) {
            var firstName=$('#firstName').val();
            var lastName=$('#lastName').val();
            $.ajax({
                type: 'POST',
                url: "consultasphp/insertar.php",
                data:{ind:'2',firstName:firstName,lastName:lastName},
                beforeSend: function() {
                },
                success: function(data) {
                    $('#myForm')[0].reset();
                    //window.location="";
                    console.log(data);
                    if(data=='1'){
                        Swal.fire(
                            'Bien hecho!',
                            'se Creó '+firstName+' '+lastName+' Correctamente',
                            'success'
                          )
                    }else{
                        Swal.fire(
                            'Bien hecho!',
                            'No se pudo Crear '+firstName+' '+lastName+' Intenta de Nuevo',
                            'error'
                          )

                    }
                },
                error: function() { // if error occured
                    alert("Error occured.please try again");
                },
                complete: function() {
                    poblartabla1();
                },
                dataType: 'html'
            });
        }
        else{
            console.log('Faltan campos');
        }
    })
    
});//Document Ready

function poblartabla1() {
    $.ajax({
        type: "POST",
        url: "consultasphp/insertar.php",
        data:{ind:'1'},
        success: function(data){
            $('#divtable1').html(data).fadeIn();
            $('#tabla1').DataTable();
        }
    });
}