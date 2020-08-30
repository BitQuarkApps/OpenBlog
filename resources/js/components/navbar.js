window.onload = function(){
	console.log('ey')
	navbarFunction()
}


let navbarFunction = () => {
	const navBtn = document.querySelector('.menu-icon')
	if(navBtn){
		navBtn.addEventListener('click', () => {
			let menu = document.querySelector('.sidemenu')
			if(menu){
				menu.classList.add('mobile-open')
				let overlay = document.querySelector('.mobile-menu-overlay')
				if(overlay){
					overlay.classList.add('dismissable')
					dismissMobileMenu(menu, overlay)
				}else{
					console.warn('No pude encontrar el elemento .mobile-menu-overlay, debería de estar en dentro del componente .side-nav-layout')	
				}
			}else{
				console.warn('No pude encontrar el elemento .sidemenu, debería de estar en dentro del componente .side-nav-layout')
			}
		})
	}else{
		console.warn('No pude encontrar el elemento .menu-icon, debería de estar en dentro del componente .in-content-navigation')
	}
}

let dismissMobileMenu = (menu, overlay) => {
	overlay.addEventListener('click', () => {
		menu.classList.remove('mobile-open')
		overlay.classList.remove('dismissable')
	})
}