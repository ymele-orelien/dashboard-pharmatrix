<!-- views/pages/medicaments.php -->



<div class="container-fluid">
    <div class="row">


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Liste des Médicaments</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="/medicaments/create" class="btn btn-sm btn-outline-secondary">Ajouter un médicament</a>
                </div>
            </div>

            <h2>Inventaire</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($medicaments)): ?>
                            <tr>
                                <td colspan="6">Aucun médicament trouvé.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($medicaments as $medicament): ?>
                                <tr>
                                    <td><?= htmlspecialchars($medicament['id']) ?></td>
                                    <td><?= htmlspecialchars($medicament['nom']) ?></td>
                                    <td><?= htmlspecialchars($medicament['description']) ?></td>
                                    <td><?= htmlspecialchars($medicament['prix']) ?> €</td>
                                    <td><?= htmlspecialchars($medicament['stock']) ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info">Voir</a>
                                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                                        <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

