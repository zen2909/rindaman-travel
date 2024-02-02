<?php

class SocialMediaIcon
{
    public static function instagram($username)
    {
        return self::generateIcon('bi bi-instagram', "https://www.instagram.com/{$username}");
    }

    public static function youtube($channel)
    {
        return self::generateIcon('bi bi-youtube', "https://www.youtube.com/{$channel}");
    }

    public static function tiktok($username)
    {
        return self::generateIcon('bi bi-tiktok', "https://www.tiktok.com/@{$username}");
    }

    public static function email($email)
    {
        return self::generateIcon('bi bi-envelope', "mailto:{$email}");
    }

    public static function whatsapp($phoneNumber)
    {
        return self::generateIcon('bi bi-whatsapp', "https://wa.me/{$phoneNumber}");
    }

    private static function generateIcon($class, $url)
    {
        return "<a href=\"{$url}\" target=\"_blank\"><i class=\"{$class}\"></i></a>";
    }
}
?>
