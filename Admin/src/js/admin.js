$(document).ready(function () {
  $(".reward_add").click(function () {
    var name_reward = $(".name_reward").val();
    var point_ex_reward = $(".point_ex_reward").val();
    $.ajax({
      type: "POST",
      url: "./src/models/reward_add.php",
      data: {
        submit_add_reward: true,
        name_reward: name_reward,
        point_ex_reward: point_ex_reward,
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
          $(".stock_ex_reward_edit").val(remine.stock_ex_reward_edit);
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
    var stock_ex_reward_edit = $(".stock_ex_reward_edit").val();
    $.ajax({
      type: "POST",
      url: "./src/models/reward_edit.php",
      data: {
        path_reward_edit: "edit_reward",
        id_reward: id_reward,
        name_reward_edit: name_reward_edit,
        point_ex_reward_edit: point_ex_reward_edit,
        stock_ex_reward_edit: stock_ex_reward_edit,
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
  $(".member_edit_modal").click(function () {
    id_member = $(this).attr("id");
    $.ajax({
      type: "POST",
      url: "./src/models/member.php",
      data: {
        path_member: "show_model",
        id_member: id_member,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          $(".member_edit").val(remine.id_member);
          $(".firstname_edit").val(remine.firstname);
          $(".lastname_edit").val(remine.lastname);
          $(".email_edit").val(remine.email);
          $(".address_edit").val(remine.address);
          $(".phone_edit").val(remine.phone);
          $(".point_edit").val(remine.point);
          $(".id_permission_edit").val(remine.id_permission);
          $("#modal-edit-member").modal("show");
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
  $(".member_edit").click(function () {
    let id_member = $(".member_edit").val();
    let firstname = $(".firstname_edit").val();
    let lastname = $(".lastname_edit").val();
    let email = $(".email_edit").val();
    let address = $(".address_edit").val();
    let id_permission = $(".id_permission_edit").val();
    $.ajax({
      type: "POST",
      url: "./src/models/member.php",
      data: {
        path_member: "member_edit",
        id_member: id_member,
        firstname: firstname,
        lastname: lastname,
        email: email,
        address: address,
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
  $(".reward_ex_modal_add").click(function () {
    // let track = $(".tracking").val();
    // var id_ex_reward = $(this).attr("id");
    let status_ex;
    var id_ex_reward = $(this).attr("id");
    // console.log(id_ex);
    $.ajax({
      type: "POST",
      url: "./src/models/reward_ex.php",
      data: {
        path_ex: "show_model",
        id_ex_reward: id_ex_reward,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          if (remine.status_ex == 1) {
            status_ex = "Order";
          } else {
            status_ex = "Succeed";
          }
          $(".name_user_ex").val(remine.name_user_ex);
          $(".name_reward_ex").val(remine.name_reward_ex);
          $(".address_user_ex").val(remine.address_user_ex);
          $(".status_ex").val(status_ex);
          $(".date_ex").val(remine.date_ex + "  " + remine.time_ex);
          $("#modal-input-track").modal("show");
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
  $(".reward_ex_modal_edit").click(function () {
    let status_ex;
    var id_ex_reward = $(this).attr("id");
    $.ajax({
      type: "POST",
      url: "./src/models/reward_ex.php",
      data: {
        path_ex: "show_model",
        id_ex_reward: id_ex_reward,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          if (remine.status_ex == 1) {
            status_ex = "Order";
          } else {
            status_ex = "Succeed";
          }
          $(".name_user_ex_edit").val(remine.name_user_ex);
          $(".name_reward_ex_edit").val(remine.name_reward_ex);
          $(".address_user_ex_edit").val(remine.address_user_ex);
          $(".status_ex_edit").val(status_ex);
          $(".date_ex_edit").val(remine.date_ex + "  " + remine.time_ex);
          $(".tracking_edit").val(remine.tracking);
          $("#modal-edit-track").modal("show");
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
        });
      },
    });
  });
  $(".edit_tracking").click(function () {
    var track_edit = $(".tracking_edit").val();
    $.ajax({
      type: "POST",
      url: "./src/models/reward_ex.php",
      data: {
        path_ex: "add_track",
        track: track_edit,
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
  });

  $(".type_product_point_modal").click(function () {
    let id_type_product = $(this).attr("id");
    console.log(id_type_product);
    $.ajax({
      type: "POST",
      url: "./src/models/type_product.php",
      data: {
        path_tp: "show_modal",
        id_type_product: id_type_product,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          $(".edit_point_type").val(remine.id_type_product_ed);
          $(".name_th_type_product_ed").val(remine.name_th_type_product_ed);
          $(".point_of_type_ed").val(remine.point_of_type_ed);
          $("#modal-product_type_edit").modal("show");
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

  $(".edit_point_type").click(function () {
    let id_type = $(".edit_point_type").val();
    let point_ed = $(".point_of_type_ed").val();
    $.ajax({
      type: "POST",
      url: "./src/models/type_product.php",
      data: {
        path_tp: "edit_point",
        id_type: id_type,
        point_ed: point_ed,
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
  $(".product_edit_modal").click(function () {
    let id_product = $(this).attr("id");
    // console.log(id_product);
    $.ajax({
      type: "POST",
      url: "./src/models/product.php",
      data: {
        path_product: "show_edit_modal",
        id_product: id_product,
      },
      dataType: "json",
      success: function (remine) {
        if (remine.status == "success") {
          $(".product_edit").val(remine.id_product_ed);
          $(".id_barcode_ed").val(remine.id_barcode_ed);
          $(".name_product_thai_ed").val(remine.name_product_thai_ed);
          $(".name_product_eng_ed").val(remine.name_product_eng_ed);
          $(".brand_product_ed").val(remine.brand_product_ed);
          $(".size_ed").val(remine.size_ed);
          $(".id_type_product_ed").val(remine.id_type_product_ed);
          $("#modal-product-edit").modal("show");
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

  $(".product_edit").click(function () {
    let id_product_ed = $(".product_edit").val();
    let id_barcode_ed = $(".id_barcode_ed").val();
    let name_product_thai_ed = $(".name_product_thai_ed").val();
    let name_product_eng_ed = $(".name_product_eng_ed").val();
    let brand_product_ed = $(".brand_product_ed").val();
    let size_ed = $(".size_ed").val();
    let id_type_product_ed = $(".id_type_product_ed").val();

    $.ajax({
      type: "POST",
      url: "./src/models/product.php",
      data: {
        path_product: "edit_product",
        id_product_ed: id_product_ed,
        id_barcode_ed: id_barcode_ed,
        name_product_thai_ed: name_product_thai_ed,
        name_product_eng_ed: name_product_eng_ed,
        brand_product_ed: brand_product_ed,
        size_ed: size_ed,
        id_type_product_ed: id_type_product_ed,
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
  $(".btn_graph").click(function () {
    // http://localhost/Project-Value-Added/Admin/src/models/history_ex.php?day=2022-04-14

    //http://localhost/Project-Value-Added/Admin/src/models/graph.php?select_year=%202020
    let select_year = $(".select_year").val();
    // document.getElementById("select_year").action = "./src/models/graph.php";
    // console.log(select_year);
    let link_year = "./src/models/graph.php?select_year=" + select_year;
    // console.log(link_year);
    location.replace(link_year);
    // var fileAction = "./src/models/graph.php";
    // var strAction = fileAction + "?select_year=" + select_year;
    // document.frmMain.action = strAction;
    // document.frmMain.submit();

    // $.ajax({
    //   type: "POST",
    //   url: "./src/models/graph.php",
    //   data: {
    //     select_year: select_year,
    //   },
    //   dataType: "json",
    //   success: function (remine) {
    //     if (remine.status == "success") {
    //       $("#modal-graph").modal("show");

    //     }
    //   },
    // });
  });
});
