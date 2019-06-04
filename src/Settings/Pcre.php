<?php

namespace duncan3dc\PhpIni\Settings;

interface Pcre
{
    public const BACKTRACK_LIMIT = "pcre.backtrack_limit";
    public const JIT = "pcre.jit";
    public const RECURSION_LIMIT = "pcre.recursion_limit";
}
