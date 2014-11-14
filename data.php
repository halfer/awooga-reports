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
