<!-- generator="<?php echo $generator ?>" -->
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">

  <channel>
    <title><?php echo xml($title) ?></title>
    <link><?php echo xml($link) ?></link>
    <generator><?php echo c::get('feed.generator', 'Kirby') ?></generator>
    <lastBuildDate><?php echo date('r', $modified) ?></lastBuildDate>
    <atom:link href="<?php echo xml($url) ?>" rel="self" type="application/rss+xml" />

    <?php if(!empty($description)): ?>
    <description><?php echo xml($description) ?></description>
    <?php endif ?>

    <?php foreach($items as $item): ?>
    <item>
      <title><?php echo xml($item->title()) ?></title>
      <link><?php echo xml($item->url()) ?></link>
      <guid><?php echo xml($item->id()) ?></guid>
      <pubDate><?php echo $datefield == 'modified' ? $item->modified('r') : $item->date('r', $datefield) ?></pubDate>
      <description><![CDATA[<?php echo $item->{$textfield}()->kirbytext() ?>]]></description>
    </item>
    <?php endforeach ?>

  </channel>
</rss>