# WiFi Captive Portal

## Description

This project contains the required HTML and database setup for WiFi captive portal.

## Setup

Upload everything **EXCEPT** `./remote/` to router in `/tmp/splashd/demo/`

Import `db.sql` into the database to set up necessary tables, columns, and rows.  

Modify `./remote/splashLog.php` as needed to match database information & credentials.

Upload `./remote/splashLog.php` to server that hosts database.  If it is router, just put in router.
* NOTE: Be sure to change the path to the log script in `./remote/splashLogin.php`

Upload `./remote/splashLogin.php` to `/www/user/` on router.
