TYPE=VIEW
query=select distinct `n`.`code` AS `code`,`n`.`UICCode` AS `UICCode`,`n`.`land` AS `land`,`n`.`name` AS `name`,`n`.`type` AS `type`,`n`.`lat` AS `lat`,`n`.`lng` AS `lng`,`o`.`timestamp` AS `timestamp`,`o`.`checkout` AS `checkout`,`o`.`transactionId` AS `transactionId`,`n`.`ig` AS `ig` from (`coolwork_db`.`ns` `n` left join `coolwork_db`.`ov` `o` on(`n`.`name` = `o`.`ov_name`)) where `n`.`land` = \'NL\' order by `o`.`timestamp` desc
md5=4063fa8c484b9d2a1f9c0fd83770a6ab
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2021-04-15 20:48:08
create-version=2
source=select distinct `n`.`code` AS `code`,`n`.`UICCode` AS `UICCode`,`n`.`land` AS `land`,`n`.`name` AS `name`,`n`.`type` AS `type`,`n`.`lat` AS `lat`,`n`.`lng` AS `lng`,`o`.`timestamp` AS `timestamp`,`o`.`checkout` AS `checkout`,`o`.`transactionId` AS `transactionId`,`n`.`ig` AS `ig` from (`ns` `n` left join `ov` `o` on((`n`.`name` = `o`.`ov_name`))) where (`n`.`land` = \'NL\') order by `o`.`timestamp` desc
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select distinct `n`.`code` AS `code`,`n`.`UICCode` AS `UICCode`,`n`.`land` AS `land`,`n`.`name` AS `name`,`n`.`type` AS `type`,`n`.`lat` AS `lat`,`n`.`lng` AS `lng`,`o`.`timestamp` AS `timestamp`,`o`.`checkout` AS `checkout`,`o`.`transactionId` AS `transactionId`,`n`.`ig` AS `ig` from (`coolwork_db`.`ns` `n` left join `coolwork_db`.`ov` `o` on(`n`.`name` = `o`.`ov_name`)) where `n`.`land` = \'NL\' order by `o`.`timestamp` desc
mariadb-version=100418
