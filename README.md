# 🚀 DEV box ⚙
A simple pre-configured Vagrant Box for your LAMP/LEMP development.

The initial setup comes from [Scotch Box](https://github.com/scotch-io/scotch-box) so big thanks to Nick for his work.

## ⚙ Installing

If you don't have Vagrant installed yet you should go and grab it from [Vagrant downloads](https://www.vagrantup.com/downloads.html) following installation instructions for your OS.

Open your terminal, clone this repository and start Vagrant.
Grab a cup of ☕ and wait until box download has finished

```bash
$ git clone https://github.com/uniqu3/dev.box.git your-folder
$ cd your-folder
$ vagrant up
```

Once the download has finished open [192.168.33.10](192.168.33.10) in your browser and you are ready to hit the keyboard.

Instead of typing IP, for convenience you could edit your `hosts` file and add the IP in example.

```
192.168.33.10 dev.box
```

By default Apache is serving to port 80 and nginx to port 8080.

If you prefer nginx over Apache simply change ports in configuration files and restart.

Apache: `/etc/apache2/sites-available/000-default.conf`

nginx: `/etc/nginx/sites-available/default`

SSH to the box with `vagrant ssh`, if that doesn't work try `vagrant ssh-config`.

## 📦 Version 1.0.1 - Whats included?

| 📦 Feature | ⏰ Version | 👍 Working |
| --- | --- | ---: |
| OS | Ubuntu 14.04 | ✅ |
| Apache | 2.4.29 `port 80` | ✅ |
| nginx | 1.14.0 `port 8080` | ✅ |
| PHP | 7.2.24 | ✅ |
| Python | 3.68 | ✅ |
| Node.js | 12.13.0 | ✅ |
| npm | 6.12.1 | ✅ |
| Go | 1.13.3 | ✅ |
| Ruby | 2.5.1 | ✅ |
| RVM | 1.29.9 | ✅ |
| Git | 2.7.1 | ✅ |
| Imagemagick | 6.9.7 | ✅ |
| Curl | 7.58.0 | ✅ |
| Beanstalkd | 1.10 | ✅ |
| ngrok | 1.6 | ✅ |

### 📦 Databse stuff

| 📦 Feature | ⏰ Version | 👍 Working |
| --- | --- | ---: |
| MySQL | 5.7.27 | ✅ |
| PostgreSQL | 10.10 | ✅ |
| MongoDB | 4.2.1 | ✅ |
| SQLite | 3.22.0 | ✅ |

### 📦 Tools

**Composer Version 1.9.1** comes already preinstalled including **cgr** for global package management.

#### Global packages

| 📦 Feature | ⏰ Version | ⌨ Command |👍 Working |
| --- | --- | --- | ---: |
| PHPUnit | 8.4.2 | `$ phpunit` | ✅ |
| WP-CLI | 2.3.0 | `$ wp` | ✅ |
| Drush | 10.0.1 | `$ drush` | ✅ |
| Wireshell | 1.0.6 | `$ wireshell` | ✅ |
| Laravel installer | 2.2.0 | `$ laravel` | ✅ |

**Node.js Version 12.13.0** is preinstalled coming with **npm Version 6.12.1** and **yarn 1.19.1** for package management.

#### Global packages

| 📦 Feature | ⏰ Version |👍 Working |
| --- | --- | ---: |
| Grunt | 1.0.4 | ✅ |
| Gulp | 4.41.2 | ✅ |
| webpack | 4.0.2 | ✅ |
| webpack-cli | 3.3.10 | ✅ |

### Troubleshooting

If you are having problems with VirtualBox Guest Additions and Vagrant try installing [vagrant-vbguest](https://github.com/dotless-de/vagrant-vbguest) plugin.

```bash
$ vagrant plugin install vagrant-vbguest
```
