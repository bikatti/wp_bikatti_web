/* ------------------------------------
#                 Slide
 -------------------------------------- */
function slideFunc() {
    let featured = document.getElementsByClassName( 'splide--featured' )
    let carouselKeys = document.getElementsByClassName( 'splide--carousel-keys' )

    for ( let i = 0; i < featured.length; i++ ) {
        new Splide( featured[ i ], {
            type: 'slide',
            perPage: 1,
            perMove: 1,
            // drag   : 'free',
            trimSpace: false,
            pagination: false,
            autoWidth: true,
            arrows: false,
            gap: '20px',
            mediaQuery: 'min',
            breakpoints: {
                768: {
                    pagination: true,
                    arrows: true,
                    gap: '50px',
                },
            }
        } ).mount()
    }

    for ( let i = 0; i < carouselKeys.length; i++ ) {
        new Splide( carouselKeys[ i ], {
            type: 'slide',
            perPage: 1,
            perMove: 1,
            pagination: false,
            autoWidth: true,
            gap: '20px',
        } ).mount()
    }
}

slideFunc()


/* ------------------------------------
#      Background on progress open
 -------------------------------------- */
let progressCards = document.getElementsByClassName("progress-card")

function bg_change_on_progress(card) {
    const progress = progressCards[card].hasAttribute("open")
    let progressBg = document.getElementsByClassName("progress-card__article")[card]

    if (progress == false) {
        progressBg.classList.add('active')
        progressBg.style.background = '#3ABFF0'
    }
    
    if (progress == true) {
        progressBg.classList.remove('active')
        progressBg.style.background = 'none'
    }
    
}

function bg_change_function() {
    let progressSummary = document.getElementsByClassName("progress-card__title")
    
    for (let i = 0; i < progressSummary.length; i++) {
        const progressCard = progressSummary[i]
        
        progressCard.addEventListener('click', function (){
             bg_change_on_progress(i)
        })
    }
}

bg_change_function()



/* ------------------------------------
#                Submit
 -------------------------------------- */
function messageSuccess() {
    let pageContact = document.getElementsByClassName("page--contact")
    // wpcf7mailsent (Probar)

    if (pageContact) {
        let wpcf7Contact = document.querySelector( '.wpcf7' )
        
        wpcf7Contact.addEventListener( 'wpcf7mailsent', event => {
            swal({
                title: "Gracias",
                text: "Su mensaje ha sido enviado con éxito",
                icon: "success",
                button: false,
            });
        }, false )
    }
}
messageSuccess()