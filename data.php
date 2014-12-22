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
	"A variety of issues with the chapters here. Some seem to be proofed against SQL injection, but nevertheless need parameterisation, others (e.g. Deleting Data from MySQL Database, Updating Data into MySQL Database) contain straightforward SQL injection vulns. Have [tweeted to author](https://twitter.com/ilovephp/status/523546917335478272), recceived no reply.",
	array(
		createIssue('sql-injection'),
		createIssue('sql-needs-parameterisation'),
		createIssue('deprecated-library'),
	),
	'2014-10-18'
);

writeReportEntry(
	'reports/2014-12-03-tutorialspoint.json',
	'Android PHP/MYSQL Tutorial',
	'http://www.tutorialspoint.com/android/android_php_mysql.htm',
	"SQL injection issues, despite using mysqli. Also incorrectly advocates for the use of plain text in a password storage system. Have [contacted the author](https://twitter.com/ilovephp/status/540182898960523264) to ask for improvements.",
	array(
		createIssue('sql-injection'),
		createIssue('sql-needs-parameterisation'),
		createIssue('password-clear'),
	)
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
	"It's worth disabling JavaScript for this site - the whole page uses JavaScript to redirect to an advertiser's site. PHP code features variable as well as SQL injection. Have [contacted the author](https://twitter.com/ilovephp/status/525794166803292160), and [the author has undertaken to fix it](https://twitter.com/amitspatil/status/540083644753129473).",
	array(
		createIssue('sql-injection', "The `\$item` variable can be used in a POST op to inject arbitrary SQL into a database query"),
		createIssue('deprecated-library'),
		createIssue('variable-injection', "The use of `extract()` to create variables from unfiltered user input is risky, since it can have malicious uses"),
	),
	"2014-10-24"
);

writeReportEntry(
	'reports/2014-12-12-smarttutorials-01.json',
	"jQuery Autocomplete Mutiple Fields Using jQuery, Ajax, PHP and MySQL",
	array(
		'http://www.smarttutorials.net/jquery-autocomplete-multiple-fields-using-ajax-php-mysql-example/',
		'http://www.smarttutorials.net/jquery-autocomplete-search-using-php-mysql-and-ajax/',
	),
	"Two versions of this tutorial. Have [contacted the author](https://twitter.com/ilovephp/status/543363764079583232) to let them know about the SQL injection issue in both.",
	array(
		createIssue('sql-injection', "The MySQLi library is in use, so this just needs modifying to parameterised queries"),
	),
	'2014-12-12'
);

writeReportEntry(
	'reports/2014-12-12-smarttutorials-02.json',
	"Responsive Quiz Application Using PHP, MySQL, jQuery, Ajax and Twitter Bootstrap",
	'http://www.smarttutorials.net/responsive-quiz-application-using-php-mysql-jquery-ajax-and-twitter-bootstrap/',
	"Uses legacy library. Several SQL injection vulnerabilities here.",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
	)
);

writeReportEntry(
	'reports/2014-12-12-smarttutorials-03.json',
	"Demo Facebook like Button Application Using PHP, MySQL, jQuery and Ajax",
	'http://www.smarttutorials.net/demo-facebook-like-button-application-using-php-mysql-jquery-and-ajax/',
	"Uses legacy library, similar SQL injection vulns to other MySQL tutorials on this domain.",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
	)
);

writeReportEntry(
	'reports/2014-12-12-smarttutorials-04.json',
	"Instant Search With Pagination in PHP, MySQL, jQuery and Ajax",
	array(
		'http://www.smarttutorials.net/instant-search-with-pagination-in-php-mysql-jquery-and-ajax/',
		'http://www.smarttutorials.net/pagination-previous-next-first-and-last-button-using-jqgrid-php-mysql-jquery-and-ajax/',
	),
	"Two similar pagination tutorials, both with security vulnerabilities",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
	)
);
// @todo And probably plenty more in http://www.smarttutorials.net/php/

writeReportEntry(
	'reports/2014-12-13-iluv2code.json',
	"Simple Login with CodeIgniter in PHP",
	"http://www.iluv2code.com/login-with-codeigniter-php.html",
	"A CodeIgniter tutorial that uses MD5 to hash passwords, with no salt.",
	array(
		createIssue('password-inadequate-hashing'),
	)
);

writeReportEntry(
	'reports/2014-12-21-androidhive.json',
	"Android Push Notifications using Google Cloud Messaging (GCM), PHP and MySQL",
	"http://www.androidhive.info/2012/10/android-push-notifications-using-google-cloud-messaging-gcm-php-and-mysql/",
	"Another tutorial site recommending the use of the deprecated MySQL library, and with several SQL injection vulnerabilities in the code. I have [let the author know](https://twitter.com/ilovephp/status/546750342852268032), as usual.",
	array(
		createIssue('sql-injection'),
		createIssue('deprecated-library'),
	),
	'2014-12-21'
);

// Found here: https://stackoverflow.com/questions/27606706/how-to-create-my-own-json-php-link
writeReportEntry(
	'reports/2014-12-22-dipinkrishna.json',
	"iOS Login and Signup Screen tutorial : Swift + XCode 6 + iOS 8 + JSON",
	"http://dipinkrishna.com/blog/2014/07/login-signup-screen-tutorial-xcode-6-swift-ios-8-json/",
	"Remarkably, the PHP API code uses parameterisation via the MySQLi engine, and so at first glance is safe with regards to SQL injection. However the self-assembly of the JSON response string is risky, and MD5 is no longer regarded as a suitable hash for password storage.",
	array(
		createIssue('password-inadequate-hashing'),
	)
);

