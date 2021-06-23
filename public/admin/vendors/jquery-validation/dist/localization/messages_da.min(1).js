/*! jQuery Validation Plugin - v1.18.0 - 9/9/2018
 * https://jqueryvalidation.org/
 * Copyright (c) 2018 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Dette felt er påkrævet.",remote:"Ret venligst dette felt",email:"Indtast en gyldig email-adresse.",url:"Indtast en gyldig URL.",date:"Indtast en gyldig dato.",number:"Indtast et tal.",digits:"Indtast kun cifre.",creditcard:"Indtast et gyldigt kreditkortnummer.",equalTo:"Indtast den samme værdi igen.",time:"Angiv en gyldig tid mellem kl. 00:00 og 23:59.",ipv4:"Angiv venligst en gyldig IPv4-adresse.",ipv6:"Angiv venligst en gyldig IPv6-adresse.",require_from_group:a.validator.format("Angiv mindst {0} af disse felter."),extension:"Indtast venligst en værdi med en gyldig endelse",pattern:"Ugyldigt format",lettersonly:"Angiv venligst kun bogstaver.",nowhitespace:"Må ikke indholde mellemrum",maxlength:a.validator.format("Indtast højst {0} tegn."),minlength:a.validator.format("Indtast mindst {0} tegn."),rangelength:a.validator.format("Indtast mindst {0} og højst {1} tegn."),range:a.validator.format("Angiv en værdi mellem {0} og {1}."),max:a.validator.format("Angiv en værdi der højst er {0}."),min:a.validator.format("Angiv en værdi der mindst er {0}."),minWords:a.validator.format("Indtast venligst mindst {0} ord"),maxWords:a.validator.format("Indtast venligst højst {0} ord"),step:a.validator.format("Angiv en værdi gange {0}."),notEqualTo:"Angiv en anden værdi, værdierne må ikke være det samme.",integer:"Angiv et ikke-decimaltal, der er positivt eller negativt."}),a});