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
    // console.log(userphone + "," + password);
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
          // $(".warning").html(
          //   "<div class='alert alert-warning'>" + remine.span + "</div>"
          // );
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
          }).then((confirm) => {
            window.location = "profile.php";
          });
        } else {
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
    var address = $(".address").val();

    $.ajax({
      type: "POST",
      url: "./User/models/edit_profile.php",
      data: {
        path: "edit_user",
        firstname: firstname,
        lastname: lastname,
        email: email,
        address: address,
      },
      dataType: "json",
      success: function (remine) {
        swal({
          title: remine.title,
          text: remine.text,
          icon: remine.icon,
        }).then(() => {
          if (remine.status == "success") {
            location.reload();
          }
        });
      },
    });
  });

  $(".reward_ex").click(function () {
    var id_reward = $(this).attr("id");
    // console.log(id_reward);
    swal({
      title: "Are you sure ?!",
      text: "You want exchange reward ?",
      icon: "warning",
      buttons: true,
    }).then((confirm) => {
      if (confirm) {
        $.ajax({
          type: "POST",
          url: "./User/models/reward_ex.php",
          data: {
            id_reward: id_reward,
          },
          dataType: "json",
          success: function (remine) {
            swal({
              title: remine.title,
              text: remine.text,
              icon: remine.icon,
            }).then(() => {
              location.reload();
            });
          },
        });
      }
    });
  });

  $(".edit_password_modal").click(function () {
    $("#modal-user-edit-profile").modal("hide");
    $("#modal-edit-password").modal("show");
  });

  $(".edit_passward").click(function () {
    let old_password = $(".old_password").val();
    let new_password = $(".new_password").val();
    let confirm_password = $(".confirm_password").val();
    // console.log(old_password);
    // console.log(new_password);
    // console.log(confirm_mpassword);
    $.ajax({
      type: "POST",
      url: "./User/models/edit_profile.php",
      data: {
        path: "edit_password",
        old_password: old_password,
        new_password: new_password,
        confirm_password: confirm_password,
      },
      dataType: "json",
      success: function (remine) {
        swal({
          title: remine.title,
          text: remine.text,
          icon: remine.icon,
        }).then(() => {
          if (remine.status == "success")
            $("#modal-edit-password").modal("hide");
        });
      },
    });
  });
});
