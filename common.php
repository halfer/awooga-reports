<?php

/**
 * 
 * @param string $issueCatCode Issue category
 * @param string $description Description in markdown format
 * @return array
 * @throws Exception
 */
function createIssue($issueCatCode, $description = null)
{
	// Permitted issues
	$issueCodes = array(
		'xss', 'sql-injection',
		'password-clear', 'password-hashing',
		'deprecated-library',
	);
	if (!in_array($issueCatCode, $issueCodes))
	{
		throw new Exception('Unrecognised issue code');
	}

	return array(
		'issue_cat_code' => $issueCatCode,
		'description' => $description,
	);	
}

/**
 * Renders a pretty JSON string containing a report + issues
 * 
 * @param string $title Plaintext title
 * @param string $url URL of resource
 * @param string $description Description in markdown format
 * @param array $issues
 * @param string $authorNotifiedDate Optional
 */
function printReportEntry($title, $url, $description, array $issues, $authorNotifiedDate = null)
{
	$entry = array(
		'version' => 1,
		'title' => $title,
		'url' => $url,
		'description' => $description,
		'issues' => $issues,
	);

	// Issues are mandatory
	if (!$issues)
	{
		throw new Exception('A report must feature at least one issue');
	}

	// Author notification may not always be done when reporting, so optional
	if ($authorNotifiedDate)
	{
		$entry['author_notified_date'] = $authorNotifiedDate;
	}

	echo json_encode($entry, JSON_PRETTY_PRINT);
}
