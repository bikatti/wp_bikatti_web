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
        let splide = new Splide( github[ i ], {
            type   : 'splide',
            perPage: 1,
            perMove: 1,
            fixedWidth : '296px',
            autoHeight: true,
            trimSpace: false,
            pagination: false,
            arrows: false,
            gap: '25px',
            mediaQuery: 'min',
            breakpoints: {
                768: {
                    perPage: 2,
                },
            }
        } )

        splide.on( 'mounted move', () => {
            let htmlInsert = document.getElementsByClassName( 'count-index' )[0] 
            let actualSlide = splide.index + 1
            let number = ('0' + actualSlide).slice(-2)

            htmlInsert.innerHTML = number
        } )
        splide.mount()

        let htmlInsert = document.getElementsByClassName( 'count-length' )[0]
        let countSlide = ('0' + splide.length).slice(-2)
        htmlInsert.innerHTML = countSlide
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


/* ------------------------------------
#                Submit
 -------------------------------------- */
function messageAlert() {
    let alertClass = document.getElementsByClassName( 'alert' )

    for (let i = 0; i < alertClass.length; i++) {
        const alert = alertClass[i];
        
        alert.addEventListener( 'click', event => {
            swal({
                text: "Pronto disponible",
                button: false,
            });
        }, false )
    }
    
}
messageAlert()