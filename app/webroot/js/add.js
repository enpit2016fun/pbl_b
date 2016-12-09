jQuery(document).ready( function() {
  $("#ques_area").focusout(function(e) {
    var text = $("#ques_area").val();
    if (text != "") {
      $("#ques_area").css('border', '2px solid #ed783f');
    } else {
      $("#ques_area").css('border', '2px solid #ccc');
    }
  });
  $("#ques_area").focusin(function(e) {
    $("#ques_area").css('border', '2px solid #ed783f');
  });

  $("#pt_area").focusout(function(e) {
    var text = $("#pt_area").val();
    if (text != "") {
      $("#pt_area").css('border', '2px solid #ed783f');
    } else {
      $("#pt_area").css('border', '2px solid #ccc');
    }
  });
  $("#pt_area").focusin(function(e) {
    $("#pt_area").css('border', '2px solid #ed783f');
  });

  $("#solu_area").focusout(function(e) {
    var text = $("#solu_area").val();
    if (text != "") {
      $("#solu_area").css('border', '2px solid #ed783f');
    } else {
      $("#solu_area").css('border', '2px solid #ccc');
    }
  });
  $("#solu_area").focusin(function(e) {
    $("#solu_area").css('border', '2px solid #ed783f');
  });
});
