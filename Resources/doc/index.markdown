JoshuaEstesGoogleBundle
=======================

# Requirements

* [Google Developer API Key](https://console.developers.google.com/)

# Installation

Add to your `composer.json`

    {
        "require": {
            "joshuaestes/google-bundle": "*"
        }
    }

Then just run `php composer.phar update joshuaestes/google-bundle`.

This is currently very alpha software and as time goes on, this bundle
will by versioned using Semantic Versioning.

# Configuration

You will need to edit `app/config/parameters.yml.dist` along with
`app/config/parameters.yml` to make sure that other users are able
to use their own developer keys.

WARNING: You may not want to have your developer keys stored in your
repository.

    # app/config/parameters.yml.dist
    ...
    google_developer_key: ~

You should add the developer key in your `parameters.yml`.

Next you will need to edit your `app/config/config.yml` to add
your developer key.

    # app/config/config.yml
    joshuaestes_google:
        developer_key: %google_developer_key%

Next you need to register the bundle in `app/AppKernel.php`

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new JoshuaEstes\Bundle\GoogleBundle\JoshuaEstesGoogleBundle(),
        );
    }

And that's all there is to it.

## Advanced Configuration

@TODO - using ini files to configure

# Usage

Once you have installed and configured the bundle, you can use any of the
Google services that are in the SDK provided by Google.

    <?php
    $service = $this->container->get('joshuaestes_google.service.books');

# Google SDK

You can read more about the various services by checking out the documentation
that Google has provided.

* https://github.com/google/google-api-php-client
* https://developers.google.com/api-client-library/php/
