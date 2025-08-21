<h1>Modifier utilisateur</h1>
<form action="/users/update" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
    <input type="text" name="surname" value="<?= $user['surname'] ?>" required><br>
    <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <input type="password" name="password" placeholder="Nouveau mot de passe"><br>
    <input type="hidden" name="current_password" value="<?= $user['password'] ?>">
    <input type="text" name="phone" value="<?= $user['phone'] ?>"><br>
    <input type="text" name="location" value="<?= $user['location'] ?>"><br>
    <input type="text" name="role" value="<?= $user['role'] ?>" required><br>
    <button type="submit">Mettre à jour</button>
</form>
