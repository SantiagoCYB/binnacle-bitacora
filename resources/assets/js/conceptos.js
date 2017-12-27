$(document).ready(function(){
	var options = {
	    url: "resources/people.json",

	    getValue: "name",

	    template: {
	        type: "description",
	        fields: {
	            description: "email"
	        }
	    },

	    list: {
	        match: {
	            enabled: true
	        }
	    },

	    theme: "plate-dark"
	};
	
	$("#example-mail").easyAutocomplete(options);
});