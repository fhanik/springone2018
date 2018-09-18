<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example simpleSAMLphp SAML 2.0 SP
 */
$metadata['http://localhost:9091/demo-sp'] = array(
    'AssertionConsumerService' => 'http://localhost:9091/demo-sp/saml/sp/SSO/alias/demo-sp',
    'SingleLogoutService' => 'http://localhost:9091/demo-sp/saml/sp/logout/alias/demo-sp',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'emailAddress',
    'certData' => 'MIICgTCCAeoCCQC3dvhia5XvzjANBgkqhkiG9w0BAQsFADCBhDELMAkGA1UEBhMCVVMxEzARBgNV
BAgMCldhc2hpbmd0b24xEjAQBgNVBAcMCVZhbmNvdXZlcjEdMBsGA1UECgwUU3ByaW5nIFNlY3Vy
aXR5IFNBTUwxCzAJBgNVBAsMAnNwMSAwHgYDVQQDDBdzcC5zcHJpbmcuc2VjdXJpdHkuc2FtbDAe
Fw0xODA1MTQxNDQ1MzBaFw0yODA1MTExNDQ1MzBaMIGEMQswCQYDVQQGEwJVUzETMBEGA1UECAwK
V2FzaGluZ3RvbjESMBAGA1UEBwwJVmFuY291dmVyMR0wGwYDVQQKDBRTcHJpbmcgU2VjdXJpdHkg
U0FNTDELMAkGA1UECwwCc3AxIDAeBgNVBAMMF3NwLnNwcmluZy5zZWN1cml0eS5zYW1sMIGfMA0G
CSqGSIb3DQEBAQUAA4GNADCBiQKBgQC2iAUrJXrHaSOWrU95v8GUGVVl5vWrYrNRFtsK5qkhB/nR
bL08CbqIeD4pkJuIg0LuJdsBuMtYqOnhQSFF5tT36OIdld9SfPA5m8zqPLsCcjWPQ66xoMdReEXN
9E8s/mZOXn3jkKIqywUxJ+wkS5qoBlvmShwDff+igFlF/fBfpwIDAQABMA0GCSqGSIb3DQEBCwUA
A4GBACDBjvIpc1/2yZ3TQe29bKif5pr/3NdKz4MWBJ6vjRk7Bs2hbPrM2ajxLbqPx6PRPeTOw5XZ
grufDj9HmrvKHM2LZTp/cIUpxcNpVRyDA4iVNDc7V3qszaWP9ZIswAYnvmyDL2UHVDLE8xoGz/Ak
xsRNN9VXNHewjQO605umiAKJ',
    'assertion.encryption' => FALSE,
    'nameid.encryption' => FALSE,
);

