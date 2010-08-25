// app specific javascript
var app = {
	post: function(url, data, callback) {
		rmit_at.ajax('post', url, data, callback);
	},

	get: function(url, data, callback) {
		rmit_at.ajax('get', url, data, callback);
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

	url: {},

	init: function() {
		$('.js_ajax_form').ajaxForm(rmit_at.get_ajax_form_options());
		rmit_at.assessment.init();
	}
}