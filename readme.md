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

# Set $ScriptUrl to your web address in config.php (line 13)
nano pmwiki/local/config.php