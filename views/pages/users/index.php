    <div class="main-content-top">
        <div>Users</div>
        <div class="breadcrumb">
            <span class="current-page">Users</span>
            <span>></span>
            <span>Accuiel</span>
        </div>
    </div>

    <div class="statuts">
        <div>
            <i class="fa-solid fa-chart-simple"></i>
            <div class="description-statut">(12) Admin</div>
        </div>
        <div>
            <i class="fa-solid fa-chart-line"></i>
            <div class="description-statut">(3) Public Users</div>
        </div>
        <div>
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
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
               <tbody>
                <?php foreach ($users as $index=>$user) :?>
                  <tr>
                      <td><?=$index+1?></td>
                    <td><?=$user["surname"]?><?=$user["name"]?></td>
                    <td><?=$user["email"]?></td>
                    <td><?=$user["phone"]?></td>
                    <?php endforeach; ?>
                  </tr>
               </tbody>
           
        </table>
    </div>