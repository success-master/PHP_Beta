<?php
ob_start();
session_start();
$is_admin_for_file_manager = 0;
$path_for_images = '';

if (!isset($_SESSION['WYSIWYGFileManagerRequirements']) || !is_file($_SESSION['WYSIWYGFileManagerRequirements'])){
	die('File manager authentication not set.');
}
require_once $_SESSION['WYSIWYGFileManagerRequirements'];
if($is_admin_for_file_manager !== 1){
	die('File manager authentication not set.');
}
if(strpos($_POST["folder"], $path_for_images) !== 0){
	exit('Not Authorized!!'); /* To stop front users from uploading files to un-authorized folder. */
}
/*
Uploadify v2.1.4
Release Date: November 8, 2010

Copyright (c) 2010 Ronnie Garcia, Travis Nickels

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$size = getimagesize($tempFile);
	if($size !== false){
		echo $targetPath = $_SERVER['DOCUMENT_ROOT']  . $_REQUEST['folder'] . '/';
		$targetFile =  str_replace('//','/',$targetPath) . $_FILES['Filedata']['name'];

		 $allowedExt = isset($_REQUEST['fileext']) ? $_REQUEST['fileext'] : "";

		 $fileTypes = str_replace('*.','',$allowedExt);
		 $fileTypes  = str_replace(';','|',$fileTypes);
		 $typesArray=array();
		 if($fileTypes!=""){ $typesArray = split('\|',$fileTypes); }

		 $fileParts  = pathinfo($_FILES['Filedata']['name']);

		 if ($allowedExt=="" || in_array($fileParts['extension'],$typesArray)) {
			// Uncomment the following line if you want to make the directory if it doesn't exist
			/* mkdir(str_replace('//','/',$targetPath), 0755, true); */
			move_uploaded_file($tempFile,$targetFile);
			echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
		} else {
			echo 'Invalid file type.';
		}
	}else{
		echo 'Invalid file type.';
		die(0);
	}
}
?>
