var area = $('[class="ques"]:checked').map(function(){
  return $(this).val();
}).get();

setInterval(alert("TEST"), 3000);
