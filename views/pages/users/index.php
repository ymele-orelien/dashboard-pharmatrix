    <div class="main-content-top">
        <div>Users</div>
        <div class="breadcrumb">
            <span class="current-page">Users</span>
            <span>></span>
            <span>Accuiel</span>
        </div>
    </div>

    <div class="statuts row ">
        <div class="col">
            <i class="fa-solid fa-chart-simple"></i>
            <div class="description-statut">(12) Admin</div>
        </div>
        <div class="col">
            <i class="fa-solid fa-chart-line"></i>
            <div class="description-statut">(3) Public Users</div>
        </div>
        <div class="col">
            <i class="fa-solid fa-check"></i>
            <div class="description-statut">(7) Pharmacies</div>
        </div>

    </div>

    <div class="commandes">
        <p class="titre-commandes">Liste des utilisateur</p>
        <div class="input-group">
            <div class="input-item">
                <label for="show">Show</label>
                <select id="show">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <div class="input-item">
             <a href="/users/create" class="btn btn-primary">Ajouter un utilisateur</a>
            </div>
        </div>
        <p style="color: #56616B;">entries</p>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
              

                  <tbody>
                 <?php if (empty($users)): ?>
                <tr>
                    <td colspan="5" class="text-center">Aucun utilisateur trouvé.</td>
                </tr>
                  <tr>
                     <?php else: ?>
                <?php foreach ($users as $index=> $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($index+1) ?></td>
                        <td><?= htmlspecialchars($user['surname']) ?>-<?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['phone']) ?></td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Voir</a>
                            <a href="/users/edit?id=<?=$user['id']?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="/users/delete?id=<?=$user['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('etes  vous sur de vouloir supprimer cet utilisateur ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
                  </tr>
               </tbody>
           
        </table>
    </div>