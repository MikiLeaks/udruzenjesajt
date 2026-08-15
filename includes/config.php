<?php
declare(strict_types=1);

const SITE_NAME = 'Микиликс веб развој';
const SITE_EMAIL = 'info@vas-domen.rs';
const SITE_LOCATION = 'Kragujevac, Srbija';
const SITE_STATUS = 'Udruženje od javnog interesa';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
