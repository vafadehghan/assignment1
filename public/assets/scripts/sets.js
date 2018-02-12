$(function() {


	var data = {
	api: {
		scenario: "info/",
		category: "info/category/",
		catalog: "info/catalog/",
		sets: "info/bundle/"
	},

	getScenario: function (id, callback) {
		if (id === null) {
			id = '';
		}
		$.getJSON(this.api.scenario + id, function(json) {
			if (callback) callback(json);
		});
	},

	getCategory: function (id, callback) {
		if (id === null) {
			id = '';
		}
		$.getJSON(this.api.category + id, function (json) {
			if (callback) callback(json);
		});
	},

	getCatalog: function (id, callback) {
		if (id === null) {
			id = '';
		}
		$.getJSON(this.api.catalog + id, function (json) {
			if (callback) callback(json);
		});
	},

	getSets: function (id, callback) {
		if (id === null) {
			id = '';
		}
		$.getJSON(this.api.sets + id, function (json) {
			if (callback) callback(json);
		});
	}
};

    /**
     * Event listener for homepage presets.
     */
    $("#homepage-presets").on('click', 'li', loadPreset);

    /**
     * Loads the pre-set options onto the character.
     */
    function loadPreset()
    {
        // Get the set id.
        var setID = $(this).attr("data-setid");

        // Query the specific set.
        data.getSets(setID, function(set) {
            
            // Load in the accessories.
            data.getCatalog(null, function(catalog) {

                // Set chest preset.
                $('#head').html('');
                $('#head').prepend('<img src="' + catalog[set["head"]].accessoryImg + '" />');
				/*
                // Set weapon preset.
                $('#weapon').html('');
                $('#weapon').prepend('<img class="draggable drag-drop weapon can-drop" src="' + catalog[set["weapon"]].accessoryImage + '" />')

                // Set accessory preset.
                $('#accessory').html('');
                $('#accessory').prepend('<img class="draggable drag-drop accessory can-drop" src="' + catalog[set["accessory"]].accessoryImage + '" />')

                // Get the values of all the sets.
                // TODO: Add a column in pre-defined sets with this value calculated beforehand.
                var damage = parseInt(catalog[set["chest"]].accessoryDamage) + parseInt(catalog[set["head"]].accessoryDamage) + parseInt(catalog[set["weapon"]].accessoryDamage) + parseInt(catalog[set["accessory"]].accessoryDamage);
                var protection = parseInt(catalog[set["chest"]].accessoryProtection) + parseInt(catalog[set["head"]].accessoryProtection) + parseInt(catalog[set["weapon"]].accessoryProtection) + parseInt(catalog[set["accessory"]].accessoryProtection);
                var weight = parseInt(catalog[set["chest"]].accessoryWeight) + parseInt(catalog[set["head"]].accessoryWeight) + parseInt(catalog[set["weapon"]].accessoryWeight) + parseInt(catalog[set["accessory"]].accessoryWeight);

                // Get our stats bars
                let damageBar = $('.stats .progress #damage-bar').get(0);
                let protectionBar = $('.stats .progress #protection-bar').get(0);
                let weightBar = $('.stats .progress #weight-bar').get(0);

                // Update stat bar values.
                damageBar.setAttribute('aria-valuenow', parseInt(damage));
                protectionBar.setAttribute('aria-valuenow', parseInt(protection));
                weightBar.setAttribute('aria-valuenow', parseInt(weight));

                // Update width settings.
                damageBar.style.width = "" + damage + "%";
                protectionBar.style.width = "" + protection + "%";
                weightBar.style.width = "" + weight + "%";
				*/
            });

        });
    }

});

/**
 * Places all the items on screen from a particular set.
 * @param  {String} set the name of the set
 */
function getItems(set) {
    console.log(set);
}