@if (Session::has('success') || Session::has('failure'))
    <div id="flash-message" class="flash-message">
  <span id="flash-message-text">{{ session('success') ?? session('failure')  }}</span>
</div>
@endif

<style>
    .flash-message {
  position: fixed;
  top: 20px;
  right: 20px;
  padding: 10px 20px;
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  z-index: 9999;
  display: none;
}

.flash-message.show {
  display: block;
  animation: fade-in 0.3s ease-out forwards;
}

@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

</style>
<script>
    function showFlashMessage(message) {
  var flashMessage = document.getElementById('flash-message');
  var flashMessageText = document.getElementById('flash-message-text');
  
  flashMessageText.textContent = message;
  flashMessage.classList.add('show');
  
  setTimeout(function() {
    flashMessage.classList.remove('show');
  }, 3000); // Durée d'affichage du message en millisecondes (ici, 3 secondes)
}

// Exemple d'utilisation
showFlashMessage(flashMessageText);

</script>