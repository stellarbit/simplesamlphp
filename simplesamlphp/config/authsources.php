<?php $config = [
            'lucy-sp' => [
                'saml:SP',
                'entityID' => null,
                'idp' => 'https://sts.windows.net/3bbcfb24-8c96-4831-a14b-a744f29c2517/',
                'signature.algorithm' => 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256',
                'privatekey' => 'sso.key',
                'certificate' => 'sso.crt',
                'discoURL' => null,
                'sign.logout' => TRUE,
                'redirect.sign' => TRUE,
                'assertion.encryption' => TRUE
            ]
        ];
