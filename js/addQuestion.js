$(document).ready(function()
{
    console.log("Waiting to add input");
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var submit_button      = $("#submit_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e)
    { //on add input button click
        e.preventDefault();
        if(x < max_fields)
        { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><textarea rows="3" cols="50" class="form-control" name="questions[]" id="questions" placeholder="Enter a question here" style="font-size: 14px"></textarea><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e)
    { //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
    $(submit_button).click(function()
    {
        console.log("submitting form");
        
        $('textarea[name^="questions"]').each(function() {
            console.log($(this).val());
        });
        
    });
});