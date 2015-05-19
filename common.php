<?php

/**
 * 
 * @param string $issueCatCode Issue category
 * @param string $description Description in markdown format
 * @param string $resolvedAt Date of resolution
 * @return array
 * @throws Exception
 */
function createIssue($issueCatCode, $description = null, $resolvedAt = null)
{
	// Permitted issues
	$issueCodes = array(
		'xss', 'sql-injection',
		'password-clear',
		'password-inadequate-hashing',
		'deprecated-library',
		'sql-needs-parameterisation',
		'variable-injection',
		'uncategorised',
	);
	if (!in_array($issueCatCode, $issueCodes))
	{
		throw new Exception('Unrecognised issue code');
	}

	$issue = array('issue_cat_code' => $issueCatCode, );
	if ($description && is_string($description))
	{
		$issue['description'] = $description;
	}
	if ($resolvedAt && is_string($resolvedAt))
	{
		$issue['resolved_at'] = $resolvedAt;
	}

	return $issue;
}

/**
 * Renders a pretty JSON string containing a report + issues
 * 
 * @param string $title Plaintext title
 * @param string|array $url URL(s) of resource
 * @param string $description Description in markdown format
 * @param array $issues
 * @param string $authorNotifiedDate Optional
 */
function createReportEntry($title, $url, $description, array $issues, $authorNotifiedDate = null)
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

	// Require title and description to be a string
	if (!is_string($title))
	{
		throw new Exception('The title must be a string');
	}
	if (!is_string($description))
	{
		throw new Exception('The description must be a string');
	}

	// Author notification may not always be done when reporting, so optional
	if ($authorNotifiedDate)
	{
		$entry['author_notified_date'] = $authorNotifiedDate;
	}

	return json_encode($entry, JSON_PRETTY_PRINT);
}

function writeReportEntry($file, $title, $url, $description, array $issues, $authorNotifiedDate = null)
{
	// Let's apply a size limit to the relative dir/file name
	$sizeLimit = 128;
	if (strlen($file) > $sizeLimit)
	{
		throw new Exception("Filenames must be less than $sizeLimit characters long");
	}
	
	$json = createReportEntry($title, $url, $description, $issues, $authorNotifiedDate);
	$outputFile = __DIR__ . '/' . $file;
	file_put_contents($outputFile, $json);
}