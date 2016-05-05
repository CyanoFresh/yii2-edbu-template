Portfolio DataBase
============================

This is my portfolio database, like a "hub" for all my works. Built on
Yii2 Framework. Also REST API available.


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

Get project files:

~~~
git clone https://github.com/CyanoFresh/portfolio-db.git pdb
cd pdb
composer install
php init
~~~

Then configure DB in params/db-local.php and run:

~~~
php yii migrate
~~~

**NOTES:**
- Check and edit the other files in the `config/` directory to customize your application as required.