$phpPotGeneralDesc = "A site with a large number of vulnerable scripts, including many that are live on the author's own server.";
$phpPotInjectionDesc = "This site contains a large number of SQL injections, all or mostly involving the legacy mysql library. Interestingly the [author cites parameterisation as a benefit of MySQLi](http://phppot.com/php/mysql-vs-mysqli-in-php/) elsewhere on the site.";
$phpPotInjectAndDeprecated = array(
	createIssue('sql-injection', $phpPotInjectionDesc),
	createIssue('deprecated-library'),
);

writeReportEntry(
	'reports/2014-12-03-phppot-01.json',
	"Simple PHP Shopping Cart",
	"http://phppot.com/php/simple-php-shopping-cart/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-02.json',
	"PHP CRUD with Search and Pagination",
	"http://phppot.com/php/php-crud-with-search-and-pagination/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-03.json',
	"PHP CRUD with Search and Pagination using jQuery AJAX",
	"http://phppot.com/php/php-crud-with-search-and-pagination-using-jquery-ajax/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-04.json',
	"Dynamic Content Load using jQuery AJAX",
	"http://phppot.com/jquery/dynamic-content-load-using-jquery-ajax/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-05.json',
	"jQuery AJAX Autocomplete – Country Example",
	"http://phppot.com/jquery/jquery-ajax-autocomplete-country-example/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-06.json',
	"Dynamic Star Rating with PHP and jQuery",
	"http://phppot.com/jquery/dynamic-star-rating-with-php-and-jquery/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-07.json',
	"Facebook Style Like Unlike using PHP jQuery",
	"http://phppot.com/jquery/facebook-style-like-unlike-using-php-jquery/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-08.json',
	"PHP Voting System with jQuery AJAX",
	"http://phppot.com/jquery/php-voting-system-with-jquery-ajax/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-09.json',
	"Tutorial Menu AJAX Add Edit Delete Records in Database using PHP and jQuery",
	"http://phppot.com/jquery/ajax-add-edit-delete-records-in-database-using-php-and-jquery/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-10.json',
	"Live Username Availability Check using PHP and jQuery AJAX",
	"http://phppot.com/jquery/live-username-availability-check-using-php-and-jquery-ajax/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

writeReportEntry(
	'reports/2014-12-03-phppot-11.json',
	"Tutorial Menu Using jqGrid Control with PHP",
	"http://phppot.com/jquery/using-jqgrid-control-with-php/",
	$phpPotGeneralDesc,
	$phpPotInjectAndDeprecated
);

$phpPotPasswordDesc = "A site with a large number of scripts featuring SQL injection vulnerabilities. A number of articles, including this one, incorrectly advise programmers to store passwords in plain text.";
writeReportEntry(
	'reports/2014-12-21-phppot-01.json',
	"PHP User Authentication with MySQL",
	"http://phppot.com/php/user-authentication-using-php-and-mysql/",
	$phpPotPasswordDesc,
	array_merge($phpPotInjectAndDeprecated, createIssue('password-clear'))
);

writeReportEntry(
	'reports/2014-12-21-phppot-02.json',
	"PHP Login Script with Session",
	"http://phppot.com/php/php-login-script-with-session/",
	$phpPotPasswordDesc,
	array_merge($phpPotInjectAndDeprecated, createIssue('password-clear'))
);

writeReportEntry(
	'reports/2014-12-21-phppot-03.json',
	"PHP Change Password Script",
	"http://phppot.com/php/php-change-password-script/",
	$phpPotPasswordDesc,
	array_merge($phpPotInjectAndDeprecated, createIssue('password-clear'))
);

writeReportEntry(
	'reports/2014-12-21-phppot-04.json',
	"PHP AJAX Programming",
	"http://phppot.com/php/ajax-programming-with-php/",
	$phpPotPasswordDesc,
	array_merge($phpPotInjectAndDeprecated, createIssue('password-clear'))
);

//		http://phppot.com/php/php-contact-form/ (email-header-injection, sql-injection, deprecated-library)
//		
//		http://phppot.com/jquery/read-display-json-data-using-jquery-ajax/ (deprecated-library)
//		http://phppot.com/jquery/jquery-drag-and-drop-image-upload/ (upload-arbitrary-file)
//		http://phppot.com/jquery/php-ajax-multiple-image-upload-using-jquery/ (upload-arbitrary-file)
//		http://phppot.com/jquery/load-data-dynamically-on-page-scroll-using-jquery-ajax-and-php/ (xss, deprecated library)
//		http://phppot.com/jquery/jquery-progress-bar-for-php-ajax-file-upload/ (upload-arbitrary-file)
//		http://phppot.com/jquery/php-contact-form-with-jquery-ajax/ (email-header-injection)

// @todo This is marked as out of date, but it is still being tweeted: https://twitter.com/ilovephp/status/525413903355088898

// @todo https://twitter.com/ilovephp/status/526448585874100225 (sourcecodester)
// @todo https://twitter.com/ilovephp/status/526449945113812993 (sourcecodester)
// @todo https://twitter.com/ilovephp/status/526499792441344000 (tutsplus)

// http://www.raywenderlich.com/13541/how-to-create-an-app-like-instagram-with-a-web-service-backend-part-22 (password-clear, sql-needs-parameterisation)
//   Tweeted here: https://twitter.com/ilovephp/status/541217475804004352, https://twitter.com/ilovephp/status/541217797389701120
