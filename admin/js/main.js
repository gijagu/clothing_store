$(document).ready(start);
function start () 
{
	$("#shopingcar .panel-body").load("php/addcar.php");
	$(".add-item").on('click', additem)

	$('#btn-add-item').on('click', function(){
		$($(this).attr('data-item')).toggle();
	});
}

function additem () 
{

	$("#shopingcar .panel-body").load("php/addcar.php?p="+$(this).val());
}
