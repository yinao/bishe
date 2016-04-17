//admin.js
$(function(){
	jf.hide();
	$('.newsSub').click(function(){
		$(this).closest('form').find('input[data-validate],textarea[data-validate],select[data-validate]').trigger("blur");
	 	var numError = $(this).closest('form').find('.check-error').length;
	 	if (numError) {
	 		$(this).closest('form').find('.check-error').first().find('input[data-validate],textarea[data-validate],select[data-validate]').first().focus().select();
	 		return;
	 	}
		var data='sort='+$('select[name="sort"]').val()+'&title='+$('input[name="title"]').val()+'&content='+um.getContent()+'&keyword='+$('input[name="keyword"]').val()+'&des='+$('textarea[name="description"]').val()+"&tog="+$(this).attr('data-toggle')+"&i="+$(this).attr('data-target');
		jf.load();
		var r=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=c&e=ca',data,'POST'));
		if(r.status==0||r.res==0){
			alert('操作发生错误');return;
		}
		window.location.href=jf.getRealUrl()+"/index.php?a=c";
	});
	$('.newsDel').click(function(){
		if(!confirm('确定删除吗？')) return false;
		jf.load('正在删除.....');
		var data='i='+$(this).attr('data-target')+'&tog=d';
		var r=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=c&e=ca',data,'POST'));
		if(r.status==0||r.res==0){
			alert('操作发生错误');return;
		}
		jf.hide();
		window.location.reload();
	});
	$('.newsAll').click(function(){
		jf.delAll(jf.getRealUrl()+'/index.php?a=c&e=ca','tog=d&i=',this);
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
		jf.delAll(jf.getRealUrl()+'/index.php?a=c&e=sc','a=d&i=',this);
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
	delOne:function(url,data){

	},
	delAll:function(url,data,obj){
		if(!confirm('确定删除吗？')) return false;
		this.load('正在删除.....');
		var b=$(obj).closest('form').find("input[type='checkbox']");
		var arrId=new Array();
		$(b).each(function(index,element){
			if(element.checked==true){
				arrId.push(element.value);
			}
		});
		data+=arrId.join();
		var res=JSON.parse(this.ajaxMethod(url,data,'POST'));
		if(res.status==1){

		}else{
			alert('删除失败');return;
		}
		this.hide();
		window.location.reload();
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
	alert:function(){
		var detail="";
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