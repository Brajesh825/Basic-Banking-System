$(document).ready(function(){
    filterSearch();	
    $('.productDetail').click(function(){
        filterSearch();
    });		
});
function filterSearch() {
	$('.searchResult').html('<div id="loading">Loading .....</div>');
	var action = 'fetch_data';
	var brand = getFilterData('brand');
	var ram = getFilterData('ram');
	var storage = getFilterData('storage');
	$.ajax({
		url:"action.php",
		method:"POST",
		dataType: "json",		
		data:{action:action,  brand:brand, ram:ram, storage:storage},
		success:function(data){
			$('.searchResult').html(data.html);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}