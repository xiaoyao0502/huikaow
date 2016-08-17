$(function(){
	var ec = new evercookie();
	ec.get("exam_psid", function(data){
		if(!data || data.length != 32){
			ec.set('exam_psid','<?php echo $this->tpl_var['sessionid']; ?>');
		}
		else
		{
			if(data != '<?php echo $this->tpl_var['sessionid']; ?>')
			{
				alert(data+'|'+'<?php echo $this->tpl_var['sessionid']; ?>');
				window.location.reload();
			}

		}
	});
	var uec = new evercookie();
	uec.get("exam_currentuser", function(data){
		if(!data || data == ''){
			ec.set('exam_currentuser','<?php echo $_COOKIE['exam_currentuser']; ?>');
		}
	});
});