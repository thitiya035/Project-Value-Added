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
});
