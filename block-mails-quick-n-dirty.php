<?php # -*- coding: utf-8 -*-

/**
 * Plugin Name: Block Mails Quick'n'Dirty
 * Description: Blocks outgoing WordPress emails by removing all recipients
 * Plugin URI:  TODO
 * Author:      Inpsyde GmbH
 * Author URI:  http://inpsyde.com/
 * Version:     dev-master
 * License:     MIT
 * Text Domain: block-mails-quick-n-dirty
 */

namespace Inpsyde\BlockMailsQuick;

add_filter( 'phpmailer_init', function( \PHPMailer $mailer ) {

	$mailer->clearAllRecipients();
} );