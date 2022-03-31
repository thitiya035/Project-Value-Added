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
    //  id_reward = $(this).attr("id");
    var id_reward = $(this).attr("id");
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
    var id_permission = $(".id_permission").val();
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
        id_permission: id_permission,
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
  $(".member_delete").click(function () {
    var id_user = $(this).attr("id");
    swal({
      title: "Are you sure ?!",
      icon: "warning",
      text: "You want confirmation to delete this user ?",
      buttons: true,
      dangerMode: true,
    }).then((confirm) => {
      if (confirm) {
        $.ajax({
          type: "POST",
          url: "./src/models/member.php",
          data: {
            path_member: "member_delete",
            id_user: id_user,
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
      }
    });
  });
  $(".product_add").click(function () {
    var id_barcode = $(".id_barcode").val();
    var name_product_thai = $(".name_product_thai").val();
    var name_product_eng = $(".name_product_eng").val();
    var brand_product = $(".brand_product").val();
    var size = $(".size").val();
    var id_type_product = $(".id_type_product").val();
    $.ajax({
      type: "POST",
      url: "./src/models/product.php",
      data: {
        path_product: "product_add",
        id_barcode: id_barcode,
        name_product_thai: name_product_thai,
        name_product_eng: name_product_eng,
        brand_product: brand_product,
        size: size,
        id_type_product: id_type_product,
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
  $(".product_delete").click(function () {
    var id_product = $(this).attr("id");
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
          url: "./src/models/product.php",
          data: {
            path_product: "product_delete",
            id_product: id_product,
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
      }
    });
  });
  $(".token_line_btn").click(function () {
    var token_line = $(".token_line").val();
    $.ajax({
      type: "POST",
      url: "./src/models/token_line.php",
      data: {
        path_setting: "edit_token_line",
        token_line: token_line,
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
  $(".code_btn").click(function () {
    var code = $(".code").val();
    $.ajax({
      type: "POST",
      url: "./src/models/setting.php",
      data: {
        path_setting: "edit_code",
        code: code,
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

  $(".add_tracking").click(function () {
    var track = $(".tracking").val();
    $.ajax({
      type: "POST",
      url: "./src/models/reward_ex.php",
      data: {
        path_ex: "add_track",
        track: track,
      },
      dataType: "json",
      success: function (remine) {
        swal({
          title: remine.title,
          text: remine.text,
          icon: remine.icon,
        }).then(() => {
          location.reload();
          // $("#modal-history-ex-reward").modal("show");
          // $("#modal-input-track").modal("hide");
        });
      },
    });
  });
});
