
<body>
<input name="fromStation" id="stationsFrom">
</body>

<!-- auto sugst -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="myjs/jquery.easy-autocomplete.min.js"></script>

<script src="myjs/jquery.easy-autocomplete.min.js"></script>
<link rel="stylesheet" href="myjs/easy-autocomplete.min.css">



<script type="text/javascript">
	var options = {
	  url: "stations.json",
	  getValue: "code",

	  list: {	
	    match: {
	      enabled: true
	    },
	    theme: "square"
	  },
	  template: {
			type: "custom",
			method: function(value, item) {
				return  item.name + "  |   " + value;
			}
		},
	};


$("#stationsFrom").easyAutocomplete(options);
</script>
<!-- close auto sgst-->

