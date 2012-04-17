Jambu Desk
========================

Once you've downloaded the code follow the steps below.

### a) Check your System Configuration

Before you begin, make sure that your local system is properly configured
for Symfony. To do this, execute the following:

    php app/check.php

If you get any warnings or recommendations, fix these now before moving on.

### b) Install the Vendor Libraries

    php bin/vendors install

Note that you **must** have git installed and be able to execute the `git`
command to execute this script. If you don't have git available, either install
it or download Symfony with the vendor libraries already included.

### c) Access the Application via the Browser

Congratulations! You're now ready to use Symfony. If you've unzipped Symfony
in the web root of your computer, then you should be able to access the
web version of the Symfony requirements check via:

    http://localhost/Symfony/web/config.php

Use the web-based configurator by clicking on the "Configure your
Symfony Application online" link of the ``config.php`` page. Define your database connection details here.

To see a real-live Symfony page in action, access the following page:

    web/app_dev.php/demo/hello/Fabien

To generate the schema execute the following command:

    php app/console doctrine:schema:update --force

A default bundle, ``AcmeDemoBundle``, shows you Symfony2 in action. After
playing with it, you can remove it by following these steps:

* delete the ``src/Acme`` directory;
* remove the routing entries referencing AcmeBundle in ``app/config/routing_dev.yml``;
* remove the AcmeBundle from the registered bundles in ``app/AppKernel.php``;
