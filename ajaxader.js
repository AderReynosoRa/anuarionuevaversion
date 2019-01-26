var xhr = new XMLHttpRequest();
xhr.open("GET", "script.php" , true);
xhr.send();

var xhr = new XMLHttpRequest();
xhr.open("GET", "script.php", true);
xhr.send();

var xhr = new XMLHttpRequest();
xhr.open("GET" , "script.php", true);
xhr.send();

var xhr = new XMLHttpRequest();
xhr.open("POST", "archivo.php", true);
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.send("first_name=Bob&last_name=Smith");