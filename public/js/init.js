(function($){
    $(function(){
        // Materialize js -> side nav
        $('.sidenav').sidenav();
        navbar.construct();

    }); // end of document ready
})(jQuery); // end of jQuery name space

var navbar = {

    elem: $('#navbar'),
    link: $('.link'),
    loginBtn: $('.nav li .btn'),

    construct: function () {
        $(window).scroll(function () {
            navbar.shrinkNavbar();
        });
        navbar.shrinkNavbar();
    },

    shrinkNavbar: function () {
        if ($(window).scrollTop() > 50) {
            this.elem.removeClass('full');
            //this.elem.addClass('shrink indigo');
            this.elem.addClass('shrink');
            this.elem.css('background', '#3f51b5');

            this.link.removeClass('text-darken-4');
            this.link.addClass('text-lighten-3');

            this.loginBtn.removeClass('indigo text-lighten-3');
            this.loginBtn.addClass('amber lighten-3 text-darken-3');
        }
        else {
            this.elem.css('background', 'inherit');
            this.elem.removeClass('shrink');
            //this.elem.removeClass('shrink indigo');
            this.elem.addClass('full');

            this.link.removeClass('text-lighten-3');
            this.link.addClass('text-darken-4');

            this.loginBtn.removeClass('amber lighten-3 text-darken-3');
            this.loginBtn.addClass('indigo text-lighten-3');
        }
    }
};



