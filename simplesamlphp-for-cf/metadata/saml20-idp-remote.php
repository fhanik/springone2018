<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
// $metadata['https://openidp.feide.no'] = array(
// 	'name' => array(
// 		'en' => 'Feide OpenIdP - guest users',
// 		'no' => 'Feide Gjestebrukere',
// 	),
// 	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',

// 	'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
// 	'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
// 	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
// );

$metadata['spring.security.saml.idp.id'] = array(
	'name' => array(
		'en' => 'Spring Security SAML IDP Sample',
	),
	'description'          => 'Use account credentials user/password.',
	'SingleSignOnService'  => 'http://localhost:8081/sample-idp/saml/idp/SSO',
	'SingleLogoutService'  => 'http://localhost:8081/sample-idp/saml/idp/logout',
	'certData'      => 'MIIChTCCAe4CCQDo0wjPUK8sMDANBgkqhkiG9w0BAQsFADCBhjELMAkGA1UEBhMCVVMxEzARBgNV BAgMCldhc2hpbmd0b24xEjAQBgNVBAcMCVZhbmNvdXZlcjEdMBsGA1UECgwUU3ByaW5nIFNlY3Vy aXR5IFNBTUwxDDAKBgNVBAsMA2lkcDEhMB8GA1UEAwwYaWRwLnNwcmluZy5zZWN1cml0eS5zYW1s MB4XDTE4MDUxNDE0NTUyMVoXDTI4MDUxMTE0NTUyMVowgYYxCzAJBgNVBAYTAlVTMRMwEQYDVQQI DApXYXNoaW5ndG9uMRIwEAYDVQQHDAlWYW5jb3V2ZXIxHTAbBgNVBAoMFFNwcmluZyBTZWN1cml0 eSBTQU1MMQwwCgYDVQQLDANpZHAxITAfBgNVBAMMGGlkcC5zcHJpbmcuc2VjdXJpdHkuc2FtbDCB nzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEA2EuygAucRBWtYifgEH/ErVUive4dZdqo72Bze4Mb kPuTKLrMCLB6IXxt1p5lu+tr0JxOiRO3KFVOO3D0l+j9zOow4g+JdoMQsjSzA6HtL/D9ZjXP6iUx FCYx+qmnVl3X9ipBD/HVKOBlzIqeXTSa5D17uxPQVxK64UDOI3CyY4cCAwEAATANBgkqhkiG9w0B AQsFAAOBgQAj+6b6dlA6SitTfz44LdnFSW9mYaeimwPP8ZtU7/3EJCzLd5eq7N/0kYPNVclZvB45 I0UMT77AHWrNyScm56MTcEpSuHhJHAqRAgJKbciCTNsFI928EqiWSmu//w0ASBN3bVa8nv8/rafu utCq3RskTkHVZnbT5Xa6ITEZxSncow==',
);

