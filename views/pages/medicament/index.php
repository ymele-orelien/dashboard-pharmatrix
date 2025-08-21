 <div class="main-content-top">
        <div>medicaments</div>
        <div class="breadcrumb">
            <span class="current-page">medicaments</span>
            <span>></span>
            <span>Accueil</span>
        </div>
    </div>

    <div class="statuts">
        <div>
            <i class="fa-solid fa-chart-simple"></i>
            <div class="description-statut">(9) Admin</div>
        </div>
        <div>
            <i class="fa-solid fa-chart-line"></i>
            <div class="description-statut">(4) medicaments</div>
        </div>
        <div>
            <i class="fa-solid fa-check"></i>
            <div class="description-statut">(70) Pharmacies</div>
        </div>

    </div>



    <div class="commandes">
        <p class="titre-commandes">Liste des medicaments</p>
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
             <a href="/medicaments/create" class="btn btn-primary">Ajouter un medicament</a>
            </div>
        </div>
        <p style="color: #56616B;">entries</p>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">description</th>
                    <th scope="col">prix</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
               <tbody>
                 <?php if (empty($all_medicaments)): ?>
                <tr>
                    <td colspan="5" class="text-center">Aucun médicament trouvé.</td>
                </tr>
                  <tr>
                     <?php else: ?>
                <?php foreach ($all_medicaments as $medicament): ?>
                    <tr>
                        <td><?= htmlspecialchars($medicament['id']+1) ?></td>
                        <td><?= htmlspecialchars($medicament['name']) ?></td>
                        <td><?= htmlspecialchars($medicament['description']) ?></td>
                        <td><?= htmlspecialchars($medicament['prix'] ?? '') ?></td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Voir</a>
                            <a href="#" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
                  </tr>
               </tbody>
           
        </table>
    </div>