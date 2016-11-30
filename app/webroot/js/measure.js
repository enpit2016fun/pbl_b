var answer = [];
$("[name='answer[]']:checked").each(function(){
    answer.push(this.value);
});

console.log(answer);
