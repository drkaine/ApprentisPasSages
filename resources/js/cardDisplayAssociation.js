//////////////////////////////////////////////////////////////////////////////
function btnEvenement(){
	$('#evenementAssociation').on('click', function(){
	$(this).addClass('textDecoration');
	$('#descriptionAssociation, #statutAssociation').removeClass('textDecoration');
	$("#textEvenement").removeClass('displayNone');
	$("#textDescription, #textStatut").addClass('displayNone');
});
}

function btnDescrisption(){
	$('#descriptionAssociation').on('click', function(){
	$(this).addClass('textDecoration');
	$('#evenementAssociation, #statutAssociation').removeClass('textDecoration');
	$("#textEvenement, #textStatut").addClass('displayNone');
	$("#textDescription").removeClass('displayNone');
});
}

function btnStatut(){
	$('#statutAssociation').on('click', function(){
	$(this).addClass('textDecoration');
	$('#evenementAssociation, #descriptionAssociation').removeClass('textDecoration');
	$("#textEvenement,#textDescription").addClass('displayNone');
	$("#textStatut").removeClass('displayNone');
});
}
///////////////////////////////////////////////////////////////////////////////////
$(document).ready(function(){
	btnEvenement();
	btnDescrisption();
	btnStatut();
});

