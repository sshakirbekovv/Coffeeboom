$(document).ready(function(){
    $('.smoothscroll').on('click',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);
        $('html, body').stop().animate({'scrollTop': $target.offset().top
        }, 1000, 'swing', function () {
            window.location.hash = target;
        });
    });

});
const topBtn = document.querySelector('.topBox');
window.onscroll = () => {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        topBtn.style.display = "block";
      } else {
        topBtn.style.display = "none";
      }
}
$(window).on('load',function(){
    $('.preloader').delay(1000).fadeOut('slow');
});

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
