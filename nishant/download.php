
<?php
$path = $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF'])."/detail_files/"; 
$fullPath = $path.basename($_REQUEST['filename']);


if (is_readable ($fullPath)) {
$fsize = filesize($fullPath);
$path_parts = pathinfo($fullPath);
$ext = strtolower($path_parts["extension"]);
switch ($ext) {
    case "pdf":
    header("Content-type: application/pdf");
    header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
    break;
    default;
    header("Content-type: application/octet-stream");
    header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
}
header("Content-length: $fsize");
header("Cache-control: private");
readfile($fullPath);
exit;
} else {
        die("Invalid request");
}
