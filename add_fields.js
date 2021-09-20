$(document).ready(function(){
var max_fields = 99;
var add_input_button = $('.add_input_button');
var field_wrapper = $('.field_wrapper');
var new_field_html = '<div class="col-md-4 pr-1" style="transform: translate(-0.8vw)"><input type="text" name="input_field[]" value="" class="form-control"/><a href="javascript:void(0);" class="remove_input_button" title="Remove field"><img src="remove-icon.png" style="transform: translate(25vw, -1.5vw)"/></a></div>';
var input_count = 1;
// Add button dynamically
$(add_input_button).click(function(){
if(input_count < max_fields){
input_count++;
$(field_wrapper).append(new_field_html);
}
});
// Remove dynamically added button
$(field_wrapper).on('click', '.remove_input_button', function(e){
e.preventDefault();
$(this).parent('div').remove();
input_count--;
});
});