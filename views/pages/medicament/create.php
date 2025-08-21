<div class="container mt-4">
 
    <div class="main-content-top">
        <div>medicaments</div>
        <div class="breadcrumb">
            <span class="current-page">medicaments</span>
            <span>></span>
            <span>create</span>
        </div>
    </div>
 
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-3">Ajouter un médicament</h4>

            <form method="POST" action="/medicaments/store">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom du médicament" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description du médicament"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="/medicaments" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>
