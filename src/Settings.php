<?php

namespace duncan3dc\PhpIni;

interface Settings
{
    public const ALLOW_URL_FOPEN = "allow_url_fopen";
    public const ALLOW_URL_INCLUDE = "allow_url_include";
    public const AUTO_APPEND_FILE = "auto_append_file";
    public const AUTO_DETECT_LINE_ENDINGS = "auto_detect_line_endings";
    public const AUTO_GLOBALS_JIT = "auto_globals_jit";
    public const AUTO_PREPEND_FILE = "auto_prepend_file";
    public const BROWSCAP = "browscap";
    public const DEFAULT_CHARSET = "default_charset";
    public const DEFAULT_MIMETYPE = "default_mimetype";
    public const DEFAULT_SOCKET_TIMEOUT = "default_socket_timeout";
    public const DISABLE_CLASSES = "disable_classes";
    public const DISABLE_FUNCTIONS = "disable_functions";
    public const DISPLAY_ERRORS = "display_errors";
    public const DISPLAY_STARTUP_ERRORS = "display_startup_errors";
    public const DOC_ROOT = "doc_root";
    public const DOCREF_EXT = "docref_ext";
    public const DOCREF_ROOT = "docref_root";
    public const ENABLE_DL = "enable_dl";
    public const ENABLE_POST_DATA_READING = "enable_post_data_reading";
    public const ERROR_APPEND_STRING = "error_append_string";
    public const ERROR_LOG = "error_log";
    public const ERROR_PREPEND_STRING = "error_prepend_string";
    public const ERROR_REPORTING = "error_reporting";
    public const EXPOSE_PHP = "expose_php";
    public const EXTENSION_DIR = "extension_dir";
    public const FILE_UPLOADS = "file_uploads";
    public const FROM = "from";
    public const HARD_TIMEOUT = "hard_timeout";
    public const HTML_ERRORS = "html_errors";
    public const IGNORE_REPEATED_ERRORS = "ignore_repeated_errors";
    public const IGNORE_REPEATED_SOURCE = "ignore_repeated_source";
    public const IGNORE_USER_ABORT = "ignore_user_abort";
    public const IMPLICIT_FLUSH = "implicit_flush";
    public const INCLUDE_PATH = "include_path";
    public const INPUT_ENCODING = "input_encoding";
    public const INTERNAL_ENCODING = "internal_encoding";
    public const LOG_ERRORS = "log_errors";
    public const LOG_ERRORS_MAX_LEN = "log_errors_max_len";
    public const MEMORY_LIMIT = "memory_limit";
    public const OPEN_BASEDIR = "open_basedir";
    public const POST_MAX_SIZE = "post_max_size";
    public const PRECISION = "precision";
    public const REGISTER_ARGC_ARGV = "register_argc_argv";
    public const REPORT_MEMLEAKS = "report_memleaks";
    public const REPORT_ZEND_DEBUG = "report_zend_debug";
    public const REQUEST_ORDER = "request_order";
    public const SERIALIZE_PRECISION = "serialize_precision";
    public const SHORT_OPEN_TAG = "short_open_tag";
    public const SMTP = "SMTP";
    public const SMTP_PORT = "smtp_port";
    public const SYS_TEMP_DIR = "sys_temp_dir";
    public const TRACK_ERRORS = "track_errors";
    public const UNSERIALIZE_CALLBACK_FUNC = "unserialize_callback_func";
    public const UPLOAD_MAX_FILESIZE = "upload_max_filesize";
    public const UPLOAD_TMP_DIR = "upload_tmp_dir";
    public const VARIABLES_ORDER = "variables_order";
}
