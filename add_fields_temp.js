$(document).ready(function(){
var max_fields = 99;
var add_input_button = $('.add_input_button');
var field_wrapper = $('.field_wrapper');
var new_field_html = '<div class="row"><div class="col-md-4 pr-1"><input type="text" name="input_field_temp[]" value="" class="form-control"/></div><div class="col-md-4 pr-1"><input type="text" name="input_field_td[]" value="" class="form-control"></div><div class="col-md-4 pr-1"><input type="text" name="input_field_df[]" value="" class="form-control"/></div><a href="javascript:void(0);" class="remove_button" style="transform: translate(77vw, -1.5vw)"><img src="remove-icon.png"/></a></div>';
var input_count = 1;

// Add button dynamically
$(add_input_button).click(function(){
if(input_count < max_fields){
input_count++;
$(field_wrapper).append(new_field_html);
}
});

// Remove dynamically added button
$(field_wrapper).on('click', '.remove_button', function(e){
e.preventDefault();
$(this).parent('div').remove();
input_count--;
});
});