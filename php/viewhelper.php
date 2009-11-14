<?php
  /**
   * View Helper
   **/
  class ViewHelper {
    function stylesheet_link_tag( $sheet ) {
      return "<link rel='stylesheet' type='text/css' href='/css/$sheet.css' />\n";
    }

    function js_include_tag( $file ) {
      return "<script type='text/javascript' src='/js/$file.js'></script>\n";
    }

    function doctype() {
      return "<!DOCTYPE html>\n";
    }
  }
