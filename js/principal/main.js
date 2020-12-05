
$(document).ready(function () {
    load();

});



function load() {
    //alert("Working...");
    $("#txtNoOfRec").focus();

    $("#btnNoOfRec").click(function () {
        $("#AddControll").empty();
        var NoOfRec = $("#txtNoOfRec").val();

        //alert("" + NoOfRec);

        if (NoOfRec > 0) {
            createControll(NoOfRec);
        }
    });
}

function createControll(NoOfRec) {
    var tbl = "";

    tbl = "<table class='table  table-striped table-dark'>"+
        "<tr >"+
        "<th scope='col'> No. Invitados </th>"+
        "<th scope='col'> Nombre </th>"+
        "<th scope='col'> Apellido </th>"+
        "<th scope='col'> Email </th>"+
        "<th scope='col'> Edad </th>"+
        "<th scope='col'> Telefono </th>"+
        "</tr>";

    for (i = 1; i <= NoOfRec; i++) {
            tbl += "<tr>" +

                "<td>" + i + "</td>" +


                "<td>" +
                "<input type='text' id='txtFName' placeholder='Nombre' autofocus />" +
                "</td>" +

                "<td>" +
                "<input type='text' id='txtLName' placeholder='Apellido' />" +
                "</td>" +

                "<td>" +
                "<input type='email' id='txtemail' placeholder='usuario@email.com' />" +
                "</td>" +

                "<td>" +
                "<input type='number' id='txtage' placeholder='Edad' />" +
                "</td>" +

                "<td>" +
                "<input type='text' id='txtnumber'  pattern= '[0-9]{10}'  placeholder='(lada) + numero' />" +
                "</td>" +

                "</tr>";

    }
    tbl +=  "</table>";


    $("#AddControll").append(tbl);
    $("#AddControll").append("<button type='submit'> send </button>");
}