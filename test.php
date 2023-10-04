<?php


    Class Hoge{
	    public $hogestr;

    	function __construct(){
	    	$this->hogestr = 'hohotate';    		
    	}

        public function hogefunc($str){
            echo $str;
        }
    }


    $strs = 'HOTATE0520';
    $in = new Hoge($strs);
    $hh = $in->hogestr;
    $ret = $in->hogefunc($hh);