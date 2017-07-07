---
layout: default
title: Getting Started
permalink: /usage/state/
api: State
---

The state class allows you to execute code using specific ini directives:

~~~php
$ini = new State;

$ini->set("memory_limit", "1M");

$ini->call(function () {
    # This code can't use much memory
});

# This code can use as much memory as the default memory_limit allows
eatAllTheMemory();
~~~
