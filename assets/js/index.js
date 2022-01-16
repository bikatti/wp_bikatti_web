/* ------------------------------------
#              Menu Scroll
 -------------------------------------- */
 window.onscroll = () => activeMenu()
 const mediaQuery = window.matchMedia('(min-width: 768px)')
 
 function activeMenu() {
     let header = document.getElementsByClassName("header")
     
     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
         header[0].classList.add("active")
     } else {
         header[0].classList.remove("active")
     }
 }


/* ------------------------------------
#                 Slide
 -------------------------------------- */
function slideFunc() {
    let github = document.getElementsByClassName( 'splide--portafolio' )

    for ( let i = 0; i < github.length; i++ ) {
        new Splide( github[ i ], {
            type   : 'loop',
            perPage: 3,
            perMove: 1,
            focus  : 'center',
            padding: '5rem',
            autoWidth: true,
            autoHeight: true,
            trimSpace: false,
            pagination: false,
            arrows: false,
            gap: '20px',
            mediaQuery: 'min',
            breakpoints: {
                768: {
                    perPage: 3,
                    gap: '50px',
                },
            }
        } ).mount( )
    }
}

slideFunc()


/* ------------------------------------
#                 Modal
 -------------------------------------- */

 MicroModal.init({
    onShow: () => theBody.classList.add('-overHidden'),
    onClose: () => theBody.classList.remove('-overHidden'),
})
