$(function(){
	$("a.vote_up").click(function(){
	    the_id = $(this).attr('id');
	    $("span#votes_count"+the_id).fadeOut("fast");
		$.ajax({
			type: "POST",
			data: "action=vote_up&id="+$(this).attr("id"),
			url: "votes.php",
			success: function(msg)
			{
				$("span#votes_count"+the_id).html(msg);
				
				$("span#votes_count"+the_id).fadeIn();
		
				$("span#vote_buttons"+the_id).remove();
			}
		});
	});
});	

function getName (str){
    if (str.lastIndexOf('\\')){
        var i = str.lastIndexOf('\\')+1;
    }
    else{
        var i = str.lastIndexOf('/')+1;
    }						
    var filename = str.slice(i);			
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
}