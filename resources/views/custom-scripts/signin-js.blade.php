@guest
<script>
  (function(){

    // toggle hide/ show password
    // use this only on dynamically loaded content
    // remove this block of code when not using dynamically loaded content
    $(document).on('click', '.js-hide-password', function(e) {
      e.preventDefault();
      var $this = $(this);
      var text = $this.text();
      var password = $this.siblings('input');

      "password" == password.attr("type")
            ? password.attr("type", "text")
            : password.attr("type", "password");

      $this.text(text == "Hide" ? "Show" : "Hide");
    });
    // toggle hide/ show password

    // event handler for clicking any trigger for modal forms
    $(document).on('click', '[data-signin]', function () {
      var $selector = null;
      var $this = $(this);
      var type = $this.data('signin');

      switch (type) {
        case 'login':
          $selector = $('#ajax-signin-form');
          break;
        case 'signup':
          $selector = $('#ajax-signup-form');
          break;
        case 'reset':
          $selector = $('#ajax-resetpassword-form');
          break;
        default:
          return;
          break;
      }
      showDynamicView($selector);
    });

    // watch for keydown
    $(document).on('keydown', function(event){
      // check if pressed on ESC key
      if (event.which === 27) {
        resetForms();
      }
    });

    // reset form when modal is clicked
    $(document).on('click', '.js-signin-modal', function(event){
      // if not the modal, then just do nothing
      if (event.target !== this){
        return;
      }
      // else reset forms
      resetForms();

      // remove hash when the modal closes
      // eg. `/#login`
      history.pushState("", document.title, window.location.pathname + window.location.search);
    });

    // resets form inputs, feedbacks, input errors
    function resetForms(){
      $('form').trigger('reset');
      $('.newsletter-card__feedback').removeClass('newsletter-card__feedback--is-visible');
      $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
      $('input').removeClass('cd-signin-modal__input--has-error');
    }

    // show dynamic view like forms
    function showDynamicView($element) {
      var loaded = $element.data('loaded');
      var url = $element.data('url');

      // if true, don't reload
      if (loaded == 'true') {
        return;
      }

      $element.load( url, function(response, status, xhr) {
        var $this = $(this);
        $this.removeClass('custom-ajax-frame-loader');
      });
      $element.data('loaded', 'true');

    }

    // Check hash value if `login`
    // Then show Sign in modal
    if (location.hash.substr(1) == 'login') {
      $('[data-signin="login"]')[0].click();
    }

  })();
</script>
@endguest