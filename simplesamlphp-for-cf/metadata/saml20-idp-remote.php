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

$metadata['http://localhost:9092/demo-idp'] = array(
	'name' => array(
		'en' => 'Spring Security SAML IDP Sample (localhost:9092)',
	),
	'description'          => 'Use account credentials user/password.',
	'SingleSignOnService'  => 'http://localhost:9092/demo-idp/saml/idp/SSO/alias/demo-idp',
	'SingleLogoutService'  => 'http://localhost:9092/demo-idp/saml/idp/logout/alias/demo-idp',
	'certData'      => 'MIICmTCCAgICCQDzzXUiQ2LfozANBgkqhkiG9w0BAQsFADCBkDELMAkGA1UEBhMCVVMxEzARBgNV
BAgMCldhc2hpbmd0b24xEjAQBgNVBAcMCVZhbmNvdXZlcjEdMBsGA1UECgwUU3ByaW5nIFNlY3Vy
aXR5IFNBTUwxETAPBgNVBAsMCHNhbWwtaWRwMSYwJAYDVQQDDB1zYW1sLWlkcC5zcHJpbmcuc2Vj
dXJpdHkuc2FtbDAeFw0xODA5MTgxNzAxNDBaFw0yODA5MTUxNzAxNDBaMIGQMQswCQYDVQQGEwJV
UzETMBEGA1UECAwKV2FzaGluZ3RvbjESMBAGA1UEBwwJVmFuY291dmVyMR0wGwYDVQQKDBRTcHJp
bmcgU2VjdXJpdHkgU0FNTDERMA8GA1UECwwIc2FtbC1pZHAxJjAkBgNVBAMMHXNhbWwtaWRwLnNw
cmluZy5zZWN1cml0eS5zYW1sMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC7G7DCIgZ0Xz4d
aexBed5FqCowUPQ0DpLi4BsKE1A2FuPaDkAow4zqJASqXB8kGluLNz7Va6wSwiGZiYSDEFkv9Jr+
pYQrthlfdIOz8bQ8x9qAy5hEuV1o7uwY8xFvnJ96AmGBMBfXV05P6nhyX9qblkbsxrJHkKituIb7
3vaF8wIDAQABMA0GCSqGSIb3DQEBCwUAA4GBAKQgIdllQppnDHq6jSeXpKknH+sMCdk0afrLDfDG
unDYrAKi+fMXKytTxLezLZpZgEytoLKB2cq1PJHHpfVYJzuNKaNnvaeRDho729z2FqnO+JLJpTic
r0wSWKVdq5T78tLeC5rrhWJnhVGGI2jvkJXpSxI4rfQDVVwvX89tYBGT',
);

