<?php

return array(
    'zf-oauth2-client' => array(
        'login_redirect_route' => 'zfcuser',
        'profiles' => array(
            'default' => array(
                'client_id' => 'client_id',
                'secret' => 'password',
                'endpoint' => 'http://localhost:8081/oauth', # The zf-oauth2 server
            ),
        ),
    ),
);
