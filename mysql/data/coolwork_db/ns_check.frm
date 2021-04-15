TYPE=VIEW
query=select `t1`.`code` AS `code`,`t1`.`UICCode` AS `UICCode`,`t1`.`land` AS `land`,`t1`.`name` AS `name`,`t1`.`type` AS `type`,`t1`.`lat` AS `lat`,`t1`.`lng` AS `lng`,`t1`.`timestamp` AS `timestamp`,`t1`.`checkout` AS `checkout`,`t1`.`transactionId` AS `transactionId`,`t1`.`ig` AS `ig` from (`coolwork_db`.`ns_checks` `t1` left join `coolwork_db`.`ns_checks` `t2` on(`t1`.`name` = `t2`.`name` and `t1`.`timestamp` > `t2`.`timestamp`)) where `t2`.`timestamp` is null
md5=f6a94f7436775cd2cdfad5ce6ab0cc1a
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2021-04-15 20:47:46
create-version=2
source=select `t1`.`code` AS `code`,`t1`.`UICCode` AS `UICCode`,`t1`.`land` AS `land`,`t1`.`name` AS `name`,`t1`.`type` AS `type`,`t1`.`lat` AS `lat`,`t1`.`lng` AS `lng`,`t1`.`timestamp` AS `timestamp`,`t1`.`checkout` AS `checkout`,`t1`.`transactionId` AS `transactionId`,`t1`.`ig` AS `ig` from (`ns_checks` `t1` left join `ns_checks` `t2` on(((`t1`.`name` = `t2`.`name`) and (`t1`.`timestamp` > `t2`.`timestamp`)))) where isnull(`t2`.`timestamp`)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `t1`.`code` AS `code`,`t1`.`UICCode` AS `UICCode`,`t1`.`land` AS `land`,`t1`.`name` AS `name`,`t1`.`type` AS `type`,`t1`.`lat` AS `lat`,`t1`.`lng` AS `lng`,`t1`.`timestamp` AS `timestamp`,`t1`.`checkout` AS `checkout`,`t1`.`transactionId` AS `transactionId`,`t1`.`ig` AS `ig` from (`coolwork_db`.`ns_checks` `t1` left join `coolwork_db`.`ns_checks` `t2` on(`t1`.`name` = `t2`.`name` and `t1`.`timestamp` > `t2`.`timestamp`)) where `t2`.`timestamp` is null
mariadb-version=100418
