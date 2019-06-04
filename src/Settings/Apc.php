<?php

namespace duncan3dc\PhpIni\Settings;

interface Apc
{
    public const COREDUMP_UNMAP = "apc.coredump_unmap";
    public const ENABLE_CLI = "apc.enable_cli";
    public const ENABLED = "apc.enabled";
    public const ENTRIES_HINT = "apc.entries_hint";
    public const GC_TTL = "apc.gc_ttl";
    public const MMAP_FILE_MASK = "apc.mmap_file_mask";
    public const PRELOAD_PATH = "apc.preload_path";
    public const SERIALIZER = "apc.serializer";
    public const SHM_SEGMENTS = "apc.shm_segments";
    public const SHM_SIZE = "apc.shm_size";
    public const SLAM_DEFENSE = "apc.slam_defense";
    public const SMART = "apc.smart";
    public const TTL = "apc.ttl";
    public const USE_REQUEST_TIME = "apc.use_request_time";
}
