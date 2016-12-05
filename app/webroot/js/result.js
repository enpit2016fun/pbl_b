(function () {
  var max_height = $('#blackboard').offset().top,
      min_height = $('#gage').offset().top,
      one_percentage = (min_height - max_height) / 100;

  var meas_mood = $("#measure_result").text();
  meas_mood = meas_mood.slice(0, -1);
  
  var gage_height = one_percentage * meas_mood,
      gage_top = min_height - gage_height;

  $("#gage").css("top", gage_top);
  $("#gage").css("height",gage_height); 
}());
