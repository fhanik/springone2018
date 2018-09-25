<?php

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

$metadata['http://localhost:9093/demo-idp-sp'] = array(
    'AssertionConsumerService' => 'http://localhost:9093/demo-idp-sp/saml/sp/SSO/alias/demo-idp-sp-service-provider',
    'SingleLogoutService' => 'http://localhost:9093/demo-idp-sp/saml/sp/logout/alias/demo-idp-sp-service-provider',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'emailAddress',
    'certData' => 'MIICpTCCAg4CCQCVSvP95HKJtjANBgkqhkiG9w0BAQsFADCBljELMAkGA1UEBhMCVVMxEzARBgNV
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
    'assertion.encryption' => TRUE,
    'nameid.encryption' => TRUE,
);

