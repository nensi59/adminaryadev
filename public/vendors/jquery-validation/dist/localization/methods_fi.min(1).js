/*! jQuery Validation Plugin - v1.18.0 - 9/9/2018
 * https://jqueryvalidation.org/
 * Copyright (c) 2018 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.methods,{date:function(a,b){return this.optional(b)||/^\d{1,2}\.\d{1,2}\.\d{4}$/.test(a)},number:function(a,b){return this.optional(b)||/^-?(?:\d+)(?:,\d+)?$/.test(a)}}),a});