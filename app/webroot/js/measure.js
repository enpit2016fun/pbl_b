var area = $('[class="ques"]:checked').map(function(){
  return $(this).val();
}).get();

setInterval(console.log(area);, 3000);
