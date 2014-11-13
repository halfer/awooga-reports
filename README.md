Project Awooga
==============

Introduction
------

This project, currently in a proposal stage, is intended to be a crowd-sourced data repository of
programming materials on the web that demonstrate problematic practices, and which are at risk of
actively teaching bad or insecure coding habits. Experience has shown that authors of such material
are rarely willing to improve their material, especially in the cases where necessary changes
would be substantial.

I noticed this problem after publishing a PHP tutorial called [I ♥ PHP](http://ilovephp.jondh.me.uk);
the more I looked for other material to send new coders to, the more issues I found. It turns out for
PHP that there are very few resources on the web I'd be happy to recommend (though it would not be
surprising to find the same for other languages also).

There are two basic outcomes that I would like to see as a result of this project. The first is
that authors experience a collective pressure from the technology community to improve or remove
material that teaches poor practices. Also, it would be good for new programmers to have a central
site they can check tutorials against, to warn them about resources that are not of high quality.

Data collection
------

The potential size of this data set means that it is not feasible for a single individual or group to
collate it by themselves. I therefore suggest the data is maintained by willing volunteers in
public Git repositories (e.g. GitHub, BitBucket etc), of which this repo is itself an example. The
URL of these repositories would then be
held in a central database and each would be periodically scanned for updates, without any oversight
from a central coordinator.

New volunteers wishing to be included in the effort could perhaps start with adding a few reports in
a public repo to show they are able to abide by some basic contributor guidelines:

* Reports are correct, succinct and readable
* If the contributor has contacted the author, they are polite and constructive
* An effort has been made not to list material already in the database
* Repos are free of large/redundant files that would cause disk space issues when they are cloned

Of course, a contributor who has been made active can be removed if they fail to abide by the
guidelines.

Data format
-------

Data is to be held in JSON, one file per report. The repo would be scanned recursively and any
files found with a `.json` extension are assumed to be a report. Anything that passes validation
will be inserted (or updated) in the central database, and anything that fails validation will
be listed on a public validation report (which can be consulted to aid repair).

Since the format may change over time, each JSON file will contain a format version number, to
allow for future expansion.

Other than the extension, there is no proposed standard for report filenames or directories - this
is at the whim of the author. I've labelled mine thus:

	yyyy-mm-dd-title

Files that are renamed or moved within the repo will result in the old version being removed and
the new one added as if it is brand new.

Generation functions
-------

This repo contains an example of how data can be added and maintained using simple PHP scripts
committed to the same repo. At a later time, I'd like to add a simple web form that will help
generate this, if there's demand.

Website
-------

A central website might offer these features:

* Read repositories every few hours to update data
* Read data into a relational database
* Offer a browsable, paginated and searchable list of resources. Beginners and contributors can
search by domain or URL to see if a tutorial they have found is listed
* Build a downloadable JSON document for the full database, for anyone to use as they wish

Copyright
------

All data contributed to the system would fall under some sort of copyleft license, perhaps
Creative Commons. Whilst the associated website should be fine for most purposes, anyone wanting
to do something novel with the data would be free to do so without needing to seek permission
(either from the project or from individual contributors).
