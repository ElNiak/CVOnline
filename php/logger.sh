#!/bin/bash
echo 'start log'
chmod 777 /var/log/apache2/cv-access.log
cp /var/log/apache2/cv-access.log  /home/cv-access.log
chmod 777 /home/cv-access.log
cp /var/log/apache2/cv-error.log  /home/cv-error.log
chmod 777 /home/cv-error.log
echo 'end log'