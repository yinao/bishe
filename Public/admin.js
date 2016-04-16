//admin.js
var jf=new Object(myFrame);
jf.load();
$(function(){
	
});
window.onload=function(){
	jf.hide();
}
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
	load:function(tip=""){
		var html='<div class="loading">';
			html+='<div class="loading-info">';
			html+='<div class="loading-img"><img src="'+this.getRealUrl()+'/Public/loading.gif"></div>';
			html+='<div class="loading-i">'+tip+'</div></div></div>';
		$('body').append(html);
	},
	hide:function(){
		var e=$('body');var b=e.find('.loading');
		if(b.length&&b.length>0){
			b.remove();
		}
	},
	getRealUrl:function(){
		var curWwwPath=window.document.location.href;
	  	var pathName=window.document.location.pathname;
	  	var pos=curWwwPath.indexOf(pathName);
	  	var localhostPaht=curWwwPath.substring(0,pos);
	  	var projectName=pathName.substring(0,pathName.substr(1).indexOf('/')+1);
	  	var realPath=localhostPaht+projectName;
	  	return realPath;
	},
};