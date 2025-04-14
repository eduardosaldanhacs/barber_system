// JavaScript Document

//$(window).ready(function () {
	// pegamos o valor no localStorage
	const nightModeStorage = localStorage.getItem('gmtNightMode')
	const openStorage = localStorage.getItem('gmtOpen')
	const nightMode = document.querySelector('#night-mode')
	const open = document.querySelector('#menuToggle')

	// caso tenha o valor no localStorage
	if (nightModeStorage) {
		// ativa o night mode
		document.body.classList.add('modo_noturno')

		// já deixa o input marcado como ativo
		nightMode.checked = true
	}

	if (openStorage) {
		// ativa o night mode
		document.body.classList.add('open')
	}

	// ao clicar mudaremos as cores
	nightMode.addEventListener('click', () => {
		// adiciona a classe `night-mode` ao html
		document.body.classList.toggle('modo_noturno')

		// se tiver a classe night-mode
		if (document.body.classList.contains('modo_noturno')) {
			// salva o tema no localStorage
			localStorage.setItem('gmtNightMode', true)
			return
		}
		// senão remove
		localStorage.removeItem('gmtNightMode')
	})

	open.addEventListener('click', () => {
		// adiciona a classe `night-mode` ao html

		// se tiver a classe night-mode
		if (document.body.classList.contains('open')) {
			// salva o tema no localStorage
			localStorage.setItem('gmtOpen', true)
			return
		}
		// senão remove
		localStorage.removeItem('gmtOpen')
	})
//});