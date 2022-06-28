$("#addto").click(function () {
    let idart=document.getElementById('idart').value;
    $.ajax({
        type: 'POST',
        url: '../modals/card.php?opes=addto',
        data: {idart:idart},
        success: function (response) {

        


        }
    });



});