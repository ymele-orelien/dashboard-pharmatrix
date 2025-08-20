    <div class="main-content-top">
        <div>Create User</div>
        <div class="breadcrumb">
            <span class="current-page">Users</span>
            <span>></span>
            <span>create</span>
        </div>
    </div>

    <h1>Ajouter un utilisateur</h1>
    <form action="/users/store" method="post">
        <input type="text" name="name" placeholder="Nom" required><br>
        <input type="text" name="surname" placeholder="Prénom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <input type="text" name="phone" placeholder="Téléphone"><br>
        <input type="text" name="location" placeholder="Ville"><br>
        <input type="text" name="role" placeholder="Role" required><br>
        <button type="submit">Enregistrer</button>
    </form>