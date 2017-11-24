$(document).ready(function(){
$("#findMyWeather").click(function(event){
  event.preventDefault();

  if ($("#city").val()!="") {
  $.get("php/scrapper.php?city="+$("#city").val(), function(data){
    alert(data);
  });
}else {
  alert("Please enter a city");
}
  });
});
// });
