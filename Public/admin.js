//admin.js
$(function(){
	//jf.load();
	$('.passcode').click(function(){
		//alert("您以点击刷新验证码");
		$(this).attr('src',jf.getRealUrl()+'/index.php?a=i&e=verify&t='+Math.random());
	});
	$('input[name="passcode"]').blur(function(){
		if($(this).val().trim()==""){return;}
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=i&e=cvc','code='+$(this).val(),'POST'));
		if(res.status==0){
			jf.alert($(this).parent().parent(),res.msg,'after');
		}else{
			if($('.alert').length>0){
				$('.alert').remove();
			}
		}
	});
	$('.btlogin').click(function(){
		// if($('.alert').length>0){
		// 	$('.alert').focus();
		// 	return;
		// }
		var user=$('input[name="manName"]').val();
		if(user.trim()==""){
			jf.alert($('.panel-body'),'登录账号不能为空','after','user');return;
		}else{
			if($('#user').length>0) $('#user').remove();
		}
		var paw=$('input[name="manPaw"]').val();
		if(paw.trim()==""){
			jf.alert($('.panel-body'),'登录密码不能为空','after','paw');return;
		}else{
			if($('#paw').length>0) $('#paw').remove();
		}
		var code=$('input[name="passcode"]').val();
		if(code.trim()==""){
			jf.alert($('.panel-body'),'请填写右侧验证码','after','code');return;
		}else{
			if($('#code').length>0) $('#code').remove();
		}
		jf.load();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=i&e=sign','user='+user+'&paw='+paw+'&code='+code,'POST'));
		if(res.status==0){
			jf.alert($('.panel-body'),res.msg,'after');
			jf.hide();
		}else if(res.status==1){
			window.location.reload();
		}
	});
	$('.loginout').click(function(){
		jf.load();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=i&e=out','','POST'));
		if(res.status==1){
			window.location.reload();
		}
	});
	$('.btRegister').click(function(){
		var name=$('input[name="name"]');
		if(name.val().trim()==""){
			jf.alert($('.panel-body'),'请输入名称','','name');return;
		}else{
			if($('#name').length>0){$('#name').remove();return;}
		}
		var account=$('input[name="account"]');
		if(account.val().trim()==""){
			jf.alert($('.panel-body'),'请输入账户名称','','account');return;
		}else{
			if($('#account').length>0){$('#account').remove();return;}
		}
		var phone=$('input[name="phone"]');
		if(phone.val().trim()==""){
			jf.alert($('.panel-body'),'请输入手机号','','phone');return;
		}else{
			if($('#phone').length>0){$('#phone').remove();return;}
		}
		var paw=$('input[name="paw"]');
		if(paw.val().trim()==""){
			jf.alert($('.panel-body'),'请输入密码','','paw');return;
		}else{
			if($('#paw').length>0){$('#paw').remove();return;}
		}
		var confirm=$('input[name="confirmPaw"]');
		if(paw.val().trim()!=confirm.val().trim()){
			jf.alert($('.panel-body'),'两次输入密码不一致','','paw');return;
		}else{
			if($('#paw').length>0){$('#paw').remove();return;}
		}
	 	if ($('.panel-body').find('.check-error').length>0) {
	 		$('.panel-body').find('.check-error').first().find('input[data-validate],textarea[data-validate],select[data-validate]').first().focus().select();
	 		return;
	 	}
	 	jf.load();
		var data="name="+name.val()+"&account="+account.val()+"&phone="+phone.val()+"&paw="+paw.val()+"&confirmPaw="+confirm.val();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=r',data,'POST'));
		if(res.status==1){
			jf.hide();
			window.location.href=jf.getRealUrl();
		}else{
			jf.hide();
			jf.alert($('.panel-body'),msg,'','error');return;
		}
	});
	$('.btStation').click(function(){
		var stationName=$('input[name="stationName"]');
		if(stationName.val().trim()==""){
			alert('防疫站的名字不能为空');
			stationName.focus();
			return;
		}
		var stationPhone=$('input[name="stationPhone"]');
		if(stationPhone.val().trim()==""){
			alert('防疫站的电话不能为空');
			stationPhone.focus();
			return;
		}
		var stationAddress=$('input[name="stationAddress"]');
		if(stationAddress.val().trim()==""){
			alert("防疫站地址不能为空");
			stationAddress.focus();return;
		}
		var description=$('textarea[name="description"]');
		if(description.val().trim()==""){
			alert('防疫站的描述不能为空');
			description.focus();return;
		}
		jf.load();
		var data="stationName="+stationName.val()+"&stationPhone="+stationPhone.val()+"&stationAddress="+stationAddress.val()+"&description="+description.val();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=st&e=stReg',data,'POST'));
		jf.hide();
		window.location.reload();
	});
	$('.veroSubmit').click(function(){
		var veroName=$('input[name="veroName"]');
		if(veroName.val().trim()==""){
			alert('疫苗名称不能为空');
			veroName.focus();return;
		}
		var description=$('textarea[name="description"]');
		if(description.val().trim()==""){
			alert("疫苗描述不能为空");
			description.focus();return;
		}
		jf.load();
		var data="veroName="+veroName.val()+"&description="+description.val()+"&tog=add";
		var res=jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=st&e=vea',data,'POST');
		jf.hide();
		window.location.reload();
	});
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
		jf.delOne(jf.getRealUrl()+'/index.php?a=c&e=ca','tog=d&i=',this);
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
		jf.delOne(jf.getRealUrl()+'/index.php?a=c&e=sc','a=d&i=',this);
	});

	$('.sortAll').click(function(){
		jf.delAll(jf.getRealUrl()+'/index.php?a=c&e=sc','a=d&i=',this);
	});

	$('.sortSub').click(function(){
		var i=$('.dialog').find('input[name="sortName"]');
		if(i.val().trim()!=""){
			var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=c&e=sc','a='+$(this).attr('data-toggle')+'&n='+$(this).attr('data-based')+'&i='+i.val().trim(),'POST'));
		}
		window.location.reload();
	});
	$('.powerSub').click(function(){
		var d=$(this).closest('.dialog');
		var name=d.find('input[name="name"]');
		if(name.val().trim()==""){
			jf.alert($('.dialog-body'),'名字不能为空');name.focus();return;
		}
		var account=d.find('input[name="account"]');
		if(account.val().trim()==""){
			jf.alert($('.dialog-body'),'登录账号不能为空');account.focus();return;
		}
		var paw=d.find('input[name="paw"]');
		if(paw.val().trim()==""&&$(this).attr('data-toggle')!='u'){
			jf.alert($('.dialog-body'),'密码不能为空');paw.focus();return;
		}
		var phone=d.find('input[name="phone"]');
		if(phone.val().trim()==""){
			jf.alert($('.dialog-body'),'手机号不能为空');phone.focus();return;
		}
		var power=new Array();
		var i=0;
		d.find('.checkbox label').each(function(){
			if($(this).hasClass('active')){
				power.push(1);i++;
			}else{
				power.push(0);
			}
		});
		if(i==0){
			jf.alert($('.dialog-body'),'请选择合适的权限');return;
		}
		jf.load();
		var data='p='+power.join('-')+'&a='+account.val()+'&n='+name.val()+'&pw='+paw.val()+'&ph='+phone.val()+'&act='+$(this).attr('data-toggle')+'&i='+$(this).attr('data-target');
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=s&e=pa',data,'POST'));
		window.location.reload();
	});
	$('.gdel').click(function(){
		jf.delOne(jf.getRealUrl()+'/index.php?a=s&e=pa','act=d&i=',this);
	});
	$('.gdall').click(function(){
		jf.delAll(jf.getRealUrl()+'/index.php?a=s&e=pa','act=d&i=',this);
	});
	$('#gadd .close,.dialog-close').click(function(){
		var d=$(this).closest('.dialog');
		d.find('input').each(function(){
			$(this).val('');
		});
		d.find('.checkbox label').each(function(){
			$(this).removeClass('active');
		});
		d.find('.powerSub').attr('data-toggle','a');
	});
	$('.gedit').click(function(){
		var d=$('#gadd');
		var r=$(this).closest('tr');
		var c=r.find('input[type="checkbox"]');
		d.find('.powerSub').attr('data-toggle','u');
		d.find('.powerSub').attr('data-target',c.val());
		d.find('input[name="name"]').val(r.children().eq(1).html());
		d.find('input[name="account"]').val(r.children().eq(2).html());
		d.find('input[name="phone"]').val(r.children().eq(4).html());
		var p=r.children().eq(3).html().split('-');
		var l=d.find('.checkbox label');
		for(x in p){
			if(p[x]==1){
				$(l[x]).addClass('active');
			}
		}
	});
	$('.userall').click(function(){
		jf.delAll(jf.getRealUrl()+'/index.php?a=u&e=d','tog=d&i=',this);
	});
	$('.userdel').click(function(){
		jf.delOne(jf.getRealUrl()+'/index.php?a=u&e=d','tog=d&i=',this);
	});
	$('.stationPass').click(function(){
		if(!confirm("确认通过审核吗？")) return false;
		jf.load();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=st&e=sta','tog=pass&i='+$(this).attr('data-toggle'),'POST'));
		if(res.status==0||res.res==0){alert('操作发生错误');return;}
		//jf.hide();
		window.location.reload();
	});
	$('.stationFail').click(function(){
		if(!confirm("确认要不通过审核吗？")) return false;
		jf.load();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=st&e=sta','tog=fail&i='+$(this).attr('data-toggle'),'POST'));
		if(res.status==0||res.res==0){alert('操作发生错误');return;}
		//jf.hide();
		window.location.reload();
	});
	$('.veroVerify').click(function(){
		if(!confirm("确认要审核"+$(this).attr('title')+'吗?')) return false;
		jf.load();
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=st&e=vea','tog='+$(this).attr('data-toggle')+'&i='+$(this).attr('data-target'),'POST'));
		if(res.status==0||res.res==0){alert('操作发生错误');return;}
		window.location.reload();		
	});
	$('.orderUsed').click(function(){
		jf.load();
		var target=$(this).attr('data-target');
		var i=$(this).attr('data-toggle');
		var res=JSON.parse(jf.ajaxMethod(jf.getRealUrl()+'/index.php?a=o&e=oused','used='+target+'&i='+i,'POST'));
		jf.hide();
		if(res.status==1){
			window.location.reload();
		}
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
			timeout:3000,
			error:function(msg){result='net failed';},
			success:function(msg){result=msg;}
		});
		return result;
	},
	delOne:function(url,data,e){
		if(!confirm('是否删除？')) return false;
		jf.load('正在删除.....');
		var r=$(e).attr('data-target');
		data+=r;
		var res=JSON.parse(jf.ajaxMethod(url,data,'POST'));
		if(res.status==1){
			jf.hide();
			window.location.reload();
		}else{
			alert('删除失败');this.hide();return;
		}
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
			this.hide();
			window.location.reload();
		}else{
			alert('删除失败');this.hide();return;
		}
		
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
	alert:function(obj,tips="",location="",id=""){
		if(obj.find('.alert')) obj.find('.alert').remove();
		var detail='<div class="alert alert-red" id="'+id+'"><strong>注意：</strong>';
			detail+=tips+'</div>';
		if(location==""||location=="pre"){
			obj.prepend(detail);
		}else{
			obj.append(detail);
		}
	},
	getRealUrl:function(){
		var curWwwPath=window.document.location.href;
	  	var pathName=window.document.location.pathname;
	  	var pos=curWwwPath.indexOf(pathName);
	  	var localhostPaht=curWwwPath.substring(0,pos);
	  	var index=pathName.substr(1).indexOf('index.php');
	  	var projectName=pathName;
	  	if(index!=-1){
			projectName=pathName.substring(0,index);
		}
	  	var realPath=localhostPaht+projectName;
	  	//alert(projectName);
	  	return realPath;
	},
};
var jf=new Object(myFrame);
//jf.load();