<?php

namespace duncan3dc\PhpIni\Settings;

interface Mbstring
{
    public const DETECT_ORDER = "mbstring.detect_order";
    public const ENCODING_TRANSLATION = "mbstring.encoding_translation";
    public const FUNC_OVERLOAD = "mbstring.func_overload";
    public const HTTP_INPUT = "mbstring.http_input";
    public const HTTP_OUTPUT = "mbstring.http_output";
    public const HTTP_OUTPUT_CONV_MIMETYPES = "mbstring.http_output_conv_mimetypes";
    public const INTERNAL_ENCODING = "mbstring.internal_encoding";
    public const LANGUAGE = "mbstring.language";
    public const REGEX_STACK_LIMIT = "mbstring.regex_stack_limit";
    public const STRICT_DETECTION = "mbstring.strict_detection";
    public const SUBSTITUTE_CHARACTER = "mbstring.substitute_character";
}
