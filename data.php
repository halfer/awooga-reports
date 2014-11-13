<?php

require_once 'common.php';

writeReportEntry(
	'reports/2014-11-13-techrep.json',
	"Implement MySQL-based transactions with a new set of PHP extensions",
	'http://www.techrepublic.com/article/implement-mysql-based-transactions-with-a-new-set-of-php-extensions/',
	"Uses modern MySQLi library, but no parameterisation - vulnerable to SQL injections. [Tweeted to publisher](https://twitter.com/ilovephp/status/528134535439872000) to no avail.",
	array(
		createIssue('sql-injection')
	),
	"2014-10-31"
);

writeReportEntry(
	'drafts/2014-11-13-onlineustaad.json.draft',
	"Creating a Login System in PHP (Tutorial)",
	'http://vimeo.com/108934852',
	"[Tweeted to author](https://twitter.com/ilovephp/status/522789868301479937), received no response.",
	array(
		createIssue('uncategorised')
	),
	"2014-10-31"
);

writeReportEntry(
	'reports/2014-11-13-webinfopedia.json',
	"Create secure login script in PHP",
	'http://www.webinfopedia.com/php-secure-login-script.html',
	"Tweeted to author [about library and parameterisation](https://twitter.com/ilovephp/status/523163293041840129), and [about hashing](https://twitter.com/ilovephp/status/523163435878854656), but received no response.",
	array(
		createIssue('password-hashing'),
		createIssue('deprecated-library'),
	),
	"2014-10-17"
);
