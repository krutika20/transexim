(function($) {
	var regExp = new RegExp('[a-zA-Z]'),
    inputVal = '';
    
    $(document).on('keyup','#phone',function(e){
    	var value = $(this).val();

	    // Do not allow alphabets to be entered.
	    if (regExp.test(value)) {
	        $(this).val(inputVal)
	        e.preventDefault();
	    }
	    else{ 
	    	inputVal = value
	    }
    })
}(jQuery));
