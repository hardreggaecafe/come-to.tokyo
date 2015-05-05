<!DOCTYPE html>
<html lang='<?=$lang ?>' xml:lang='<?=$lang ?>' xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php $this->load->helper('url'); ?>
<title>Come-to.tokyo - <?php echo $article->title ?></title>

<meta name="description" content="<?php echo $article->description ?>">
<meta name="keywords" content="<?php echo $article->keyword ?>">
<meta name="google-site-verification" content="KZMFUN6DJq_VCy2mU4ovbrLLXkVjFKwyaYdeybDvvUg" />

<meta property="og:site_name" content="Come-to.tokyo" />
<meta property="og:url" content="<?=$fqdn ; ?>" />
<meta property="og:title" content="<?php echo $article->title; ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?=$article->description; ?>" />
<meta property="og:image" content="<?=$fqdn . '/images/logo_bg.png'; ?>" />
<meta property="fb:app_id" content="1413060845680232" />

<meta name="viewport" content="width=1040" />
<link rel="shortcut icon" href="/images/favicon.ico" />
<link type="text/css" rel="stylesheet" href="/css/common-mb.css" />

<link rel="canonical" href="http://come-to.tokyo/" />

</head>
