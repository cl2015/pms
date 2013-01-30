<?php
$content = '"ID","排序","所属方向","所属单元","中文名","英文名","出生日期","性别","学历","学位","职称","专业领域","博导","硕导","进室时间","出室时间"';
$content = '"ID","xh","xm","xb","cxny","zc","xstx","zzxl","zytc","years"';//id，排序，姓名，性别，出生日期，职称，学术头衔/荣誉称号，学历，专业领域，years
$content.="\r\n";

$attributes = array('id',
		'sort',
		'name',
		'gender',
		'date_of_birth',
		'title',
		'honorary_title',
		'qualification',
		'area_of_expertise',);
	foreach($members as $member){
		$content .='"';
		foreach($attributes as $attribute){
			$content .= $member->$attribute . '","';
		}
		$content .= $years . '"';
		$content .= "\r\n";
	}
	echo(chr(255).chr(254));
	echo(mb_convert_encoding($content,"UTF-16LE","UTF-8"));
