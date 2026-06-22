<h2>Monitoring du blog</h2>

<div class="monitoringContainer">
<table class="monitoringTable">
    <thead>
        <tr>
            <th>
                <a href="index.php?action=monitoring&sort=title&order=<?= $nextOrder ?>">Titre<?= $sort === "title" ? ($order === "asc" ? " ↑" : " ↓") : "" ?>
                </a>
            </th>
            <th>
                <a href="index.php?action=monitoring&sort=date&order=<?= $nextOrder ?>">Date<?= $sort === "date" ? ($order === "asc" ? " ↑" : " ↓") : "" ?>
                </a>
            </th>

            <th>
                <a href="index.php?action=monitoring&sort=views&order=<?= $nextOrder ?>">Vues<?= $sort === "views" ? ($order === "asc" ? " ↑" : " ↓") : "" ?>
                </a>
            </th>

            <th>
                <a href="index.php?action=monitoring&sort=comments&order=<?= $nextOrder ?>">Commentaires<?= $sort === "comments" ? ($order === "asc" ? " ↑" : " ↓") : "" ?>
                </a>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($monitoringArticles as $item) { ?>
            <tr>
                <td><?= $item['article']->getTitle() ?></td>
                <td><?= Utils::convertDateToFrenchFormat($item['article']->getDateCreation()) ?></td>
                <td><?= $item['article']->getViews() ?></td>
                <td><?= $item['commentsCount'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>