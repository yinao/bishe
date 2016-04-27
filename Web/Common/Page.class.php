<?php
class Page{
	
	//当前页
	private $current=1;
	//共有多少条记录
	private $totalRows;
	//共有多少页
	private $totalPage;
	//每页显示多少条记录
	private $pageRows=15;
	//一次显示多少个页号
	private $pageCount=5;
	//拼接url路径的基础
	private $urlBase;
	
	public function __construct($totalRows,$url,$cur=NULL,$pageRows=NULL,$pageCount=NULL){
		$this->totalRows=$totalRows;
		$pos=strpos($url, '&p=');
		if($pos){
			$this->urlBase=substr($url, 0,$pos);
		}else{
			$this->urlBase=$url;
		}
		
		if(!empty($cur)){
			$this->current=$cur;
		}		
		if(!empty($pageCount)){
			$this->pageCount=$pageCount;
		}
		if(!empty($pageRows)){
			$this->pageRows=$pageRows;
		}	
		$this->totalPage=ceil($this->totalRows/$this->pageRows);
	}
	public function setPage(){
		
		$upPage=null;
		if($this->current>1){
			$upPage.='<li><a href="'.$this->urlBase.'&p=1">首页</a>';
			$upPage.='<li><a href="'.($this->urlBase).'&p='.($this->current-1).'">上一页</a>';
		}
		
		$link=null;
		$groupNum=intval($this->current/$this->pageCount);
		$startPage=$groupNum*($this->pageCount-1)+1;
		$endPage=($this->totalPage-$this->current)>4?($groupNum+1)*$this->pageCount-$groupNum:$this->totalPage;
		for($i=$startPage;$i<=$endPage;$i++){
			if($i==$this->current){
				$link.='<li class="active"><a href="'.$this->urlBase.'&p='.$i.'">'.$i.'</a></li>';
			}else{
				$link.='<li><a href="'.$this->urlBase.'&p='.$i.'">'.$i.'</a></li>';
			}
		}
		//echo $link;exit();
		$downPage=null;
		if($this->current<$this->totalPage){
			$downPage.='<li><a href="'.$this->urlBase.'&p='.($this->current+1).'">下一页</a></li>';
			$downPage.='<li><a href="'.$this->urlBase.'&p='.$this->totalPage.'">末页</a></li>';
		}
		
		$pre='<ul class="pagination">%pre%</ul>';
		$next='<ul class="pagination">%next%</ul>';
		$pages='<ul class="pagination pagination-group">%link%</ul>';
		
		$pageStr="";
		if(!empty($upPage)){
			$pageStr.=str_replace('%pre%', $upPage, $pre);
		}
		if(!empty($link)){
			$pageStr.=str_replace('%link%',$link,$pages);
		}
		if(!empty($next)){
			$pageStr.=str_replace('%next%',$downPage,$next);
		}
		return $pageStr;
	}
	
	public function getCondition(){
		$condition=array();
		if($this->current>$this->totalPage){
			$this->current=$this->totalPage;
		}
		if($this->current<1){
			$this->current=1;
		}
		$start=($this->current-1)*$this->pageRows;
		$end=$this->current*$this->pageRows>$this->totalRows?$this->totalRows:$this->current*$this->pageRows;
		array_push($condition, $start);
		array_push($condition,$end);
		return $condition;
	}
}