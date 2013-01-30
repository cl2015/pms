ALTER TABLE `pms`.`members` ADD COLUMN `honorary_title` varchar(64) DEFAULT '' COMMENT '学术头衔/荣誉称号' AFTER `updated_at`;
