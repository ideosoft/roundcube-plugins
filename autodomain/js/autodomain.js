jQuery(function($){
  $('#rcmloginuser').change(function(){
	parts = location.hostname.split('.');
	if(parts.length > 2) {
		parts.shift();
	}
	domain = parts.join('.');
    email = $(this).val();
    if (!email.match(/@.*/)) {
      $(this).val(email + "@" + domain);
    }
  });
});
