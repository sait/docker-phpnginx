
# Install docker
apt-get update
apt-get install apt-transport-https 
apt-get install ca-certificates
apt-get install curl 
apt-get install software-properties-common
apt-key fingerprint 0EBFCD88
apt-get update
apt-get install docker-ce


# Install docker-compose
# Read: https://github.com/docker/compose/releases
curl -L https://github.com/docker/compose/releases/download/1.14.0-rc2/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose


# Clone this repository in /home/myapp
cd /home
git clone https://github.com/sait/docker-phpnginx.git  myapp



