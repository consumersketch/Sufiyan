/*
 * To get selector product depend on client
 */
$(".client-selector").change(function () {

	var clientValue = $(".client-selector").val();
	$.ajax({
		  type: "POST",
		  url: Routing.generate('report_product_list_from_client_id'),
		  data: { client_id: clientValue},
		  cache: false,
		  success: function(data) {

		  		console.log(data);
		  		var option = '';
		  		$.each(data, function( index, value ) {
		  			option = option + "<option value="+value.product_id+">"+value.product_id+"</option>";
				});

		     $(".product-selector").append(option);
		  }
		});
});


/*
 * To get final report
 */
$(document).ready(function() { 
    // bind 'myForm' and provide a simple callback function 
    $('#myForm').ajaxForm(function() { 

        var clientValue = $(".client-selector").val();
		var productValue = $(".product-selector").val();
		var dateValue = $(".date-selector").val();

		$.ajax({
			  type: "POST",
			  url: Routing.generate('report_product_list'),
			  data: { client_id: clientValue, product_id: productValue, date: dateValue},
			  cache: false,
			  success: function(data) {

			  		console.log(data);
			  		var table = '';

			  		$.each(data, function( index, value ) {
		  				option = option + "<tr>"+value.product_id+"</tr>";
					});

			     //$(".product-selector").append(option);
			  }
			});
    }); 
}); 