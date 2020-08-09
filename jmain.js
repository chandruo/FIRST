function validate() {
    var username = document.getElementById("Email1");
    var password = document.getElementById("Password1");

    if (username.value.trim() == "") {

        //alert("Blank Username");      
        document.getElementById("highlight").style.visibility = "visible";
        return false;

    } else if (password.value.trim() == "") {
        return false;

    } else if (password.value.trim().length < 5) {
        alert("Password length too short");
        return false;

    } else {
        return true;
    }
}