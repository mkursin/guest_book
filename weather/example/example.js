$(document).ready(function(){

  function NASort(a, b) {
    if (a.innerHTML == 'NA') {
        return 1;
    }
    else if (b.innerHTML == 'NA') {
        return -1;
    }
    return (a.innerHTML > b.innerHTML) ? 1 : -1;
};


			$('#country').change(function(){

                $("#city, #result").empty();

            	$.ajax({
					type: "POST",
					url: "change-country.php",
					data: "country_id="+$("#country option:selected").val(),
					success: function(html){
						$("#city").append(html);

                        $('#city option').sort(NASort).appendTo('#city');


				   }
				});
				return false;
			});






             $('#city').change(function(){

            	$.ajax({
					type: "POST",
					url: "example.php",
					data: "city_id="+$("#city option:selected").val(),
					success: function(html){
						$("#result").html(html);
                    }
				});
				return false;
			});









  	});