# Flarum Database Snapshots

[![Latest Stable Version](https://img.shields.io/packagist/v/acpl/flarum-db-snapshots)](https://packagist.org/packages/acpl/flarum-db-snapshots) [![Total Downloads](https://img.shields.io/packagist/dt/acpl/flarum-db-snapshots.svg)](https://packagist.org/packages/acpl/flarum-db-snapshots/stats) [![GitHub Sponsors](https://img.shields.io/badge/Donate-%E2%9D%A4-%23db61a2.svg?&logo=github&logoColor=white&labelColor=181717)](https://github.com/android-com-pl/flarum-db-snapshots?sponsor=1)

## Installation

```sh
composer require acpl/flarum-db-snapshots
```

## Create Snapshot

Basic usage:
```sh
# Dump to storage/snapshots/snapshot-Y-m-d-His.sql
php flarum snapshot:create

# Dump to specific path/file
php flarum snapshot:create /path/to/backup.sql
php flarum snapshot:create ../backups/forum.sql

# Dump with compression (based on extension)
php flarum snapshot:create /backups/dump.sql.gz   # gzip compression
php flarum snapshot:create /backups/dump.sql.bz2  # bzip2 compression

# Create backup on live site without locking tables
php flarum snapshot:create --single-transaction --quick --lock-tables=false
```

### Options

- `--compress`: Use compression (`gz` or `bz2`), e.g. `--compress=gz` for gzip
- `--include-tables=table1,table2`: Include only specific tables
- `--exclude-tables=table1,table2`: Exclude specific tables
- `--skip-structure`: Skip table structure
- `--no-data`: Skip table data, dump only structure
- `--skip-auto-increment`: Skip AUTO_INCREMENT values
- `--no-column-statistics`: Disable column statistics (for MySQL 8 compatibility)
- `--binary-path=/path/to/binary`: Custom mysqldump binary location

Additionally, most of the standard mysqldump options are supported (like `--single-transaction`, `--quick`, `--lock-tables`, etc).
Check mysqldump documentation for available options.

## Load Snapshot

🚧 

## Requirements

- `mysqldump` binary
- `gzip` for `.gz` compression
- `bzip2` for `.bz2` compression

## Links

- [Packagist](https://packagist.org/packages/acpl/flarum-db-dumper)
- [GitHub](https://github.com/android-com-pl/flarum-db-dumper)
- [Discuss](https://discuss.flarum.org/d/36911-database-dumper)
