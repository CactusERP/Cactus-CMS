<?php

class FileUploadComponent extends Object{

 
  var $fileModel = null;


  var $uploadDir = 'Photos';


  var $fileVar = 'image';

  var $pathname = 'anestis';
  var $allowedTypes = array(
    'image/jpeg',
    'image/gif',
    'image/png',
    'image/pjpeg',
    'image/x-png'
  );


  var $fields = array('image'=>'image');

  var $uploadDetected = false;

  var $uploadedFile = false;


  var $data = array();
  var $params = array();


  var $finalFile = null;


  var $success = false;


  var $errors = array();


  function initialize(&$controller){
    $this->data = $controller->data;
    $this->params = $controller->params;
	
	
  }

  function startup(&$controller){
	
	if(isset($this->data['Gallery']['photographer'])){
	
	 $this->fileModel = 'Gallery';
	
	}
	if(isset($this->data['Product']['price'])){
	
	 $this->fileModel = 'Product';
	
	}
	if(isset($this->data['Destination']['name'])){
	
	 $this->fileModel = 'Destination';
	
	}
	
	else{
	
	 $this->fileModel = 'Post';
	 
	}
	
  
    $this->uploadDetected = ($this->_multiArrayKeyExists("tmp_name", $this->data) || $this->_multiArrayKeyExists("tmp_name",$this->data));
    $this->uploadedFile = $this->_uploadedFileArray();
    if($this->_checkFile() && $this->_checkType()){
      $this->_processFile();
    }
  }

  
  
  

  function removeFile($name = null , $contro){
    if(!$name) return false;
    
	if(isset($this->data['Gallery']['photographer'])){
	   
		$up_dir ='../../../Photos/Gallery';
	}
	if(isset($this->data['Product']['price'])){
	   
		$up_dir ='../../../Photos/Products';
	}
	if(isset($this->data['Destination']['name'])){
	   
		$up_dir ='../../../Photos/Destinations';
	}
	else{
		
		$up_dir = '../../../Photos';
	}
    $target_path = $up_dir . DS . $name;
    if(unlink($target_path)) return true;
    else return false;
  }

  
  
  

  function showErrors($sep = "<br />"){
    $retval = "";
    foreach($this->errors as $error){
      $retval .= "$error $sep";
    }
    return $retval;
  }

  
	function beforeRender()
	{
		//$this->redirect(array("controller" => "ProductsController", "action" => "index"),false,false);
	}

	function shutdown()
	{
	}

	function beforeRedirect()
	{

	}

	
	
	
	
	
  function _processFile(){
	
	if(isset($this->data['Gallery']['photographer'])){
		
		$up_dir ='../../../Photos/Gallery';
	}
	if(isset($this->data['Product']['price'])){
	   
		$up_dir ='../../../Photos/Products';
	}
	if(isset($this->data['Destination']['name'])){
	   
		$up_dir ='../../../Photos/Destinations';
	}
	else{
		
		$up_dir ='../../../Photos';
	}
	//.$this->uploadedFile['type']
	//$this->uploadedFile['tmp_name']
	//$this->data['Post']['title']
	//$utf8 = iconv('utf-8', 'Windows-1253', $this->uploadedFile['name'] );
	
    $myphoto = $up_dir. DS . $this->uploadedFile['name'];

    $target_path = $up_dir . DS . $this->uploadedFile['name'];


    $temp_path = substr($target_path, 0, strlen($target_path) - strlen($this->_ext())); //temp path without the ext
	$temp_myphoto = substr($myphoto, 0, strlen($myphoto) - strlen($this->_ext()));

    //make sure the file doesn't already exist, if it does, add an itteration to it
        $i=1;
        while(file_exists($target_path)){
            $target_path = $temp_path . "-" . $i . $this->_ext();
	    $myphoto = $temp_myphoto . "-" . $i . $this->_ext();
            $i++;

        }

    $save_data = array();
    if(move_uploaded_file($this->uploadedFile['tmp_name'], $target_path)){
      //Final File Name
      $this->finalFile = basename($target_path);
      
	  $model =& $this->getModel();

      $this->pathname =  $target_path;

      $save_data[$this->fields['image']] = $target_path;
     // $save_data[$this->fields['title']] =	$this->data['Gallery']['title'];
     // $save_data[$this->fields['photographer']] =  $this->data['Gallery']['photographer'];
	 // $save_data[$this->fields['created']] =  $this->data['Gallery']['created'];
	//  $save_data[$this->fields['description']] =  $this->data['Gallery']['description'];
      //if(!$model || $model->save($save_data)){
        $this->success = true;

      //}
      //else{
       // $this->success = false;
      //}
    }
    else{
      $this->_error('FileUpload::processFile() - Unable to save temp file to file system.');
    }

	  //$this->redirect(array("controller" => "Gallery","action" => "index"));
  }


    function &getModel($name = null) {
        $model = null;
        if (!$name) {
            $name = $this->fileModel;
        }

    if($name){
     // if (PHP5) {
        $model = ClassRegistry::init($name);
     // } else {
     //   $model =& ClassRegistry::init($name);
     // }

      if (empty($model) && $this->fileModel) {
        $this->_error('FileUpload::getModel() - Model is not set or could not be found');
        return null;
      }
    }
        return $model;
    }


	
	
	
	
	
	
	
  function _error($text){
    $message = __($text,true);
    $this->errors[] = $message;
    trigger_error($message,E_USER_WARNING);
  }


  function _checkType(){
    foreach($this->allowedTypes as $value){
      if(strtolower($this->uploadedFile['type']) == strtolower($value)){
        return true;
      }
    }
    $this->_error("FileUpload::_checkType() {$this->uploadedFile['type']} is not in the allowedTypes array.");
    return false;
  }


  function _checkFile(){
    if($this->uploadedFile && $this->uploadedFile['error'] == UPLOAD_ERR_OK ) return true;
    else return false;
  }


  function _ext(){
	//return strrchr($this->data['Gallery']['title'],".");
  }


  
  
  
  
  
  
  function _uploadedFileArray(){
    if($this->fileModel){
      $retval = isset($this->data[$this->fileModel][$this->fileVar]) ? $this->data[$this->fileModel][$this->fileVar] : false;
    }
    else {
      $retval = isset($this->params['form'][$this->fileVar]) ? $this->params['form'][$this->fileVar] : false;
    }

    if($this->uploadDetected && $retval === false){
      $this->_error("FileUpload: A file was detected, but was unable to be processed due to a misconfiguration of FileUpload. Current config -- fileModel:'{$this->fileModel}' fileVar:'{$this->fileVar}'");
    }
    return $retval;
  }


  function _multiArrayKeyExists($needle, $haystack) {
    if(is_array($haystack)){
      foreach ($haystack as $key=>$value) {
        if ($needle==$key) {
          return true;
        }
        if (is_array($value)) {
          if($this->_multiArrayKeyExists($needle, $value)){
            return true;
          }
        }
      }
    }
    return false;
  }
}
?>