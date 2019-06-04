<?php

namespace duncan3dc\PhpIni\Settings;

interface Session
{
    public const AUTO_START = "session.auto_start";
    public const CACHE_EXPIRE = "session.cache_expire";
    public const CACHE_LIMITER = "session.cache_limiter";
    public const COOKIE_DOMAIN = "session.cookie_domain";
    public const COOKIE_HTTPONLY = "session.cookie_httponly";
    public const COOKIE_LIFETIME = "session.cookie_lifetime";
    public const COOKIE_PATH = "session.cookie_path";
    public const COOKIE_SAMESITE = "session.cookie_samesite";
    public const COOKIE_SECURE = "session.cookie_secure";
    public const GC_DIVISOR = "session.gc_divisor";
    public const GC_MAXLIFETIME = "session.gc_maxlifetime";
    public const GC_PROBABILITY = "session.gc_probability";
    public const LAZY_WRITE = "session.lazy_write";
    public const NAME = "session.name";
    public const REFERER_CHECK = "session.referer_check";
    public const SAVE_HANDLER = "session.save_handler";
    public const SAVE_PATH = "session.save_path";
    public const SERIALIZE_HANDLER = "session.serialize_handler";
    public const SID_BITS_PER_CHARACTER = "session.sid_bits_per_character";
    public const SID_LENGTH = "session.sid_length";
    public const TRANS_SID_HOSTS = "session.trans_sid_hosts";
    public const TRANS_SID_TAGS = "session.trans_sid_tags";
    public const UPLOAD_PROGRESS_CLEANUP = "session.upload_progress.cleanup";
    public const UPLOAD_PROGRESS_ENABLED = "session.upload_progress.enabled";
    public const UPLOAD_PROGRESS_FREQ = "session.upload_progress.freq";
    public const UPLOAD_PROGRESS_MIN_FREQ = "session.upload_progress.min_freq";
    public const UPLOAD_PROGRESS_NAME = "session.upload_progress.name";
    public const UPLOAD_PROGRESS_PREFIX = "session.upload_progress.prefix";
    public const USE_COOKIES = "session.use_cookies";
    public const USE_ONLY_COOKIES = "session.use_only_cookies";
    public const USE_STRICT_MODE = "session.use_strict_mode";
    public const USE_TRANS_SID = "session.use_trans_sid";
}
