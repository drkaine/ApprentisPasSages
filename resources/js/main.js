
function borderGroup(){

	$('#TeamBureau').on("click",function(){
		$('.1').addClass('select');
		$('.2,.3,.4,.5').removeClass('select');
	});

	$('#teamCoordonnateur').on("click",function(){
		$('.1,.3,.4,.5').removeClass('select');
		$('.2').addClass('select');
	});

	$('#teamAnimation').on("click",function(){
		$('.1,.2,.4,.5').removeClass('select');
		$('.3').addClass('select');
	});

	$('#teamMembre').on("click",function(){
		$('.5').removeClass('select');
		$('.1,.2,.3,.4').addClass('select');
	});

	$('#teamCs').on("click",function(){
		$('.1,.2,.3,.4').removeClass('select');
		$('.5').addClass('select');

	});
}

	


////////////////////////////////////////////////////////

/*$(document).ready(function() {*/

		$(".dropdown-toggle").dropdown();
		borderGroup();

		$('#keywords').jQCloud(words, {
			/*classPattern: "w9",*/
			colors: ["whitesmoke", "#CCCCFF", "#b7b5a1","#f4f7b4"],
  			autoResize:true,
  			fontSize: {
    			from: 0.03,
    			to: 0.01
  			}
});
/*});*/


