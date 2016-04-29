<?php
class Upload{
	private $filePath;
	private $fileName;
	private $fileType;
	private $fileMaxSize=100;
	private $fileExt;
	private $filePostFix=array(
					'image'=>array('png','jpg','bmp','gif'),
					'file'=>array('doc','xls','xlsx','ppt','txt'));

	public function __construct($filePath,$fileName,$fileType,$maxsize=null){
		$this->filePath=$filePath;
		$this->fileName=$fileName;
		$this->fileType=$fileType;
		if(!empty($maxsize)){
			$this->fileMaxSize=$maxsize;
		}
	}

	public function setUpload(){
		$name=$_FILES['pic']['name'];
		$size=$_FILES['pic']['size'];
		if(empty($name)){
			return array('status'=>0,'msg'=>'请选择要上传的图片');
		}
		$this->setExt($name);
		$ext = $this->fileExt;
		if(!in_array($ext,$this->filePostFix[$this->fileType])){
			return array('status'=>0,'msg'=>'格式错误');
		}
		if($size>($this->fileMaxSize*1024)){
			return array('status'=>0,'msg'=>"图片大小不能超过{$this->fileMaxSize}KB");
		}
		//$image_name = time().rand(100,999).".".$ext;
		if(!is_dir($this->filePath)){
			mkdir($this->filePath);
		}
		$image= $this->filePath.$this->fileName.'.'.$ext;
		$tmp = $_FILES['pic']['tmp_name'];
		if(move_uploaded_file($tmp, $image)){
			return array('status'=>1);
		}else{
			return array('status'=>0,'msg'=>"上传出错了");
		}
	}

	public function getFileName(){
		return $fileName;
	}

	public function setExt($fileName){
		$extend = pathinfo($fileName);
		$this->fileExt = strtolower($extend["extension"]);
	}

	public function extend(){
		return $this->fileExt;
	}
}