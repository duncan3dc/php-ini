<?php

namespace duncan3dc\PhpIni\Settings;

interface Opcache
{
    public const BLACKLIST_FILENAME = "opcache.blacklist_filename";
    public const CONSISTENCY_CHECKS = "opcache.consistency_checks";
    public const DUPS_FIX = "opcache.dups_fix";
    public const ENABLE = "opcache.enable";
    public const ENABLE_CLI = "opcache.enable_cli";
    public const ENABLE_FILE_OVERRIDE = "opcache.enable_file_override";
    public const ERROR_LOG = "opcache.error_log";
    public const FILE_CACHE = "opcache.file_cache";
    public const FILE_CACHE_CONSISTENCY_CHECKS = "opcache.file_cache_consistency_checks";
    public const FILE_CACHE_ONLY = "opcache.file_cache_only";
    public const FILE_UPDATE_PROTECTION = "opcache.file_update_protection";
    public const FORCE_RESTART_TIMEOUT = "opcache.force_restart_timeout";
    public const HUGE_CODE_PAGES = "opcache.huge_code_pages";
    public const INTERNED_STRINGS_BUFFER = "opcache.interned_strings_buffer";
    public const LOCKFILE_PATH = "opcache.lockfile_path";
    public const LOG_VERBOSITY_LEVEL = "opcache.log_verbosity_level";
    public const MAX_ACCELERATED_FILES = "opcache.max_accelerated_files";
    public const MAX_FILE_SIZE = "opcache.max_file_size";
    public const MAX_WASTED_PERCENTAGE = "opcache.max_wasted_percentage";
    public const MEMORY_CONSUMPTION = "opcache.memory_consumption";
    public const OPT_DEBUG_LEVEL = "opcache.opt_debug_level";
    public const OPTIMIZATION_LEVEL = "opcache.optimization_level";
    public const PREFERRED_MEMORY_MODEL = "opcache.preferred_memory_model";
    public const PROTECT_MEMORY = "opcache.protect_memory";
    public const RESTRICT_API = "opcache.restrict_api";
    public const REVALIDATE_FREQ = "opcache.revalidate_freq";
    public const REVALIDATE_PATH = "opcache.revalidate_path";
    public const SAVE_COMMENTS = "opcache.save_comments";
    public const USE_CWD = "opcache.use_cwd";
    public const VALIDATE_PERMISSION = "opcache.validate_permission";
    public const VALIDATE_ROOT = "opcache.validate_root";
    public const VALIDATE_TIMESTAMPS = "opcache.validate_timestamps";
}
