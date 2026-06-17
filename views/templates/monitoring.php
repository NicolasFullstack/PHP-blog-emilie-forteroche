<h2>Monitoring du blog</h2>

<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date de publication</th>
            <th>Nombre de vues</th>
            <th>Nombre de commentaires</th>
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