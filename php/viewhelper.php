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

    function label($for, $text) {
      return "<label for='{$for}'>$text</label>\n";
    }

    function text_input( $name, $value ) {
      return "<input type='text' name='{$name}' id='{$name}' value='{$value}' />\n";
    }

    function error_notification( $field, $message ) {
      return "<p class='notification' id='{$field}-error'>\n{$message}\n</p>";
    }
  }
