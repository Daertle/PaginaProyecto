// Obtiene referencias a elementos del DOM
const toggleButton = document.getElementById('toggle-btn') 
const sidebar = document.getElementById('sidebar')  

// Funcion para alternar la visibilidad de la barra lateral
function toggleSidebar(){   
    sidebar.classList.toggle('close')   
    toggleButton.classList.toggle('rotate')    
    closeAllSubMenus() 
    document.body.classList.toggle('sidebar-closed');
}  

// Funcion para alternar la visibilidad de los submenus
function toggleSubMenu(button){    
    // Si el submenu no esta visible, cierra todos los demas
    if(!button.nextElementSibling.classList.contains('show')){     
        closeAllSubMenus()   
    }    
    
    // Alterna las clases para mostrar/ocultar el submenu
    button.nextElementSibling.classList.toggle('show')   
    button.classList.toggle('rotate')    
    
    // Si la barra lateral esta cerrada, la abre
    if(sidebar.classList.contains('close')){     
        sidebar.classList.toggle('close')     
        toggleButton.classList.toggle('rotate')   
    } 
}  

// Funcion para cerrar todos los submenus abiertos
function closeAllSubMenus(){   
    Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {     
        ul.classList.remove('show')     
        ul.previousElementSibling.classList.remove('rotate')   
    }) 
}