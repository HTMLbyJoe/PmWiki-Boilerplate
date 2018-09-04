HTMLbyJoe's PmWiki Boilerplate
==============================

Some boilerplate config stuff for a new [PmWiki](https://www.pmwiki.org) installation

* Configure auth using .htpasswd file
* Disable anonymous editing
* Set timezone to New York
* Allow uploading of files for logged-in users, increase file size limit
* Enable clean URLs
* Get rid of "Main" from URLs
* Send HSTS header
* Install responsive "Vector" theme along with various CSS fixes

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

    # Download the "Vector" skin
    wget https://www.pmwiki.org/pmwiki/uploads/Skins/vector.zip -O vector.zip
    unzip vector.zip -d pmwiki/pub/skins/
    cp pmwiki/pub/skins/vector/Place\ contents\ in\ wiki.d/Site.EditForm pmwiki/wiki.d/

    # Delete all this stuff you don't need anymore
    rm -fr pmwiki.zip vector.zip readme.md pmwiki-boilerplate pmwiki-boilerplate.zip

    # Set $WikiTitle and $ScriptUrl in config.php (lines 12 and 16)
    nano pmwiki/local/config.php


### Setting up user accounts
Go to `https://example.com/?action=crypt` and input a really secure admin password.

Copy the encrypted output and paste it in `$DefaultPasswords['admin']` in `config.php` (line 175)

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
