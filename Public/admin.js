//admin.js
$(function(){
	jf.hide();
	$('.newsSub').click(function(){
		
	});
	$('input[name="addS"]').click(function(){
		$('.dialog .dialog-head').find('strong').html('添加文章类别');
		$('.dialog .dialog-foot').find('.sortSub').attr('data-toggle','a');
		$('.dialog .dialog-foot').find('.sortSub').attr('data-based',"");
	});
	$('.sortEdit').click(function(){
		var r=$(this).closest('tr');
		var c=r.find('input[type="checkbox"]');
		var n=r.children().eq(1);
		$('input[name="sortName"]').val(n.html());
		$('.dialog .dialog-head').find('strong').html('编辑文章类别');
		$('.dialog .dialog-foot').find('.sortSub').attr('data-toggle','u');
		$('.dialog .dialog-foot').find('.sortSub').attr('data-based',c.val());
	});

	$('.sortDel').click(function(){
		if(!confirm('是否删除？')) return false;
		jf.load('正在删除.....');
		var r=$(this).closest('tr');
		var c=r.find('input[type="checkbox"]');
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=c&e=sc','a=d&i='+c.val(),'POST'));
		if(res.status==1){

		}else{
			alert('删除失败');
		}
		jf.hide();
		window.location.reload();
	});

	$('.sortAll').click(function(){
		if(!confirm('是否删除？')) return false;
		jf.load('正在删除.....');
		var b=$(this).closest('form').find("input[type='checkbox']");
		var arrId=new Array();
		$(b).each(function(index,element){
			if(element.checked==true){
				arrId.push(element.value);
			}
		});
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=c&e=sc','a=d&i='+arrId.join(),'POST'));
		if(res.status==1){

		}else{
			alert('删除失败');
		}
		jf.hide();
		window.location.reload();
	});

	$('body').on('click','.dialog-win .sortSub',function(){
		var i=$('.dialog-win input[name="sortName"]');
		if(i.val().trim()!=""){
			var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=c&e=sc','a='+$(this).attr('data-toggle')+'&n='+$(this).attr('data-based')+'&i='+i.val().trim(),'POST'));
		}
		window.location.reload();
	});
});
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
var jf=new Object(myFrame);
jf.load();