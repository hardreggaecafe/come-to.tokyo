<!DOCTYPE html>
<html lang='<?=$lang ?>' xml:lang='<?=$lang ?>' xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Come-to.tokyo &nbsp; - &nbsp;<?php echo $title; ?></title>
<meta name="Description" content="<?php echo $description ?>">
<meta name="Keywords" content="<?php echo $keyword ?>">
<meta name="google-site-verification" content="KZMFUN6DJq_VCy2mU4ovbrLLXkVjFKwyaYdeybDvvUg" />


<meta name="viewport" content="width=1040" />
<link rel="shortcut icon" href="/images/favicon.ico" />
<link type="text/css" rel="stylesheet" href="/css/common-mb.css" />
<?php $this->load->helper('url'); ?>

<meta property="og:title" content="Come-to.tokyo - <?php echo $title; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=$fqdn . "/" . $url; ?>"; />
<meta property="og:image" content="<?=$fqdn . $thumb; ?>"; />
<meta property="og:site_name" content="Come-to.tokyo" />
<meta property="og:description" content="<?=$description; ?>" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="canonical" href="http://www.come-to.tokyo/" />

</head>
<body>
<div id="common-header">
<a class="gototop2" href="/"></a>

<!-- Language selector -->
<div id="ensign">
<ul>
<li><a id="eng" href="http://en.come-to.tokyo/<?=$url ?>"></a></li>
<li><a id="jpn" href="http://ja.come-to.tokyo/<?=$url ?>"></a></li>
<li><a id="chn" href="http://zh.come-to.tokyo/<?=$url ?>"></a></li>
<li><a id="vie" href="http://vi.come-to.tokyo/<?=$url ?>"></a></li>
</ul> 
</div>
</div>
