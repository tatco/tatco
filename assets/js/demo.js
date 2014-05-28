$(document).ready(function() {		
		//$('#left-panel').addClass('animated bounceInRight');
		$('#project-progress').css('width', '50%');
		$('#msgs-badge').addClass('animated bounceIn');	
		
		$('#my-task-list').popover({
			html:true			
		})
		
		$('#text-editor').wysihtml5();
		
		$("#calendario_de_avisos").zabuto_calendar({language: "en"});
});
