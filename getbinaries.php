<?php 
require_once('./assets/version.php');

$x = new stdClass();
$x->cli_version = CLI_VERSION . ": " . CLI_CODENAME;
$x->binary_url = "https://getamitycoin.org/assets/";
$x->windows = "Amity-v." . CLI_VERSION . "-WIN64.zip";
$x->linux = "Amity-v" . CLI_VERSION . "-LINUX64.zip";
$x->mac = "Amity-v" . CLI_VERSION . "-MACOS64.zip";
$x->armhf = "Amity-v" . CLI_VERSION . "-ARMHF.zip";
$x->aarch64 = "Amity-v" . CLI_VERSION . "-ARM64.zip";
$x->risc = "Amity-v" . CLI_VERSION . "-RISCV64.zip";

echo json_encode($x, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>