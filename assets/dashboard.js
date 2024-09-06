document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))


    //Adding functionality for the dashboard to switch tabs
    const links = document.querySelectorAll('.nav_link')
    const segments = document.querySelectorAll('.segment')

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            const sectionId = this.getAttribute('data-segment');

            // Remove active class from all sections
            segments.forEach(segment => {
                segment.classList.remove('action');
            });

            // Add active class to the clicked section
            document.getElementById(sectionId).classList.add('action');

            // Optionally, you can add active class to the clicked link for styling
            links.forEach(link => {
                link.classList.remove('action');
            });
            this.classList.add('action');
        });
    });

    });

