//admin.js
var myFrame={
	options:[],
	ajaxMethod:function(url,data,type) {
		var result=null;
		$.ajax({
			type:type,
			url:url,
			async:false,
			data:data,
			error:function(msg){result=msg;},
			success:function(msg){result=msg;}
		});
		return result;
	},
	load:function(tip,url){
		var html='<div class="loading">';
			html+='<div class="loading-info">';
			html+='<div class="loading-img"><img src="'+url+'/Public/loading.gif"></div>';
			html+='<div class="loading-i">'+tip+'</div></div></div>';
		$('body').append(html);
	},
	hide:function(){
		var e=$('body');var b=e.find('.loading');
		if(b.length&&b.length>0){
			b.remove();
		}
	},
};
var jf=new Object(myFrame);