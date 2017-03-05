$('document').ready(function() {
  $('.button-collapse').sideNav();
  $('#message').trigger('autoresize').characterCounter();
  $('select').material_select();
  $('#sendContactForm').click(function() {
    swal({
      title: 'Done!',
      text: 'Your email has been submitted, now the Ninjas will take over!',
      type: 'success',
      showCancelButton: false,
      confirmButtonColor: '#1E88E5',
      confirmButtonText: 'Hey, thanks!',
      closeOnConfirm: true,
    });
  });

  /*$('#topMenu').pushpin({
   top: 520,
   offset: 0
   });*/

  $('.parallax').parallax();

  $('#loginButton').click(function() {
    $('body').
        prepend(
            '<div id="loginBox" class="modal modal-fixed-footer"><div class="modal-content"><h4>Login</h4><p>A bunch of text</p></div><div class="modal-footer"><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a></div></div>');
    $('#loginBox').modal({
          dismissible: true,
          opacity: .5,
          inDuration: 300,
          outDuration: 200,
          startingTop: '4%',
          endingTop: '10%',

          complete: function() {
            $('#loginBox').remove();
          },
        },
    );
  });
});
