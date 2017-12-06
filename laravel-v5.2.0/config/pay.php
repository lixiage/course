<?php

return [
    //APP_ID
    'app_id' => "2016082100305285",

    //商户私钥
    'merchant_private_key' => "MIIEpAIBAAKCAQEAxdTeQjPJgq0MQzataYrsvz6s0ut6c1ypwQ+4EeEhz6sAS6XhW5TMyCJwxOckn1Gj95pPdPK+6f4DVK3nt5UZK/bT2yWqb6EX7p+PD5N6vg8B4gEYNimlKhoNdhQN0i0RI9oa6XijWNjdz4EkYH3ciXQR8A/84p4YBIpfy+MXqBJu3RX498kylbLoNU89AyuZ1xT7PlVz9+bheJbvVmIiCX6dT6j3PBpUG+mI2FyJKB7r0QZvVGTwVUJYc3j5aIQIuygoc3rRs7EtTKXfBEkcsg71Qu1PTWnwC+mDHw5no+nXWV2yHbjaJVR+TdkAG4kx9DSMMfJQ14YIJ0B/0hNLTQIDAQABAoIBAGNzmbAKPLk2qT141UCDmHSj21nFCy/HW4c0kcJbPRYazvE4mMvjR/csaShzUpPNBPLKXjtadONI0P/W1PATQi45zVMT4lRv1YoeKFsaNtAo1zd4eWVxFhjONAoyFqicA0vUr0bDYMqfaxKPx2vCmgV3ljTqtKRv+X7+2R20MgZJKy+MOyoE5vt8KDNnnVK1yZAwG2nUiYfxRID2Ess/3Ri5mHl1QsYDxbaWYmJvOg56zi60rJ99Rzrl6P5ZC99H3fUwtH6rWEkaAUSJWBJf2g6gH0f0Nodl/33Dl3hpz2rYA3gT6NbtuG1VKfnWzM3NkuHRSGSggMFvaigUDr24FvkCgYEA8Kz6mLl5DczZK+OctLXKMLMq1j7b8GunU62fkxe3QSxipSHJyGZ9LsU7mK7uGKzjUmH7UY9y1w+PHY6RsGZxbdeoILSQgldTG143DT0uaKDTQ/2G8/VToY0S3X4l0yn7F+tFr6KJw7UAGYp+I3biRdKnQI1xFRr003s6tSGzVMMCgYEA0m2HIPnLS4Y0Izt100R7kDmcoZZXz7FmSwdaOz3qm4xS7VrRNc1fg5bkcmqogr5scDFfKjtJufneZxLzLAm0g0I+8uEu+fY7hT0AVjOEGKRqqCXvIC8iNCvrycKnF+HjUrEgCXvFJwsh8E9KtdFv40sPPoLyHADR83O7pCpknq8CgYEAkvIqd0EXBjQCjOeF8FfmQWHDT9hFVT+FhHPHsHmUa/h7qjM9Dlx1Ji9KOejkerBkgxJL7fpVtbVMPlGj5j5GFzjK8F0OtmY22cjmd/DY+wzmsOaElUM+cq69y/qPgaRqKKp/e8MTtig3DWEfruuRL+x0LdeuKaKxxMXCjIEtCx0CgYBQVOXgTdwxQdOHm7x4Yc12GrhT66wsKsItZGoq8ZEtvp0t5Zy2mGedOa6Oi283MnD9R6vX2Hhl2iDwYoiYyD+0WEblu9eOL1U7oTUOs237ZlEdThYCyFubZSUHihr2ABMjT2E2nZx/Mj3LmsmfrYu0TsRMDftVe26rLQR2QITXGwKBgQCKeVB8V30ZKUGwVER5RfeED0cNsgIl+yE8LnLKPj5IpbFIm9gWZ8j9wm0MezfS4j7HxccKUkzqX6mRDUbgiEaUVtzSrEuBkGIaMcXROauNkzN/RzOGvcDi48lRfPVeKCcM4KDKOyFNGP7RiWRb5dgjMCfyixnCODkFC1X44QWxNg==",

    //异步通知地址
    'notify_url' => "http:///alipay.trade.page.pay-PHP-UTF-8/notify_url.php",

    //同步跳转
    'return_url' => "http://www.frontend.com/callReturn",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",


    ////支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn7E1uP9WeqC1O/TdOQDweS1w8wBOTB9JhPezS8ywcO6owj41mL8jiinDCOdqL2U863FdrKVyXn6bxV9vHWOiveAekiVDg/h8IOKG6T2+u3nVKtERAYEyyZ4+FwLvXVOLxEi559YIN8eBOKj3PmWy49DOjtac9zVW1I0me9mvtpAB2ZnnMFNrNMRh+LuOnXtaOP54agqqDbK1sV2HAu/QOqHs9FfvqEwc1NBADN/Eylymzgx4sPr4PUOqR4Ljc8eyzoENgTYPQCVHoj4yJWg3/IV5/lfBjz+pf04mgUS0Z7sM0Cr+TvtipkiEg4IDUxTz4f5HqR97vczMTFkegptK8wIDAQAB",

];