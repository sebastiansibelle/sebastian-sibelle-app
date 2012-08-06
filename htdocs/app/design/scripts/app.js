// App specific javascript
jQuery.extend(true, app, {

	url: null,

	// Create a POST Ajax request
	post: function(url, data, callback) {
		app.ajax('post', url, data, callback);
	},

	// Create a GET Ajax request
	get: function(url, data, callback) {
		app.ajax('get', url, data, callback);
	},

	// Create an Ajax request
	ajax: function(type, url, data, callback) {
		jQuery.ajax({
			'type': type,
			'url': url,
			'data': jQuery.extend({ajax: true, ajax_nonce: app.nonce}, data),
			'dataType': 'json',
			'success': function(response_data, code, xhr) { 
				app.nonce = response_data.nonce;
				
				if (callback) 
				{ 
					callback.call(this, response_data, code, xhr); 
				} 
			}
		});
	},

	init: function() {
	}
});