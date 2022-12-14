

$(document).on("click", ".editbtn", function () {
    var myCarId = $(this).data('id');
    $("#carId").val(myCarId);
});
/*
$(function () {
    $("DeleteCar").click(function (){
      var data_var = $(this).data('id');
      $("#carId").text(data_var);
    })
   });
*/
function EliminarCarro()
{
    $.ajax({
        url:"Controller/VehiculosController.php",
        type:"POST",
        data: { 
                "InactivarUsuario" : "InactivarUsuario", 
                "Id" : document.getElementById("Id").value 
              },
        success:function(data){
            window.location.href = "mantUsuario.php";
        },
        error:function(data){
            //Que pasa si algo sale mal??
        }
    });

}

