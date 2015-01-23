function searchTerm(search){
	// console.log("DVD: "+search);
	return $.ajax({
		url: 'search.php',
		type:'GET',
		dataType: 'json',
		data: {
			searchTerm: search
		}
	});
};

function searchGenre(search){
	// console.log("Rating: "+search);
	return $.ajax({
		url: 'rating.php',
		type:'GET',
		dataType: 'json',
		data: {
			genre: search
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
		var html = '';
		html += '<h2><strong> You searched for <span class="highlight">'+term+'</span>:</strong></h2>';
		if(response.length == 0){
			html+='<p class="dvdNotFound"> Sorry, we dont seem to have any dvd with the term <span class="highlight">'+term+'</span></p><br><p><a href="">Click Here</a> to go back.</p>';
		}
		for(var i=0;i< response.length; i++){
			html += movieTemplateFunction(response[i]);
		}
		$('#results').html(html);
	});

	promise.fail(function (response){
		// console.log(response);
	});
});

$('#results').on('click', 'a.Rating', function(e) {
	e.preventDefault();
 	var term = e.currentTarget.innerText;
	var promise = searchGenre(term);

	promise.done(function (response){
		var html = '';
		html += '<h2><strong> Here are the Ratings with <span class="highlight">'+term+'</span>:</strong></h2>';
		var i=0;
		while(response[i] != null){
			html += movieTemplateFunction(response[i]);
			++i;
		}
		$('#results').html(html);
	});
	promise.fail(function (response){
		// console.log(response);
	});
});