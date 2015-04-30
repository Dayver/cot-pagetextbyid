<?php
defined('COT_CODE') or die('Wrong URL');

$L['info_desc'] ='Use this plugin to fetch page field by its id or alias using global tags 
like {PHP|pagefieldbypid(123)} for return him text field where 123 is an ID of a page or 
{PHP|pagefieldbypid(\'alias\')} for return him text field where «alias» is an ALIAS of a page or
{PHP|pagefieldbypid(123, \'title\')} for return him title field where 123 is an ID of a page';

$adminhelp = <<<HELP
<h3>Sample use case</h3>
<pre>
<code>&lt;!-- IF {LIST_CAT|pagefieldbypid('$this')} --&gt;
    &lt;a href=&quot;{PHP.last_pagefield.id|cot_url('page','m=edit&amp;id=$this')}&quot;&gt;Edit category description&lt;/a&gt;
    &lt;div&gt;{PHP.last_pagefield.text}&lt;/div&gt;
&lt;!-- ELSE --&gt;
    &lt;a href=&quot;{LIST_CAT|cot_url('page','m=add')}&quot;&gt;Add category description&lt;/a&gt;
&lt;!-- ENDIF --&gt;
</code>
</pre>
HELP;
