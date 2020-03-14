#!/bin/bash
nowfile=$(date +"%Y%m%d-%H%M%S")
nohup tcpdump -w $nowfile.pcap -i eno1  >> /dev/null 2>&1 & 
#now=$(date +"%Y%m%d-%H%M%S")
# #printf "Today we are going to backup file to NFS server at AWS '%s'\n" "/efs/my-blog-${today}.sql.tar.gz"
