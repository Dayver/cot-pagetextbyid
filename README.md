Page field by ID
===================

Extension for Cotonti CMF. Gets page content by its reference

Description
-----------

Use this plugin to fetch any page field by its id or alias using global tags 
like {PHP|pagefieldbypid(123, \'text\')} where 123 is an ID of a page and «text» is fetched field or 
{PHP|pagefieldbyid(\'alias\')} where «alias» is an ALIAS of a page/


Requirements
------------

Cotonti Siena branch


Install
-------

* Unpack, copy files to root folder of your site.
* Install via Admin → Extensions menu (`Administration panel → Extensions`)

Usage
-----

Use `pagefieldtbypid` function with page ID or Alias. Last page data stored in `last_pagefield` variable:


	{PHP|pagefieldbypid('alias')}

or

	<!-- IF {PHP|pagefieldbypid('alias')} -->
		{PHP.last_pagefield.TEXT}
	<!-- ELSE -->
		Page {PHP.last_pagefield.ID} not found
	<!-- ENDIF -->


###Sample use case


    <!-- IF {LIST_CAT|pagefieldbypid('$this')} -->
    	<a href="{PHP.last_pagefield.ID|cot_url('page','m=edit&id=$this')}">Edit category description</a>
    	<div>{PHP.last_pagefield.TEXT}</div>
    <!-- ELSE -->
    	<a href="{LIST_CAT|cot_url('page','m=add')}">Add category description</a>
    <!-- ENDIF -->



Licence
-------




History
-------

* 1.0.0					Reliz for Genoa
* 2.0.0	by Trustmaster	Reliz for Siena
* 2.1.0	by Macik		Add extending function for common case usege
* 3.0.0	by Dayver		Renaming and added cache and much more functionals


Authors
------

[Vladimir Sibirov](https://github.com/trustmaster)
[Macik](https://github.com/macik)
[Pavel Tkachenko aka Dayver](https://github.com/Dayver)

References
----------

* [Cotonti.com](http://Cotonti.com) -- Home of Cotonti CMF
* [«pagetextbyid» on GitHub](https://github.com/trustmaster/cot-pagetextbyid) -- latest version of `pagetextbyid` on GitHub
* [«pagefieldbypid» on GitHub](https://github.com/Dayver/cot-pagetextbyid) -- latest version of `pagefieldbypid` on GitHub
