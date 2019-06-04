<?php

namespace duncan3dc\PhpIni\Settings;

interface Mysqlnd
{
    public const COLLECT_MEMORY_STATISTICS = "mysqlnd.collect_memory_statistics";
    public const COLLECT_STATISTICS = "mysqlnd.collect_statistics";
    public const DEBUG = "mysqlnd.debug";
    public const FETCH_DATA_COPY = "mysqlnd.fetch_data_copy";
    public const LOG_MASK = "mysqlnd.log_mask";
    public const MEMPOOL_DEFAULT_SIZE = "mysqlnd.mempool_default_size";
    public const NET_CMD_BUFFER_SIZE = "mysqlnd.net_cmd_buffer_size";
    public const NET_READ_BUFFER_SIZE = "mysqlnd.net_read_buffer_size";
    public const NET_READ_TIMEOUT = "mysqlnd.net_read_timeout";
    public const SHA256_SERVER_PUBLIC_KEY = "mysqlnd.sha256_server_public_key";
    public const TRACE_ALLOC = "mysqlnd.trace_alloc";
}
