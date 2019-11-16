<?php 
require_once('./assets/version.php');

$x = new stdClass();
$x->cli_version = CLI_VERSION . ": " . CLI_CODENAME;
$x->binary_url = "https://getamitycoin.org/assets/";
$x->windows = "Amity-" . CLI_VERSION . "-WIN64.zip";
$x->linux = "Amity-" . CLI_VERSION . "-LINUX64.zip";
$x->mac = "Amity-" . CLI_VERSION . "-MACOS64.zip";
$x->armhf = "Amity-" . CLI_VERSION . "-ARMHF.zip";
$x->aarch64 = "Amity-" . CLI_VERSION . "-ARM64.zip";
$x->risc = "Amity-" . CLI_VERSION . "-RISCV64.zip";

echo json_encode($x, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>