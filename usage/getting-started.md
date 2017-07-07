---
layout: default
title: Getting Started
permalink: /usage/getting-started/
api: Ini
---

The set method allows you to update directives:

~~~php
$ini->set("include_path", "/tmp/php");
~~~

You can restore it to what is was (before you set it) like so:

~~~php
$ini->restore("include_path");
~~~

Or you can restore all directives that you've updated:

~~~php
$ini->cleanup();
~~~
