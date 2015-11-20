<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CkHelper extends Helper{
    
    var $helpers = array('html','Javascript');
    
    function load($id){
        $did='';
        foreach(explode('.',$id)as $v){
            $did=ucfirst($v);
        }
    
        //appe de Ckeditor
        $code="var editor=CKEDITOR.replace('".$did."');";
        $code .="CKFinder.setupCKEditor(editor,'/js/kfinder');";
        return $this->Javascript->codeBock($code);
        
        }
    
    
    
}