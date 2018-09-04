HTMLbyJoe's PmWiki Boilerplate
==============================

Some boilerplate config stuff for a new [PmWiki](https://www.pmwiki.org) installation


### Usage

# cd to your web root

wget http://www.pmwiki.org/pub/pmwiki/pmwiki-latest.zip -O pmwiki.zip

unzip pmwiki.zip -d .
mv pmwiki-* pmwiki

git clone https://github.com/HTMLbyJoe/PmWiki-Boilerplate.git pmwiki-boilerplate

cp -r pmwiki-boilerplate/. .

# Set $WikiTitle and $ScriptUrl in config.php (lines 9 and 13)
nano pmwiki/local/config.php


### Setting up user accounts
Go to https://example.com/?action=crypt and input a really secure admin password
Copy the encrypted output and paste it in $DefaultPasswords['admin'] in config.php (line 168)

Create https://example.com/Site/Settings and set the contents to the following:

    (:htpasswdform:)

View https://example.com/Site/Settings using your admin password, and create new users

### Sidebar

https://example.com/Site/SideBar?action=edit

    * [[Main/HomePage|Home]]

    %sidehead% Wiki Help
    * [[PmWiki/Basic Editing]]
