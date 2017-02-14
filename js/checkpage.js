function onpageload(i){
  var user_curr_que = getCookie("curr_que");
  console.log(user_curr_que);
  if(user_curr_que != ""){
    if (user_curr_que != i) {
      window.location = "404.html";
    }
    else {
      var scores = [0,50,100,150,200,250,350,450,550,650,750,900,1050,1200,1350,1500,1700,1900,2100,2300,2500];
      var img_url = getCookie("img_url");
      img_url = "http://i.imgur.com/" + img_url;
      console.log(img_url);
      document.getElementById("que").src = img_url;
      document.getElementById("score").innerHTML = "Total Score : "+scores[i-1];
    }
  }
  else {
    window.location = "signin.html";
  }

}

function logout(){
  document.cookie = "curr_que=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "user_name=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "img_url=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location = "signin.html";
}

function getCookie(cname) {
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i = 0; i < ca.length; i++) {
  var c = ca[i];
  while (c.charAt(0) == ' ') {
      c = c.substring(1);
  }
  if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
  }
}
return "";
}
