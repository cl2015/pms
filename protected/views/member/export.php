<?php
$content = "ID,排序,所属方向,所属单元,中文名,英文名,出生日期,性别,学历,学位,职称,专业领域,博导,硕导,进室时间,出室时间,";
$content.="\n";

$attributes = array('id',
		'sort',
		'research_direction',
		'research_unit',
		'name',
		'english_name',
		'date_of_birth',
		'gender',
		'qualification',
		'degree',
		'title',
		'area_of_expertise',
		'phd_mentor',
		'master_mentor',
		'enter_date',
		'out_date',);
	foreach($members as $member){
		foreach($attributes as $attribute){
			$content .= $member->$attribute . ',';
		}
		$content .= "\n";
	}
	echo(chr(255).chr(254));
	echo(mb_convert_encoding($content,"UTF-16LE","UTF-8"));
