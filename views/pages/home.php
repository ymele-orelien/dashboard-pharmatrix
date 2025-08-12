    <div class="main-content-top">
                <div>Dashboard</div>
                <div class="breadcrumb">
                    <span class="current-page">Home</span>
                    <span>></span>
                    <span>Dashboard</span>
                </div>
            </div>

            <div class="statuts">
                <div>
                    <i class="fa-solid fa-chart-simple"></i>
                    <div class="description-statut">(12) Commandes</div>
                </div>
                <div>
                    <i class="fa-solid fa-chart-line"></i>
                    <div class="description-statut">(3) En cours</div>
                </div>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <div class="description-statut">(7) Valid&eacute;es</div>
                </div>
                <div>
                    <i class="fa-solid fa-xmark"></i>
                    <divn class="description-statut">(2) Annul&eacute;es</div>
                </div>
            </div>

            <div class="commandes">
                <p class="titre-commandes">Nos derni&egrave;res commandes</p>
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
                        <label for="search">Search:</label>
                        <input type="text">
                    </div>
                </div>
                <p style="color: #56616B;">entries</p>

                <table id="tableCommandes">
                    <thead>
                        <th>Client</th>
                        <th>M&eacute;dicaments</th>
                        <th>PU</th>
                        <th>Qt&eacute;</th>
                        <th>Date</th>
                        <th>Montant (FCFA)</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>