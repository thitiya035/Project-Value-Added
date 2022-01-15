$(".img-fu").ready(function () {
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
        console.log(remine);
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
});
