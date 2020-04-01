#!/bin/bash
#nohup /usr/bin/tcpdump  -tttt >`pwd`/web/temp.txt 2>&1 &
nohup tcpdump -w tttt.pcap -i enp2s0  >> /dev/null 2>&1 & 




#chmod g+s dir
