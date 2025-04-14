	function Alert(title,msg,button,redir)
	{
		alertify.alert(title,msg,function()
		{
			if((redir!='') && (redir!=undefined) && (redir!=NaN) && (redir!='undefined') && (redir!='NaN'))
			{ 
				setTimeout(document.location.href=redir,2300); 
			}
		});	
	}

	function excluir(m,a,id){
		if(confirm('Excluir esse registro?')){
			document.location.replace('panel.php?m='+m+'&a='+a+'&id='+id+'');
		};
	}
	