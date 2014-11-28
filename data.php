<?php

require_once 'common.php';

/* Template:

writeReportEntry(
	'json',
	"title",
	"url",
	"desc",
	array(
		
	),
	"date"
);

 */

writeReportEntry(
	'reports/2014-11-13-techrep.json',
	"Implement MySQL-based transactions with a new set of PHP extensions",
	'http://www.techrepublic.com/article/implement-mysql-based-transactions-with-a-new-set-of-php-extensions/',
	"Uses modern MySQLi library, but no parameterisation - vulnerable to SQL injections. [Tweeted to publisher](https://twitter.com/ilovephp/status/528134535439872000) to no avail.",
	array(
		createIssue('sql-injection')
	),
	'2014-10-31'
);

writeReportEntry(
	'reports/2014-11-13-onlineustaad.json',
	"Creating a Login System in PHP (Tutorial)",
	array(
		'http://vimeo.com/108934852',
		'http://www.onlinetuting.com/create-login-script-in-php/',
	),
	"[Tweeted to author](https://twitter.com/ilovephp/status/522789868301479937), received no response.",
	array(
		createIssue('sql-needs-parameterisation'),
		createIssue('password-clear')
	),
	'2014-10-31'
);

writeReportEntry(
	'reports/2014-11-13-webinfopedia.json',
	"Create secure login script in PHP",
	'http://www.webinfopedia.com/php-secure-login-script.html',
	"Tweeted to author [about library and parameterisation](https://twitter.com/ilovephp/status/523163293041840129), and [about hashing](https://twitter.com/ilovephp/status/523163435878854656), but received no response.",
	array(
		createIssue('password-clear'),
		createIssue('sql-needs-parameterisation'),
		createIssue('deprecated-library'),
	),
	'2014-10-17'
);

writeReportEntry(
	'reports/2014-11-14-tutorialspoint.json',
	"PHP and MySQL Tutorial",
	'http://www.tutorialspoint.com/php/php_and_mysql.htm',
	"A variety of issues with the chapters here. Some seem to be proofed against SQL injection, but nevertheless need parameterisation, others (e.g. Deleting Data from MySQL Database, Updating Data into MySQL Database) contain straightforward SQL injection vulns. Have [tweeted to author](https://twitter.com/ilovephp/status/523546917335478272).",
	array(
		createIssue('sql-injection'),
		createIssue('sql-needs-parameterisation'),
		createIssue('deprecated-library'),
	),
	'2014-10-18'
);

writeReportEntry(
	'reports/2014-11-14-better-business.json',
	"Tutorial Make a Simple Website E-Commerce with PHP MySql and Bootstrap",
	'http://betterbusinessforever.com/?p=354',
	"The problem here is the [zipfile](https://www.dropbox.com/s/lt4ng1pm5vyb3y0/shop.zip), which contains SQL injection flaws. I've [let the author know](https://twitter.com/ilovephp/status/523919390983868416), to no avail.",
	array(
		createIssue('sql-injection'),
		/* @todo Probably other flaws here too */
	),
	'2014-10-18'
);

writeReportEntry(
	'reports/2014-11-14-siteground.json',
	"How to Display MySQL Table Data Tutorial",
	'http://www.siteground.com/tutorials/php-mysql/display_table_data.htm',
	"A number of security flaws, and so many syntax issues it wouldn't work at all. The author [has promised to fix it](https://twitter.com/ilovephp/status/523945131800817664).",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
	),
	'2014-10-19'
);

writeReportEntry(
	'reports/2014-11-14-learn2crack.json',
	"Develop a Complete Android Login Registration System with PHP, MySQL",
	"http://www.learn2crack.com/2013/08/develop-android-login-registration-with-php-mysql.html/4",
	"The usual SQL injection flaws in this one, the [author has been notified](https://twitter.com/ilovephp/status/524685931404881920). Also, the password hashing isn't strong enough. Looks like the login can be bypassed by changing the target user's password",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
		createIssue('password-inadequate-hashing', 'SHA1/base64/salt home-made algorithm not a substitute for password_hash().'),
	),
	"2014-10-21"
);

writeReportEntry(
	'reports/2014-11-28-webinfopedia.json',
	"Simple registration form in PHP and MYSQL",
	"http://www.webinfopedia.com/registration-form-in-php.html",
	"Have [contacted author](https://twitter.com/ilovephp/status/525415879463686144) about SQL injection, received no response. Also features plain-text passwords.",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
		createIssue('password-clear'),
	),
	"2014-10-23"
);

writeReportEntry(
	'reports/2014-11-28-amitpatel.json',
	"Youtube like rating script jquery php",
	"http://www.amitpatil.me/youtube-like-rating-script-jquery-php/",
	"It's worth disabling JavaScript for this site - the whole page uses JavaScript to redirect to an advertiser's site. PHP code features variable as well as SQL injection. Have [contacted the author](https://twitter.com/ilovephp/status/525794166803292160) but not received a reply.",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
		createIssue('variable-injection', "The use of `extract()` to create variables from unfiltered user input is risky, since it can have malicious uses"),
	),
	"2014-10-24"
);

// @todo This is marked as out of date, but it is still being tweeted: https://twitter.com/ilovephp/status/525413903355088898
// @todo Plenty on  http://phppot.com:
//		http://phppot.com/php/simple-php-shopping-cart/ (sql-injection, deprecated-library
//		http://phppot.com/php/php-crud-with-search-and-pagination/ (sql-injection, deprecated-library
//		http://phppot.com/php/php-crud-with-search-and-pagination-using-jquery-ajax/ (sql-injection, deprecated-library
//		http://phppot.com/php/user-authentication-using-php-and-mysql/ (sql-injection, password-clear, deprecated-library)
//		http://phppot.com/php/php-login-script-with-session/ (sql-injection, password-clear, deprecated-library)
//		http://phppot.com/php/php-change-password-script/ (sql-injection, password-clear, deprecated-library)
//		http://phppot.com/php/ajax-programming-with-php/ (sql-injection, password-clear, deprecated-library)
//		
//		http://phppot.com/jquery/dynamic-content-load-using-jquery-ajax/ (sql-injection, deprecated-library)
//		http://phppot.com/jquery/jquery-ajax-autocomplete-country-example/ (sql-injection, deprecated-library)
//		http://phppot.com/jquery/dynamic-star-rating-with-php-and-jquery/ (sql-injection, deprecated-library)
//		http://phppot.com/jquery/facebook-style-like-unlike-using-php-jquery/ (sql-injection, deprecated-library)
//		http://phppot.com/jquery/read-display-json-data-using-jquery-ajax/ (deprecated-library)
//		http://phppot.com/jquery/php-voting-system-with-jquery-ajax/ (sql-injection, deprecated-library)
//		http://phppot.com/jquery/jquery-drag-and-drop-image-upload/ (upload-arbitrary-file)
//		http://phppot.com/jquery/php-ajax-multiple-image-upload-using-jquery/ (upload-arbitrary-file)
//		// And lots more in the jQuery AJAX section...
//		
// @todo https://twitter.com/ilovephp/status/526448585874100225 (sourcecodester)
// @todo https://twitter.com/ilovephp/status/526449945113812993 (sourcecodester)
// @todo https://twitter.com/ilovephp/status/526499792441344000 (tutsplus)
