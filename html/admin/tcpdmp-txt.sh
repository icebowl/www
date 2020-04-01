#!/bin/bash
now=$(date +"%Y%m%d-%H%M%S")
echo `pwd`
nowfile=$(date +"%Y%m%d-%H%M%S")
/usr/bin/touch `pwd`/web/$now.txt
chmod 775 `pwd`/web/$now.txt
#sudo chown apache:apache `pwd`/$now.txt
#/usr/bin/tcpdump  -tttt > `pwd`/$nowfile.txt 
nohup /usr/bin/tcpdump  -tttt > `pwd`/web/$nowfile.txt >> /dev/null 2>&1 & 
# tcpdump -c 100 -x >/root/tcpdump.txt
#nohup /usr/sbin/tcpdump  > `pwd`/$now.txt &
# tcpdump -c 100 -w /root/tcpdump.txt

#now=$(date +"%Y%m%d-%H%M%S")
# #printf "Today we are going to backup file to NFS server at AWS '%s'\n" "/efs/my-blog-${today}.sql.tar.gz"
#nowfile=$(date +"%Y%m%d-%H%M%S")
#nohup tcpdump -w $(date +"%Y%m%d-%H%M%S").pcap -i enp2s0  >> /dev/null 2>&1 & 
# https://askubuntu.com/questions/520566/why-wont-this-php-script-execute-bash-script
