# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|


  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "uniqu3/devbox"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.hostname = "devbox"
  config.vm.network "forwarded_port", guest: 3306, host: 3306 #MySQL
  config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]

  # Optional NFS. Make sure to remove other synced_folder line too
  #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

end
