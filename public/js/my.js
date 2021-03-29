// $(document).ready(function(){
//     $("#myInput").on("keyup", function() {
//       var value = $(this).val().toLowerCase();
//       $("#myTable tr").filter(function() {
//         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//       });
//     });
//   });

var today = new Date();
var hourNow = today.getHours();
var greeting;
var icon;

if (hourNow < 12){
  greeting = "Good Morning";
  
}
else if (hourNow < 20){
  greeting = 'Good afternoon!';
  
}
else if (hourNow < 24){
  greeting = "Good evening"
  
}
else {
  greeting = "Welcome";
}

document.getElementById("col-1").innerHTML = greeting ;