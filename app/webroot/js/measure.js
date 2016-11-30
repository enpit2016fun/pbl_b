$(function(){
    $("#measureForm").submit(function(){
        var answer = [];
        $("[name='answer[]']:checked").each(function(){
            answer.push(this.value);
        });

        $.ajax({
            type: "POST",
            url: "/miyai/cakephp/question/result",
            data: {
                "answer":answer
            },
            success: function(data){
              alert(data);
            },
            error: function(xhr, textStatus, errorThrown) {
              var res = $.parseJSON(xhr.responseText);
              alert(res);
            }
        });
        return false
    });
});
