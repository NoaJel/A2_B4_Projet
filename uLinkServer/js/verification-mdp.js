$(document).ready(() => {
    $('#confirm_password').keyup(() => {
        var confirm_password = $.trim($("#confirm_password").val());
        var password = $.trim($("#password").val());
        if (password == confirm_password){




        }
        else
        {
            
        }
    });
});


/* $(document).ready(function(){
    $("#delegate").click(function(){
        if (document.querySelector('#delegate').hasAttribute("checked"))
        {
            $("#perm").css({"display": "inline-block"});
        }
        else
        {
            $("#perm").css({"display": "none"});
        }
    });
 */







/*     $(document).ready(function(){
        var checked = false;
     $("#delegate").click(function(){

        if (checked == false) {
            checked = true;
            $("#perm").css({"display": "inline-block"});
         }
         else {
            checked = false
            $("#perm").css({"display": "none"});
         }
    }); 
}); */




    // Get the checkbox
    var checkBox = document.getElementById("delegate");
    // Get the output text
    var text = document.getElementById("perm");

$(document).ready(function(){
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }


    $("#delegate").click(function(){
    if (checkBox.checked == true){
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
    });
});