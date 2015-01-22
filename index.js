function searchTerm(search){
	console.log(search);
	return $.ajax({
		url: 'search.php',
		type:'GET',
		dataType: 'json',
		data: {
			artist: search
		}
	});
};

// HandleBars
var movieTemplateFunction = Handlebars.compile($('#result-template').html());

$('form').on('submit', function(e){
	e.preventDefault();
	var term = $('#search').val();
	var promise = searchTerm(term);
	promise.done(function (response){
		console.log("HI");
		console.log(response);
		var html = '';
		for(var i=0;i< response.length; i++){
			html += movieTemplateFunction(response[i]);
		}

		$('#results').html(html);
	});

	promise.fail(function (response){
		console.log("FAIL");
	});

	// promise.always(function (response){
	// 	console.log("Working though");
	// 	console.log(response);
	// 	var html = '';
	// 	for(var i=0;i< response.length; i++){
	// 		console.log(response.data[i].title);
	// 		html += movieTemplateFunction(response.data[i]);
	// 	}
	// 	$('#results').html(html);
	// });
});