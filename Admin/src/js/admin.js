$(document).ready(function () {
  $(".reward_add").click(function () {
    var name_reward = $(".name_reward").val();
    var point_ex_reward = $(".point_ex_reward").val();
    var file_reward = localStorage.getItem("img_reward");

    // console.log("name_reward is " + name_reward);
    // console.log("point_ex_reward is " + point_ex_reward);
    // console.log("file_reward is " + file_reward);
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
});
