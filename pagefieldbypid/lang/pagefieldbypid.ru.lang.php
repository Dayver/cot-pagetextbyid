<?php
defined('COT_CODE') or die('Wrong URL');

$L['info_desc'] ='Позволяет извлекать из БД информацию (например текст или заголовок) указанной страницы (например для размещения 
в произвольном месте шаблона). Из шаблона можно вызвать указав ID или Alias страницы: {PHP|pagefieldbypid(123)}, где 123 — это 
ID искомой страницы. Или {PHP|pagefieldbypid(\'alias\')}, где «alias» это псевдоним страницы. В обоих примерах будет вставлен текст 
указанной страницы, а ежели нужно вставить другое поле то можно сделать, например, так {PHP|pagefieldbypid(123, \'title\')} для 
вставки заголовка или {PHP|pagefieldbypid(\'alias\', \'date\')} если нужна дата страницы';

$adminhelp = <<<HELP
<h3>Пример использоавния</h3>
<pre>
<code>&lt;!-- IF {LIST_CAT|pagefieldbypid('$this')} --&gt;
    &lt;a href=&quot;{PHP.last_pagefield.ID|cot_url('page','m=edit&amp;id=$this')}&quot;&gt;Edit category description&lt;/a&gt;
    &lt;div&gt;{PHP.last_pagefield.TEXT}&lt;/div&gt;
&lt;!-- ELSE --&gt;
    &lt;a href=&quot;{LIST_CAT|cot_url('page','m=add')}&quot;&gt;Add category description&lt;/a&gt;
&lt;!-- ENDIF --&gt;
</code>
</pre>
HELP;
