/*
--------------------------------
    : Custom - Validate js :
--------------------------------
*/
"use strict";
$(document).ready(function() {
    jQuery(".form-validate").validate({
        ignore: [],
        errorClass: "invalid-feedback animated fadeInDown",
        errorElement: "div",
        errorPlacement: function(e, a) {
            jQuery(a).parents(".form-group").append(e)
        },
        highlight: function(e) {
            jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
        },
        success: function(e) {
            jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
        },
        rules: {
            "val-username": {
                required: !0,
                minlength: 3
            },
            "email": {
                required: !0,
                email: !0
            },
            "password": {
                required: !0,
                minlength: 6
            },
            "password-confirm": {
                required: !0,
                equalTo: "#password"
            },
            "val-select2": {
                required: !0
            },
            "val-select2-multiple": {
                required: !0,
                minlength: 2
            },
            "val-suggestions": {
                required: !0,
                minlength: 5
            },
            "val-skill": {
                required: !0
            },
            "val-currency": {
                required: !0
            },
            "val-website": {
                required: !0,
                url: !0
            },
            "inputmask-in-phone": {
                required: !0
            },
            "val-digits": {
                required: !0,
                digits: !0
            },
            "val-number": {
                required: !0
            },
            "val-range": {
                required: !0,
                range: [1, 5]
            },
            "val-terms": {
                required: !0
            }
        },
        messages: {
            "val-username": {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 3 characters"
            },
            "email": "Please enter a valid email address",
            "password": {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            "password-confirm": {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Please enter the same password as above"
            },
            "val-select2": "Please select a value!",
            "val-select2-multiple": "Please select at least 2 values!",
            "val-suggestions": "What can we do to become better?",
            "val-skill": "Please select a skill!",
            "val-currency": "Please enter a price!",
            "val-website": "Please enter your website!",
            "inputmask-in-phone": "Please enter a Indian phone!",
            "val-digits": "Please enter only digits!",
            "val-number": "Please enter a number!",
            "val-range": "Please enter a number between 1 and 5!",
            "val-terms": "You must agree to the service terms!"
        }
    })   
});