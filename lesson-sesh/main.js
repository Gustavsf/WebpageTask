
if ( location.href == "http://localhost/PHPdayOne/lesson-sesh/index.php?page=register" ) {
    document.getElementById("sumbit-form").addEventListener("click", function () {
        var pass1 = document.getElementById("password-one").value;
        var pass2 = document.getElementById("password-two").value;
    
    var i = 0;
    
        if(document.getElementById("uname").value != ""){
            i++;
        }else{
            alert('username bad');
        }
        if(document.getElementById("fname").value != ""){
            i++;
        }else{
            alert('firstname bad');
        }
        if(document.getElementById("checkbox-tc").checked){
            i++;
        }else{
            alert('agree with terms plz');
        }
    
        if(pass1.length >= 8){
            if(pass1 == pass2){
                i++;
            } else{
                alert('Passwords dont match');
            }
        } else {
            alert('Password is not long enough');
        }
        if(i == 4){
            alert('you have registrated');
        }
      });
}
if ( location.href == "http://localhost/PHPdayOne/lesson-sesh/index.php?page=chat" ){
    document.getElementById("btn-send").addEventListener("click", function () {
        document.getElementById("txt-chat").value += document.getElementById("uname-chat").value + ": " + document.getElementById("msg-chat").value + "\n";
        document.getElementById("msg-chat").value = "";
    });
}



