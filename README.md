# WPAustralia.org

## Getting setup with WPAustralia

1. Setup a local WordPress install
2. Change into the directory of your install
3. Remove your **wp-content** directory. To do this from the command-line run `rm -rf ./wp-content/`
4. Now checkout the **wpaustralia** Git repository into **wp-content**. Do this from the command-line by running `git clone git@github.com:BronsonQuick/wpaustralia.git ./wp-content/`
5. Get developing!

## Getting started with a BackupBuddy backup

1. Download the BackupBuddy zip and importbuddy.php files
2. Place them into a directory on your local machine e.g. `wamp/wpaustralia/`
3. Browse to importbuddy.php e.g. `http://localhost/wpaustralia/importbuddy.php`
4. Follow through the wizard to extract the site from the backup
5. Follow Japh's instructions above titled 'Getting setup with WPAustralia'
6. Optional: Open up the BackupBuddy zip file and extract the `wp-content/uploads` folder in your `wp-content` directory
7. Get developing!