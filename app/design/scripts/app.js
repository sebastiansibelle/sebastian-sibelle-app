// app specific javascript
var app = {

	url: null,

	post: function(url, data, callback) {
		app.ajax('post', url, data, callback);
	},

	get: function(url, data, callback) {
		app.ajax('get', url, data, callback);
	},

	ajax: function(type, url, data, callback) {
		$.ajax({
			// first do data
			'type': type,
			'url': url,
			'data': $.extend({ajax: true, ajax_nonce: app.nonce}, data),
			'dataType': 'json',
			'success': function(response_data, code, xhr) { 
				app.nonce = response_data.nonce;
				
				if (callback) 
				{ 
					callback.call(this, response_data, code, xhr); 
				} 

				if (ajax_handlers)
				{
					ajax_handlers.local.success(response_data, code, xhr);
				}
			}
		});

	},

	init: function() {
	}
}