# Awesome Avatars

Awesome Avatars is the most awesome avatars plugin for WordPress! It allows users to upload their own avatars or use avatars from their social networks (using avatars.io).


## Installation

Drop this directory in your `wp-content` folder and activate the plugin.


## Quick Setup

Want to test out Awesome Avatars and work on it? Here's how you can set up your own
testing environment in a few easy steps:

1. Install [Vagrant](http://vagrantup.com/) and [VirtualBox](https://www.virtualbox.org/).
2. Clone [Chassis](https://github.com/Chassis/Chassis):

   ```bash
   git clone --recursive git@github.com:Chassis/Chassis.git awesome-avatars-tester
   ```

3. Grab a copy of Awesome Avatars:

   ```bash
   cd awesome-avatars-tester
   mkdir -p content/plugins content/themes
   cp -r wp/wp-content/themes/* content/themes
   git clone git@github.com:josiahgoff/awesome-avatars.git content/plugins/awesome-avatars
   ```

4. Start the virtual machine:

   ```bash
   vagrant up
   ```

5. Activate the plugin:

   ```bash
   vagrant ssh -c 'cd /vagrant && wp plugin activate awesome-avatars'
   ```

6. Sign up at [Avatars.io](http://avatars.io) for free to get your API credentials and input them through the dashboard settings panel.

You're done! You should now have a WordPress site available at
http://vagrant.local.

To access the admin interface, visit http://vagrant.local/wp/wp-admin and log
in with the credentials below:

   ```
   Username: admin
   Password: password
   ```

### Testing

For testing, you'll need a little bit more:

1. Clone the [Tester extension](https://github.com/Chassis/Tester) for Chassis:

   ```bash
   # From your base directory, api-tester if following the steps from before
   git clone --recursive https://github.com/Chassis/Tester.git extensions/tester
   ```

2. Run the provisioner:

   ```
   vagrant provision
   ```

3. Log in to the virtual machine and run the testing suite:

   ```bash
   vagrant ssh
   cd /vagrant/content/plugins/awesome-avatars
   phpunit
   ```

   You can also execute the tests in the context of the VM without SSHing
   into the virtual machine (this is equivalent to the above):

   ```bash
   vagrant ssh -c 'cd /vagrant/content/plugins/awesome-avatars && phpunit'
   ```


## Issue Tracking

All tickets for the project are being tracked on [GitHub](https://github.com/josiahgoff/awesome-avatars/issues).
