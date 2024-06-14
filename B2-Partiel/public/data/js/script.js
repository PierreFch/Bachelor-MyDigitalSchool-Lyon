$( document ).ready(function() {

    // Compteur
    var countDownDate = new Date("Apr 17, 2022 13:30:00").getTime();

    var x = setInterval(function() {

      var now = new Date().getTime();
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("countdown").innerHTML = "<div>" + days + "<span>Jours</span>" + "</div>" + "<div>" + hours + "<span>Heures</span>" + "</div>" +
      "<div>" + minutes + "<span>Minutes</span>" + "</div>" + "<div>" + seconds + "<span>Secondes</span>" + "</div>";

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "ELECTIONS EN COURS";
      }
    }, 1000);
    

    // Formulaire (style des labels)
    $("form input").focus(function() {
      $("form input").parent().find( "label").removeClass("select");
      $("form textarea").parent().find( "label").removeClass("select");
      $(this).parent().find( "label").addClass("select");
    });

    $("form textarea").focus(function() {
      $("form input").parent().find( "label").removeClass("select");
      $("form textarea").parent().find( "label").removeClass("select");
      $(this).parent().find( "label").addClass("select");
    });


    // Menu burger
    $("#toggler").click(function(){
      $("nav").slideToggle(500);
      $(".burger-menu label").toggleClass('show');
    });


    // Formulaire Mail Chimp
    (function($) {window.fnames = new Array(); window.ftypes = new Array();
      fnames[0]='EMAIL';ftypes[0]='email';
      fnames[1]='LNAME';ftypes[1]='text';
      fnames[2]='FNAME';ftypes[2]='text';
      fnames[4]='PHONE';ftypes[4]='phone'; 
       $.extend($.validator.messages, {
               required: "Ce champ est requis.",
               remote: "Veuillez remplir ce champ pour continuer.",
               email: "Veuillez entrer une adresse email valide.",
               url: "Veuillez entrer une URL valide.",
               date: "Veuillez entrer une date valide.",
               dateISO: "Veuillez entrer une date valide (ISO).",
               number: "Veuillez entrer un nombre valide.",
               digits: "Veuillez entrer (seulement) une valeur numérique.",
               creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
               equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
               accept: "Veuillez entrer une valeur avec une extension valide.",
               maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
               minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
               rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
               range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
               max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
               min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
       });}(jQuery));var $mcj = jQuery.noConflict(true);

       

});
