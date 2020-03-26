<?php

return [
    'alipay' => [
        'app_id'         => '2016101100660229',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoLHBTjN9+j27qnewqLLMDz6Q3kZiI2O+VgOdOnky4N/K2wNFJiXSWIS7nWLMi+ofFv3ULJogTZA3UfbG2OxkKPVqzevXW/rJEQC3OXusnQmRfZydmdo2MaGADHQQupbFI7klOyXgm+EYea/RDjwPmqwfJ7Sgd0WtEMvnnnPyzuvr7aDYnav6H2CSPPGNj4qMH16c8dBKV2S7IYWaMme3RKIJlnXeJtngYXrxHhrtG8wcbaX7ArBp9bPUoYmDVKLqHTrdzud+Da/yZuCNI0Jpw6f0m7rDykRhgKSpkPcdV6EFyurQpTQaFoo2mfgH8EY2KZC3wjjhOR2TtzahAuy90wIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAufYugY3weRURvM90ZOjkuLzx8Yj9i13DZcaOOo3JmEsAgsvBiRWYGLL96c9VHmooJR9vJMZFwzuQv5zBAQXw3qlGNj50MTPqPXHVgStsZ3ZZsYET0d/d9zJV7Pli9nXQ4pMBSDKWtnPRof3mloIIVFsUDVMog3jkXNtJr34SYQydKyvBSza69Bp0zo5E+UkXSfpBdhXJoj9aXP7UcpiaZZ0idnAbpBLah2vUj1qvX5GP8E/1L1Li/XcQhjG09jVAfQ2Qz11+CKawe0p9OzJGNNgIkGiGJR/6MzDA8TUkrRvsy5YJkh0fL1ybAo66YTx9vxawo+JSPPPELNKnQRxVswIDAQABAoIBAG8LugO1HbdARKJKA4hKpmJGufdwxW7Wo9r/sWj3yD0/9GMmh0Bz+6osIIHhREPwQl7AoZ8FIx2NUUeKtJoG0So1TO8RZlMHXEYq1sLWilpSCwd7O7mlBCgcD8F9voHMIttZy3cwdl0nVjR0qKCRr6Wn6ZZ3ZQb1RvDIJf08vH7kgsZrwZ1vVoaxQGpGY+t/qEcE4hE30559xlaIk2Htmu+//OQfkVADwFLEL38BZEAmkk/iEsHmEhVtAh3eFCpSFyP38xzwfEH11VqhlKqUz6IlKaWZqrzz9/Cmhu/4Aw14bQ8PozIuV693Qfzjigvy/fCFqspEKGK7sXFvhzcFSEkCgYEA7rr0yh8UBdeDG5nyo89qe1Rmvl4a7LDIA//q5uyU7fS7zIBAy0I47S4uJZLA/ae0QaVimcYBTdXU9HrdPZl0KiXXnvCoj6gXL4I/TNm20x1UPsAkjxQ0YFxSLNy/W2xiaHRmSRrduBszU8E1YgZ4eirfA7Mq8hB66QdWAxIrVocCgYEAx2oA3g75W/HiK0E9olDJl80QXJ9okHwNCi4DOmA0bY/mes8YuuLu+AOrNkajKHSKezxvcWC3wPkJrvdbiz08XwJkwUSDnSLJ+dETaN8sWU5C+Gqb8g0g0P/ZP/XGQk/9Q20uT57LNtEvAXT6L9wXDvvh70IPSDaLoP30//uMZnUCgYB/Y13aOQk7MMvyP4zdYoHEe74zmQ2u/YpNsBMN1HKII47OyiVJEPZFgd34CL5Y3FNwsCrUOXdarF7tcl56T1dQYk8TrgGUXrK4lDzo6kgHkV/x+B/KBZMJVFo5PDYUN9qvOGWYXvCvHDygVboBq8hAEH5egA3Li4W6sUJxcxGTIwKBgQCmFivSxzX41mVBEX18Cz1cKXdPLZWxgSB7MgeOP0JrXkbgUkyOmyPdfXDEK+EIeMg+C//ltmBVYRYnm+2q8r2thBjWv3G/FpKSdwhreDU/zGcK8AAigbyrVexj0RfncyfFWNIRjnhCl8dGt18JLY4m9LMgyyxfQM7ar6m26pPtYQKBgQCtZKvWW7Z8SgkGLTaEQdLqMIN4Q/yBr9tZQfwqqeYHoXfAX+xowllrBtkUGLH95bsVS1RYj2SepH2O+J4AwmffpyozgFkQT30v2qeGuKsnglY4FlgTeFkcNUg3uCHh7NybOAti9pc5WQR8kGNeG9BLXCpq0dIF1UHAYm2stxMUmg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
