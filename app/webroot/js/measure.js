$(function(){
    $("#form").submit(function(){
        var answer = [];
        $("[name='answer[]']:checked").each(function(){
            answer.push(this.value);
        });

        $.ajax({
            type: "POST",
            url: "result",
            data: {
                "answer":answer
            },
            success: function(data){
              alert(data);
            },
            error: function (data) {
                alert(data);
            }
        });
        return false
    });
});
