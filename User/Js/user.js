$("textarea").each(function () {
  this.setAttribute("style", "px;overflow-y:hidden");
});

$(".img-fu").each(function () {
  function myFunction(x) {
    if (x.matches) {
      // If media query matches
      document.getElementById("img").src = "./Picture/Logo/logo1.png";
    } else {
      document.getElementById("img").src = "./Picture/Logo/logo.png";
    }
  }
  var x = window.matchMedia("(max-width: 700px)");
  myFunction(x); // Call listener function at run time
  x.addListener(myFunction); // Attach listener function on state changes
});

$(document).ready(function () {
  $(".login").click(function () {
    var userphone = $(".userphone").val();
    var password = $(".password").val();
    console.log(userphone + "," + password);
    $.ajax({
      type: "POST",
      url: "./User/models/login.php",
      data: {
        submit_login: 1,
        userphone: userphone,
        password: password,
      },
      dataType: "json",
      success: function (remine) {
        // console.log(remine);
        if (remine.status == "success") {
          if (remine.permission == "admin") {
            window.location = "./Admin/home.php";
          } else if (remine.permission == "user") {
            window.location = "profile.php";
          }
        } else if (remine.status == "fail") {
          $(".warning").html(
            "<div class='alert alert-warning'>" + remine.span + "</div>"
          );
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        }
      },
    });
  });

  $(".register").click(function () {
    var firstname = $(".firstname").val();
    var lastname = $(".lastname").val();
    var email = $(".email").val();
    var phone = $(".phone").val();
    var password = $(".repassword").val();
    var con_password = $(".con_repassword").val();
    // console.log("firstname is " + firstname + "  lastname is " + lastname);
    // console.log("  Email is " + email + "  Phone is " + phone);
    // console.log(
    //   "  password is " + password + "  con_password is " + con_password
    // );

    $.ajax({
      type: "POST",
      url: "./User/models/register.php",
      data: {
        submit_register: true,
        firstname: firstname,
        lastname: lastname,
        email: email,
        phone: phone,
        password: password,
        con_password: con_password,
      },
      dataType: "json",
      success: function (remine) {

        if (remine.status == "success") {
          console.log("session is " + remine.session);
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
          $('#modal-register').modal('hide');
          $("#modal-register").on("hidden.bs.modal", function(){
            $('.modal-body').find("input[type=text], input[type=number], input[type=password]").val("");
        });
          // window.location = "profile.php";
        } else if (remine.status == "Incomplete") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        
        } else if (remine.status == "fail") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        } else if (remine.status == "have_phone") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        } else if (remine.status == "password_notequal") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        }
      },
    });
    
  });

  $(".edit_user").click(function () {
    var firstname = $(".firstname").val();
    var lastname = $(".lastname").val();
    var email = $(".email").val();
    var oldpassword = $(".oldpassword").val();
    var newpassword = $(".newpassword").val();
    var address = $(".address").val();
    
    // console.log("firstname is " + firstname + "  lastname is " + lastname);
    // console.log("  Email is " + email + "  address is " + address);
    $.ajax({
      type: "POST",
      url: "./User/models/edit_profile.php",
      data: {
        submit_edit_user: true,
        firstname: firstname,
        lastname: lastname,
        email: email,
        oldpassword:  oldpassword,
        newpassword: newpassword,
        address: address,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          }).then((confirm) => {
            // if(confirm){
            location.reload();
            // }
          });
          // window.location = "profile.php";
        } else if (remine.status == "wrongpass") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        }
      },
    });
  });
});
