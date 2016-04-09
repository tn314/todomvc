/*global $ */
/*jshint unused:false */
var app = app || {};
var ENTER_KEY = 13;
var ESC_KEY = 27;

$(function () {
  'use strict';

  Backbone.emulateHTTP = true;

  var tokenValue = $("meta[name='csrf-token']").attr('content');

  $.ajaxSetup({
      headers: {'X-CSRF-Token': tokenValue}
  });

  // kick things off by creating the `App`
  new app.AppView();
});