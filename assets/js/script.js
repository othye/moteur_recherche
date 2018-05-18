// des que la page est chargée
$(document).ready(function() {
	// lancer une action dès que il y a une frappe dans l'input #search
	$('#search').on('keyup', function() {
		
		var query = $(this).val();
		
		if(query.length > 1) {
			$("#content").find('tbody').empty();

			$.ajax({
				url : 'assets/requet.php',
				type : 'GET', // Le type de la requête HTTP, ici devenu POST
				data : {
					term: query
				},
				dataType : 'json',
				success : function(response) {

					// on stock le template dans une variable template
					var template = $('#template').html();
					
					// on p	arse le template avec mustache
					Mustache.parse(template);

					// on injecte nos variables dans le template
					var rendered = Mustache.render(template, {datas: response});

					// on injecte le rendu du template dans notre tbody
					$("#content").find('tbody').html(rendered);		
						
				}
				

			});
		}
		//console.log(query);
		
	
		// ajax

		
	}) 

});

/* $(function() {
    
    //autocomplete
    $("#search").autocomplete({
        source: 'assets/requet.php',
        minLength: 1
    });                

});

 */