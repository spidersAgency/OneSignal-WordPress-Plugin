<?php
	/**
	 * Note: This file is intended to be publicly accessible.
	 * Reference: https://developer.mozilla.org/en-US/docs/Web/API/Service_Worker_API/Using_Service_Workers
	 */

	$onesignal_sdk_debug = apply_filters( 'onesignal_sdk_debug', "importScripts('https://localhost:3001/dev_sdks/OneSignalSDK.js');" );
	$onesignal_sdk = apply_filters( 'onesignal_sdk', "importScripts('https://cdn.onesignal.com/sdks/OneSignalSDKWorker.js');" );

	header("Service-Worker-Allowed: /");
	header("Content-Type: application/javascript");
	header("X-Robots-Tag: none");
	if (defined('ONESIGNAL_DEBUG') && defined('ONESIGNAL_LOCAL')) {
		echo $onesignal_sdk_debug;
	} else {
		echo $onesignal_sdk;
	}
?>
