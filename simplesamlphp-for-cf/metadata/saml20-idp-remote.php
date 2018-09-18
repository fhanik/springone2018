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

$metadata['http://localhost:9093/demo-idp-sp'] = array(
	'name' => array(
		'en' => 'Spring Security SAML IDP Sample (localhost:9092)',
	),
	'description'          => 'Use account credentials user/password.',
	'SingleSignOnService'  => 'http://localhost:9093/demo-idp-sp/saml/idp/SSO/alias/demo-idp-sp-identity-provider',
	'SingleLogoutService'  => 'http://localhost:9093/demo-idp-sp/saml/idp/logout/alias/demo-idp-sp-identity-provider',
	'certData'      => 'MIICpTCCAg4CCQCVSvP95HKJtjANBgkqhkiG9w0BAQsFADCBljELMAkGA1UEBhMCVVMxEzARBgNV
BAgMCldhc2hpbmd0b24xEjAQBgNVBAcMCVZhbmNvdXZlcjEdMBsGA1UECgwUU3ByaW5nIFNlY3Vy
aXR5IFNBTUwxFDASBgNVBAsMC3NhbWwtaWRwLXNwMSkwJwYDVQQDDCBzYW1sLWlkcC1zcC5zcHJp
bmcuc2VjdXJpdHkuc2FtbDAeFw0xODA5MTgxNzAzMjdaFw0yODA5MTUxNzAzMjdaMIGWMQswCQYD
VQQGEwJVUzETMBEGA1UECAwKV2FzaGluZ3RvbjESMBAGA1UEBwwJVmFuY291dmVyMR0wGwYDVQQK
DBRTcHJpbmcgU2VjdXJpdHkgU0FNTDEUMBIGA1UECwwLc2FtbC1pZHAtc3AxKTAnBgNVBAMMIHNh
bWwtaWRwLXNwLnNwcmluZy5zZWN1cml0eS5zYW1sMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKB
gQC/vw15iXz+jN/XRx0u5byGD0+CrU4L6JLu8NQ+DmbGQQjDIxog7luOPB8MNZeAoqHlxdCwMJ1k
VIRqtC2LE9ZVYXJfxMuzpCt0b2sULxnfOshK7CE1Jy8S2idYkNmo/+HrKCXGhC+6F7Z6qN9QowaS
H8UnUvryZAZbZB9j4gSHDwIDAQABMA0GCSqGSIb3DQEBCwUAA4GBAEmRgGemvtVjeZcOOCM1S4r/
Wd+lEO2WrcYSguCTIDJVq+MZdJ25DNXVlyUqjFTl2QX/+UZGnBpzkCJV8Le2VnUvTDFE08Vq9mtB
rvtzSoppRVcN4ekMHc8tHG70f7jnYceXHja7X0kkL3HvCLW/0g/Qjb03gIqS3ePksMa3pWon',
);

