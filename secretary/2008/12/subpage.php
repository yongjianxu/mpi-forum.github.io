<?
$topdir = "../../..";
include_once("top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2008/12/$file");

$head_title = "MPI Forum meeting Dec'08: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("Dec 15-17, 2008", 
               "Sun Microsystems, Menlo Park, CA, USA");
