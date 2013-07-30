<?php
/*
Template Name: paper 
*/
?>
<?php

function crawl_page($url, $depth = 5)
{
  static $seen = array();
  if (isset($seen[$url]) || $depth === 0) {
    return;
  }
  $seen[$url] = true;

  $dom = new DOMDocument('1.0');
  @$dom->loadHTMLFile($url);

  $anchors = $dom->getElementsByTagName('a');
  foreach ($anchors as $element) {
    $href = $element->getAttribute('href');
    //if (preg_match('/thestartup/', $href) === 1){
      print_r($href);
      echo '<br>';
    //}
    if (0 !== strpos($href, 'http')) {
      $path = '/' . ltrim($href, '/');
      if (extension_loaded('http')) {
        $href = http_build_url($url, array('path' => $path));
      } else {
        $parts = parse_url($url);
        $href  = $parts['scheme'] . '://';
        if (isset($parts['user']) && isset($parts['pass'])) {
          $href .= $parts['user'] . ':' . $parts['pass'] . '@';
        }
        $href .= $parts['host'];
        if (isset($parts['port'])) {
          $href .= ':' . $parts['port'];
        }
        $href .= $path;
      }
    }
    crawl_page($href, $depth - 1);
  }
  //echo "URL:", $url, PHP_EOL, "CONTENT:", PHP_EOL, $dom->saveHTML(), PHP_EOL, PHP_EOL;
}

crawl_page("http://ci.nii.ac.jp/search?q=%E3%82%AF%E3%83%A9%E3%82%A6%E3%83%89%E3%82%BD%E3%83%BC%E3%82%B7%E3%83%B3%E3%82%B0&range=0&count=&sortorder=&type=0", 1);
