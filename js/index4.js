$(function () {
    var oTable;
    function crtajTabelu() {
        oTable = $("#tabela").DataTable({
            "bProcessing": true,
            "jQueryUi": false,
            "b$UI": false
        });
    }

    var ex = document.getElementById("tabela");
    if (!$.fn.DataTable.fnIsDataTable(ex)) {
        crtajTabelu();
    }
    else {
        oTable.fnDraw();
    }   
    
    $(".del").on("click", function () {
        var $this = $(this);
        var $id = $this.attr('id'); 
        var $path = $this.attr('path');      
        //alert($path)
        $.ajax({
            url: "delPhoto.php",
            type: "POST",
            data: {
                Id: $id,
                path: $path
            },
            success: function (result) {
                //alert(result); skini ovaj komentar ako te nekad pozovu ovi da ne radi brisanje
                if (result == '1')//uspelo
                {                   
                    var target_row = $this.closest("tr").get(0); 
                    oTable
                    .row(target_row)
                    .remove()
                    .draw();
                    alert("Photo was successfuly deleted.");
                }
                else {

                    alert('Deleting row was NOT successed, call your web site developer');
                }
            },
            error: function () {
                alert("GRESKA!");
            }

        }); //kraj ajax

    });

   /* var oTablePhoto;
    function crtajTabeluPhoto() {
        oTablePhoto = $("#tabelaPhoto").DataTable({
            "bProcessing": true,
            "jQueryUi": false,
            "b$UI": false
        });
    }

    var ex = document.getElementById("tabelaPhoto");
    if (!$.fn.DataTable.fnIsDataTable(ex)) {
        crtajTabeluPhoto();
    }
    else {
        oTablePhoto.fnDraw();   }   */
    
   

    //});

});