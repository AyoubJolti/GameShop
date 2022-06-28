$("#Aventure").click(function () {


    $.ajax({
        type: 'POST',
        url: 'ajax.php?oper=Aventure',
        data: {},
        success: function (response) {
            document.getElementById('catgorie').innerHTML = response;
            document.getElementById("catgorie").style.height = 'auto';
            addwish();
            // document.getElementById("wid").style.margin = "300px";




        }
    });

});
$("#all").click(function () {


    $.ajax({
        type: 'POST',
        url: 'ajax.php?oper=all',
        data: {},
        success: function (response) {
            document.getElementById('catgorie').innerHTML = response;
            document.getElementById("catgorie").style.height = 'auto';
            // document.getElementById("wid").style.margin = "300px";
            addwish();




        }
    });

});
$("#Horreur").click(function () {


    $.ajax({
        type: 'POST',
        url: 'ajax.php?oper=Horreur',
        data: {},
        success: function (response) {
            document.getElementById('catgorie').innerHTML = response;
            document.getElementById("catgorie").style.height = 'auto';
            // document.getElementById("wid").style.margin = "300px";
            addwish();





        }
    });

});
$("#Sport").click(function () {


    $.ajax({
        type: 'POST',
        url: 'ajax.php?oper=Sport',
        data: {},
        success: function (response) {
            document.getElementById('catgorie').innerHTML = response;
            document.getElementById("catgorie").style.height = 'auto';
            // document.getElementById("wid").style.margin = "300px";
            addwish();




        }
    });

});
$("#RPG").click(function () {


    $.ajax({
        type: 'POST',
        url: 'ajax.php?oper=RPG',
        data: {},
        success: function (response) {
            document.getElementById('catgorie').innerHTML = response;
            document.getElementById("catgorie").style.height = 'auto';
            // document.getElementById("wid").style.margin= "300px";
            addwish();




        }
    });

});
$("#Action").click(function () {


    $.ajax({
        type: 'POST',
        url: 'ajax.php?oper=Action',
        data: {},
        success: function (response) {
            document.getElementById('catgorie').innerHTML = response;

            document.getElementById("catgorie").style.height = 'auto';
            // document.getElementById("wid").style.margin = "300px";
            addwish();




        }
    });

});
$('.article').on('click', function () {
    let idAjax = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: 'quickview.php?oper=article',
        data: { id: idAjax },
        success: function (response) {
            document.getElementById('quickview').innerHTML = response;


        }
    });
});