#!/bin/bash
cd  /home/cwc/http/www/html/admin/web/
nowfile=$(date +"%Y%m%d-%H%M%S")
nohup tcpdump -w $nowfile.pcap -i enp2s0  >> /dev/null 2>&1 & 
#now=$(date +"%Y%m%d-%H%M%S")
# #printf "Today we are going to backup file to NFS server at AWS '%s'\n" "/efs/my-blog-${today}.sql.tar.gz"
#nowfile=$(date +"%Y%m%d-%H%M%S")
#nohup tcpdump -w $(date +"%Y%m%d-%H%M%S").pcap -i enp2s0  >> /dev/null 2>&1 & 
# https://askubuntu.com/questions/520566/why-wont-this-php-script-execute-bash-script
