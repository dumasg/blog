<rss version="2.0">
    <channel>
        <title><?= $article['title'] ?></title>
        <description><?= $article['content'] ?></description>
        <language>fr</language>
        <webMaster><?= $article['name'] ?></webMaster>
        <?php foreach ($comments as $key => $value): ?>
        <item>
            <author><?= $value['name'] ?></author>
            <content><?= $value['content'] ?></content>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>