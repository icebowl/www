#!/bin/bash
now=$(date +"%Y%m%d-%H%M%S")
echo `pwd`
/usr/bin/touch `pwd`/$now.txt

#https://askubuntu.com/questions/520566/why-wont-this-php-script-execute-bash-script
# echo `pwd`/file.ext
