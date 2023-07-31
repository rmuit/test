<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

// RM: for saml attributes to send - see authsources.php. example-userpass just
//     has various users with all their attributes hardcoded.
$metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
    'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
    'SingleLogoutService' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
    'simplesaml.nameidattribute' => 'uid',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:persistent',
);
$metadata['SamlAuthD10M2EntityId'] = array(
    'AssertionConsumerService' => 'https://samlauth-d10-m2.ddev.site/saml/acs',
    'SingleLogoutService' => 'https://samlauth-d10-m2.ddev.site/saml/sls',
    'simplesaml.nameidattribute' => 'uid',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:persistent',
);
$metadata['D9Php7SamlAuthEntityId'] = array(
    'AssertionConsumerService' => 'https://d9php7.ddev.site/saml/acs',
    'SingleLogoutService' => 'https://d9php7.ddev.site/saml/sls',
    'simplesaml.nameidattribute' => 'uid',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:persistent',
);
