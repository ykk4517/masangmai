<?php
session_start();
require_once('./Captcha.class.php');
$captcha = new Captcha();
$captcha->width = 90;
$captcha->height = 40;
$captcha->Generate();