$(window).load(function () {
    var options ={
        size : "small",
        onColor : "danger",
        offColor : "success",
        onText : "YES",
        offText : "NO"
    };

    $("[name='answer']").bootstrapSwitch(options);

  });
