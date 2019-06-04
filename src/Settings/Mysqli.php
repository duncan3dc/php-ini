<?php

namespace duncan3dc\PhpIni\Settings;

interface Mysqli
{
    public const ALLOW_LOCAL_INFILE = "mysqli.allow_local_infile";
    public const ALLOW_PERSISTENT = "mysqli.allow_persistent";
    public const DEFAULT_HOST = "mysqli.default_host";
    public const DEFAULT_PORT = "mysqli.default_port";
    public const DEFAULT_PW = "mysqli.default_pw";
    public const DEFAULT_SOCKET = "mysqli.default_socket";
    public const DEFAULT_USER = "mysqli.default_user";
    public const MAX_LINKS = "mysqli.max_links";
    public const MAX_PERSISTENT = "mysqli.max_persistent";
    public const RECONNECT = "mysqli.reconnect";
    public const ROLLBACK_ON_CACHED_PLINK = "mysqli.rollback_on_cached_plink";
}
