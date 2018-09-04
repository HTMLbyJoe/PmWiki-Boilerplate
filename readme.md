HTMLbyJoe's PmWiki Boilerplate
==============================

Some boilerplate config stuff for a new [PmWiki](https://www.pmwiki.org) installation


### Usage

    # cd to your web root

    # Download the latest version of PmWiki
    wget http://www.pmwiki.org/pub/pmwiki/pmwiki-latest.zip -O pmwiki.zip

    # Unzip PmWiki to the current directory
    unzip pmwiki.zip -d .
    mv pmwiki-* pmwiki

    # Download HTMLbyJoe's PmWiki-Boilerplate
    wget https://github.com/HTMLbyJoe/PmWiki-Boilerplate/archive/master.zip -O pmwiki-boilerplate.zip
    unzip pmwiki-boilerplate.zip
    mv PmWiki-Boilerplate-master pmwiki-boilerplate

    # Copy the contents of the boilerplate to the web root
    cp -r pmwiki-boilerplate/. .

    # Delete all this stuff you don't need anymore
    rm -fr pmwiki.zip readme.md pmwiki-boilerplate pmwiki-boilerplate.zip

    # Set $WikiTitle and $ScriptUrl in config.php (lines 9 and 13)
    nano pmwiki/local/config.php


### Setting up user accounts
Go to `https://example.com/?action=crypt` and input a really secure admin password.

Copy the encrypted output and paste it in `$DefaultPasswords['admin']` in `config.php` (line 168)

Log in using new admin password: `https://example.com/?action=login`

Create `https://example.com/Site/Settings` and set the contents to the following:

    (:htpasswdform:)

Go to `https://example.com/Site/Settings` to create new users

### Get rid of extra stuff in sidebar

Go to `https://example.com/Site/SideBar?action=edit` and set the contents to the following:

    * [[Main/HomePage|Home]]
    * [[Site/Settings]]

    %sidehead% Wiki Help
    * [[PmWiki/Basic Editing]]
