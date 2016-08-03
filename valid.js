function myFunction(){
    
    var username = document.getElementsByClassName("testUsername")
    var password = document.getElementsByClassName("testPassword");
    var email = document.getElementsByClassName("testEamil");
    
    if(username ==''){
        document.getElementsByClassName("username").innerHTML = "ban chua nhap ten dang nhap";
    }
    
    if(password==""){
        document.getElementsByClassName("password").innerHTML = "ban chua nhap mat khau";
    }
    if(password.length < 8){
        document.getElementsByClassName("password").innerHTML = "mat khau phai co 8 ki tu";
    }
    
    if(email == ""){
        document.getElementsByClassName("email").innerHTML = "ban chua nhap email";
    }
    
}