$( document ).ready(function() {

    // hide sign up form
    $("#signUpForm").hide();

    //display sign up form when sign up button clicked
    $("#signBtn").click(function(){
      $("#loginForm").fadeOut();
      $("#signUpForm").fadeIn();
    });

});
