$(document).ready(function(){

	var options = {
	    url: "../personas",

	    getValue: "nombre",

	    template: {
	        type: "description",
	        fields: {
	            description: "documento"
	        }
	    },

	    list: {
	        match: {
	            enabled: true 
	        },
	        onSelectItemEvent: function() {
				var value = $("#persona-combo").getSelectedItemData().id;
				$("#persona-id").val(value);
			}
	    },

	    theme: "plate-dark"
	};

	$("#persona-combo").easyAutocomplete(options);

	var options2 = {
	    url: "../conceptos",

	    getValue: "nombre",

	    template: {
	        type: "description",
	        fields: {
	            description: "descripcion"
	        }
	    },

	    list: {
	        match: {
	            enabled: true 
	        },
	        onSelectItemEvent: function() {
				var value = $("#concepto-combo").getSelectedItemData().id;
				$("#concepto-id").val(value);
			}
	    },

	    theme: "plate-dark"
	};

	$("#concepto-combo").easyAutocomplete(options2);

});