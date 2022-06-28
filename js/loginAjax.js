$(document).ready(function () {

    $("#Loginbtn").click(function () {


        var input1 = document.getElementById("signin_email").value;
        var input2 = document.getElementById("signin_password").value;
        $.ajax({
            type: 'POST',
            url: '../modals/signin.php?opes=signin',
            data: { login: input1, password: input2 },
            success: function (response) {

                if (response < 1) {

                    swal('', 'erore sur login or mot de pass !', 'error');

                }
                else {
                    swal('', "you log in now  !", "success");
                    location.reload();

                    // let result="";
                    // for(let i=response.length-7;i<response.length;i++){
                    //    result=result+response[i];

                    // }

                    // if(result=='vendeur'){
                    //     $('#vendeurpage2').show();


                    // }
                    // $('btnADDToCartLogout').hide();
                    // $('btnADDToCartLogin').show();
                    //  result = response.substring(2,(response.length));
                    //  alert("result"+result);

                    // window.location='../pages/home-02.php';


                    // document.getElementById('btnADDToCartLogout').innerHTML += document.getElementById('btnADDToCartLogin').innerHTML;



                }





            }
        });



    });
    $("#logout").click(function () {


        $.ajax({
            type: 'POST',
            url: '../modals/signin.php?opes=logout',
            data: {},
            success: function (response) {




            }
        });



    });
    $('#signup').click(function () {
        if (document.getElementById('TypeUser').value == 'vendeur') {
            var signup_email = document.getElementById("signup_email").value;
            var signup_password = document.getElementById("signup_password").value;
            var signup_username = document.getElementById("signup_username").value;
            var signup_date = document.getElementById("signup_date").value;
            var TypeUser = document.getElementById("TypeUser").value;
            var signup_cin = document.getElementById("signup_cin").value;
            var signup_tel = document.getElementById("signup_tel").value;
            if (signup_email !='' && signup_username != '' && signup_date != '' && signup_cin != '' && signup_tel != '' && signup_password
                != '') {




                $.ajax({
                    type: 'POST',
                    url: '../modals/signin.php?opes=signupVenduer',
                    data: {
                        signup_email: signup_email,
                        signup_password: signup_password,
                        signup_username: signup_username,
                        signup_date: signup_date,
                        TypeUser: TypeUser,
                        signup_cin: signup_cin,
                        signup_tel: signup_tel
                    },
                    success: function (response) {
                        if (response == true) {

                            swal('', "you log in now  !", "success");
                            location.reload();
                        }
                        else {
                          
                            swal('', 'erore sur entrer des informations !', 'error');
                            location.reload();


                        }




                    }
                });
            }
            else
            {
                swal('', 'il doit enter tous les champ !', 'error');

            }



        }
        else {
            if (document.getElementById('TypeUser').value == 'parent') {
                var signup_email = document.getElementById("signup_email").value;
                var signup_password = document.getElementById("signup_password").value;
                var signup_username = document.getElementById("signup_username").value;
                var signup_date = document.getElementById("signup_date").value;
                var TypeUser = document.getElementById("TypeUser").value;
                if (signup_email !='' && signup_username != '' && signup_date != '' && signup_tel != '' && signup_password
                != '') {
                $.ajax({
                    type: 'POST',
                    url: '../modals/signin.php?opes=signupParent',
                    data: {
                        signup_email: signup_email,
                        signup_password: signup_password,
                        signup_username: signup_username,
                        signup_date: signup_date,
                        TypeUser: TypeUser,
                        signup_tel: signup_tel

                    },
                    success: function (response) {
                         console.log(response);
                        if (response == true) {

                            swal('', 'erore sur entrer des informations !', 'error');

                        }
                        else {
                            swal('', "you log in now  !", "success");
                            location.reload();
                        }

                    }
                });

            }
            else
            {
                swal('', 'il doit enter tous les champ !', 'error');

            }
        }
       
    }

    });


});

