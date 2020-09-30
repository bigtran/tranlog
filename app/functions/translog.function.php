<?php

function _siteInfo($key){
	//if($GLOBALS['_siteinfo'])
	$_siteinfo_arr = spyc_load_file(site_path() . '/site.yml');
	$GLOBALS['_siteinfo'] = $_siteinfo_arr;
	
    if(isset($_siteinfo_arr[$key])){
    	return $_siteinfo_arr[$key];
    }else{
    	return false;
    }
}

function _themeUrl(){
	$site_url = _siteInfo("baseURL");
	$theme_dir = _siteInfo("theme") ? _siteInfo("theme") : 'default';
    $theme_url = $site_url."_theme/".$theme_dir."/";
    return $theme_url;
}


function _thePost($slug){
	$file_path = site_path() . '/_articles/'.$slug.'.md';
	$thispost = splitYamlMarkdown($file_path);
	$thepost['meta'] = spyc_load_file($thispost['yaml']);
	$thepost['content'] = $thispost['markdown'];

	return $thepost;

}

function isStartAndEnd($line){
	if (trim($line, " \r\n\t") == '---') return true;
    return false;
}


function splitYamlMarkdown($file_path){
	if (!empty($file_path) && strpos($file_path, "\n") === false && file_exists($file_path)){
    	# 获取文件内容
    	$file_content = file_get_contents($file_path);

    	# 按行组成数组
    	$lines = explode("\n",$file_content);
		foreach ($lines as $k => $_) {
			$lines[$k] = rtrim ($_, "\r");
		}

		# 遍历数组
		$cnt = count($lines);
		$yaml_end_line = 0;
		for ($i = 0; $i < $cnt; $i++) {
			$oneline = $lines[$i];
			if (isStartAndEnd($oneline) and $i>0){
				$yaml_end_line = $i;
				$i = $cnt+1;
      		}
      	}
      	$yaml_arr = array_slice($lines, 0, $yaml_end_line);
      	$markdown_arr = array_slice($lines,$yaml_end_line+1);

      	$content['yaml'] = implode("\n", $yaml_arr);
      	$content['markdown'] = implode("\n", $markdown_arr);
		return $content;
	}else{
		$content['yaml'] = "";
      	$content['markdown'] = "";
		return $content;
	}
}

?>