# RaspiBMSLite


#1.list of things (my choise)
-Raspbery Pi    (3 Model B)

-Camera usb     (ESPERANZA TITANUM)

-servo          (TowerPro SG-90 - micro)

-bulb

-wires



#2.Quick Install (Rasbian)

update repository	
>sudo apt-get update
install apache and php5

>sudo apt-get install apache2 -y

>sudo apt-get install php5 libapache2-mod-php5 -y

set permissions for catalog
>chmod 777 /var/www/html

go to /home/pi and get library pigpio and unzip
>wget abyz.co.uk/rpi/pigpio/pigpio.zip
>unzip pigpio.zip

go to PIGPIO, compile and install library
>cd PIGPIO
>sudo make
>sudo make install

Run daemon
>sudo pigpiod

You can set autostart deamon, add sudo pigpiod to /etc/rc.local

now the camera
Instal motion package
>sudo apt-get install motion

modify config
>sudo vim /etc/motion/motion.conf 
set stream_localhost off
and
>sudo vim /etc/default/motion
set start_motion_daemon=yes

if you would like starting and stopping camera, and also can turn off raspberry pi, you shoud set special perrmision

>sudo vim /etc/sudoers
and add
>www-data ALL=NOPASSWD: /etc/init.d/motion
