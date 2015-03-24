# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "puphpet/debian75-x64"

  config.vm.provision :shell, path: "vagrant/provision.sh"
  config.vm.provision :shell, path: "vagrant/bootstrap.sh", run: "always"

  # Share project folder
  config.vm.synced_folder ".", "/vagrant", id: "vagrant-htdocs", :owner => "www-data", :group => "www-data"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.111.111"

  config.vm.provider "virtualbox" do |v|
	v.name = "WIMS"
  end


  config.vm.post_up_message = "Congrats! VM is up and running!"
end
