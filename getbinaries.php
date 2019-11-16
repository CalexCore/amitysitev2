<?php 
require_once('./assets/version.php');

$x = new stdClass();
$x->cli_version = CLI_VERSION . ": " . CLI_CODENAME;
$x->binary_url = "https://getamitycoin.org/assets/";
$x->windows = "amity-" . CLI_VERSION . "_windows-x64.zip";
$x->linux = "amity-" . CLI_VERSION . "_linux-x64.zip";
$x->mac = "amity-" . CLI_VERSION . "_osx-x64.zip";
$x->armhf = "amity-" . CLI_VERSION . "_armhf.zip";
$x->aarch64 = "amity-" . CLI_VERSION . "_aarch64.zip";
$x->risc = "amity-" . CLI_VERSION . "_riscv64.zip";

echo json_encode($x, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>