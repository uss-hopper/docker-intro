<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$sendGridSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = "6LcKznsUAAAAAMaXJLTaSwqb47xHL43JQBUFojkn";
$secret = "6LcKznsUAAAAAGX47uG3W-BpxoKHy7aTGLG4Bzlv";

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["gkephart@cnm.edu", "George Kephart"];
