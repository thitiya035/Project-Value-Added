$(document).ready(function () {
  $(".reward_add").click(function () {
    var name_reward = $(".name_reward").val();
    var point_ex_reward = $(".point_ex_reward").val();
    var file_reward = localStorage.getItem("img_reward");
    $.ajax({
      type: "POST",
      url: "./src/models/reward_add.php",
      data: {
        submit_add_reward: true,
        name_reward: name_reward,
        point_ex_reward: point_ex_reward,
        file_reward: file_reward,
      },
      dataType: "json",
      success: function (remine) {
        swal({
          title: remine.title,
          text: remine.text,
          icon: remine.icon,
        }).then((confirm) => {
          if (confirm) {
            location.reload();
          }
        });
      },
    });
  });
  $(".reward_edit_modal").click(function () {
    id_reward = $(this).attr("id");
    $.ajax({
      type: "POST",
      url: "./src/models/reward_edit.php",
      data: {
        path_reward_edit: "show_model",
        id_reward: id_reward,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          $(".name_reward_edit").val(remine.name_reward_edit);
          $(".point_ex_reward_edit").val(remine.point_ex_reward_edit);
          $("#modal-reward-edit").modal("show");
        } else if (remine.status == "fail") {
          swal({
            title: remine.title,
            text: remine.text,
            icon: remine.icon,
          });
        }
      },
    });
  });
  $(".reward_edit").click(function () {
    var name_reward_edit = $(".name_reward_edit").val();
    var point_ex_reward_edit = $(".point_ex_reward_edit").val();
    $.ajax({
      type: "POST",
      url: "./src/models/reward_edit.php",
      data: {
        path_reward_edit: "edit_reward",
        id_reward: id_reward,
        name_reward_edit: name_reward_edit,
        point_ex_reward_edit: point_ex_reward_edit,
      },
      dataType: "json",
      success: function (remine) {
        swal({
          title: remine.title,
          text: remine.text,
          icon: remine.icon,
        });
        location.reload();
      },
    });
  });
  $(".reward_delete").click(function () {
    id_reward = $(this).attr("id");
    swal({
      title: "Are you sure ?!",
      text: "You want confirmation to delete the data ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((confirm) => {
      if (confirm) {
        $.ajax({
          type: "POST",
          url: "./src/models/reward_edit.php",
          data: {
            path_reward_edit: "delete_reward",
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
  $(".member_add").click(function () {
    var firstname = $(".firstname").val();
    var lastname = $(".lastname").val();
    var email = $(".email").val();
    var address = $(".address").val();
    var phone = $(".phone").val();
    var password = $(".password").val();
    var con_password = $(".con_password").val();
    $.ajax({
      type: "POST",
      url: "./src/models/member.php",
      data: {
        path_member: "member_add",
        firstname: firstname,
        lastname: lastname,
        email: email,
        address: address,
        phone: phone,
        password: password,
        con_password: con_password,
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
});
