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

		  		var option = '<option value="">Select Product</option>';
			  		$.each(data, function( index, value ) {
			  			option = option + "<option value='"+value.product_id+"'>"+value.product_description+"</option>";
					});

			     $(".product-selector").html(option);
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


			  		var tr = '';

			  		$.each(data, function( index, value ) {
			  			tr = tr + "<tr>";
		  				tr = tr + "<td>"+value.invoice_num+"</td>";
		  				tr = tr + "<td>"+value.invoice_date+"</td>";
		  				tr = tr + "<td>"+value.product_description+"</td>";
		  				tr = tr + "<td>"+value.qty+"</td>";
		  				tr = tr + "<td>"+value.price+"</td>";
		  				tr = tr + "<td>"+value.total+"</td>";
		  				tr = tr + "</tr>";
					});
			     	$(".data-append").html(tr);
			  }
			});
    }); 
}); 