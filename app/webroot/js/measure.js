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
              location.replace('./result');
            },
        });
        return false
    });
});
