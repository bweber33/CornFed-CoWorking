/*VALIDATION FOR BOOK.HTML FORM*/

function validateForm() {
       
      var x = document.forms["bookReq"]["room"].value;
          if (x == "") {
            alert("Please Select a conference room.");
            return false;
        }
        
      var x = document.forms["bookReq"]["F_Name"].value;
        if (x == "") {
            alert("First name must be filled out");
            return false;
        }

      var x = document.forms["bookReq"]["L_Name"].value;
          if (x == "") {
              alert("Last name must be filled out");
              return false;
        }
        
      var x = document.forms["bookReq"]["email"].value;
          if (x == "") {
            alert("The Email field cannot be left blank.");
            return false;
        }
      
      document.book_script.submit();
}

/////////////////////////////////////////////////////////////////
/*VALIDATION FOR CONTACT_MODAL FORM*/
/////////////////////////////////////////////////////////////////

function validateContact() {
        
      var w = document.forms["contactForm"]["F_Name"].value;
        if (w == "") {
            alert("First name must be filled out");
            return false;
        }

      var x = document.forms["contactForm"]["L_Name"].value;
          if (x == "") {
              alert("Last name must be filled out");
              return false;
        }
        
      var y = document.forms["contactForm"]["email"].value;
          if (y == "") {
            alert("The Email field cannot be left blank.");
            return false;
        }
        
      var z = document.forms["contactForm"]["message-text"].value;
          if (z == "") {
            alert("The Message field cannot be left blank.");
            return false;
        }
        
      document.contact_modal.submit();
    
}

/////////////////////////////////////////////////////////////////
/*VALIDATION FOR LOGIN_MODAL FORM*/
/////////////////////////////////////////////////////////////////

function validateLogin() {
      var x = document.forms["loginForm"]["login_email"].value;
          if (x == "") {
            alert("The Email field cannot be left blank.");
            return false;
        }
        
      var x = document.forms["loginForm"]["login_password"].value;
          if (x == "") {
            alert("Please enter a valid Password.");
            return false;
        }
        
      document.login_modal.submit();
}

/////////////////////////////////////////////////////////////////
/*VALIDATION FOR EMP_LOGIN_MODAL FORM*/
/////////////////////////////////////////////////////////////////

function validateLogin() {
      var x = document.forms["empLogin"]["emp_login_email"].value;
          if (x == "") {
            alert("The Email field cannot be left blank.");
            return false;
        }
        
      var x = document.forms["loginForm"]["emp_login_password"].value;
          if (x == "") {
            alert("Please enter a valid Password.");
            return false;
        }
        
      document.login_modal.submit();
}

/////////////////////////////////////////////////////////////////
/*VALIDATION FOR REGISTER_MODAL FORM*/
/////////////////////////////////////////////////////////////////

function validateRegister() {
        
      var x = document.forms["registerForm"]["reg_F_Name"].value;
        if (x == "") {
            alert("First name must be filled out");
            return false;
        }

      var x = document.forms["registerForm"]["reg_L_Name"].value;
          if (x == "") {
              alert("Last name must be filled out");
              return false;
        }
        
      var x = document.forms["registerForm"]["reg_email"].value;
          if (x == "") {
            alert("The Email field cannot be left blank.");
            return false;
        }
        
      var x = document.forms["registerForm"]["reg_username"].value;
          if (x == "") {
            alert("The Message field cannot be left blank.");
            return false;
        }
        
      var x = document.forms["registerForm"]["reg_password"].value;
          if (x == "") {
            alert("The Message field cannot be left blank.");
            return false;
        }
        
      document.register_modal.submit();
}



function togglePass(){
  document.getElementById('myPasswordField').type = 'text';
}

/*Disables Book Room Link when Session Not Set*/
var d = document.getElementById("book");
d.className = d.className + " disabled";










