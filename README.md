# Impersonator plugin for Craft CMS

Impersonator tells you who the impersonator is when using Craft's 'Login as...' feature.

## Installation

To install Impersonator, follow these steps:

1. Download & unzip the file and place the `impersonator` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/tutor2u/impersonator.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require tutor2u/impersonator`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `impersonator` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Impersonator works on Craft 2.4.x and Craft 2.5.x.

## Using Impersonator

In your templates:

    {% set impersonator = craft.impersonator.get() %}
    {% if impersonator %}
        {{ impersonator.fullName }} is impersonating {{ currentUser.fullName }}
    {% endif %}

In your own plugins:

    $impersonator = craft()->impersonator->getImpersonator();
    if ($impersonator)
    {
        echo $impersonator->fullName;
    }

## Impersonator Roadmap

Some things to do, and ideas for potential features:

* Maybe some more simple helper functions
* Craft 3 version

Brought to you by [tutor2u](https://www.tutor2u.net)
