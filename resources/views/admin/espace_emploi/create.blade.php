<x-admin.layout title="Emploi Enregistrement">

    <x-admin.header title="Enregistrement d'un emploi" />

    <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <form id="wizardForm" method="POST" action="">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="wizard-progress">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#step1" data-toggle="pill">Étape 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#step2" data-toggle="pill">Étape 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#step3" data-toggle="pill">Étape 3</a>
                      </li>
                    </ul>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
      
                  <div class="tab-content">
                    <div id="step1" class="tab-pane fade show active">
                      <h3>Étape 1</h3>
                      <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" class="form-control" required>
                      </div>
                      <!-- Autres champs pour l'étape 1 -->
                      <button type="button" class="btn btn-primary next-step">Suivant</button>
                    </div>
      
                    <div id="step2" class="tab-pane fade">
                      <h3>Étape 2</h3>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                      </div>
                      <!-- Autres champs pour l'étape 2 -->
                      <button type="button" class="btn btn-primary prev-step">Précédent</button>
                      <button type="button" class="btn btn-primary next-step">Suivant</button>
                    </div>
      
                    <div id="step3" class="tab-pane fade">
                      <h3>Étape 3</h3>
                      <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" class="form-control" required>
                      </div>
                      <!-- Autres champs pour l'étape 3 -->
                      <button type="button" class="btn btn-primary prev-step">Précédent</button>
                      <button type="submit" class="btn btn-success">Terminer</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      

</x-admin.layout>