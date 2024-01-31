<rss version="2.0">
    <channel>
        <title><?= $article['title'] ?></title>
        <description><?= $article['content'] ?></description>
        <language>fr</language>
        <webMaster><?= $article['name'] ?></webMaster>
        <?php foreach ($comments as $key => $value): ?>
        <item>
            <title><?= $value['name'] ?></title>
            <description><?= $value['content'] ?></description>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>