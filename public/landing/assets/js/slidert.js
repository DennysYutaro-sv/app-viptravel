(function(){

	const sliderts = [...document.querySelectorAll('.slidert__body')];
	const arrowNext = document.querySelector('#next');
	const arrowBefore = document.querySelector('#before');
	let value;
	arrowNext.addEventListener('click',()=>changePosition(1));

	arrowBefore.addEventListener('click',()=>changePosition(-1));

	function changePosition(change){
		const currentElement = Number(document.querySelector('.slidert__body--show').dataset.id);
		value = currentElement;
		value+=change;
		if(value===0 || value==sliderts.length+1){
			value = value === 0 ? sliderts.length : 1;
		}
		sliderts[currentElement-1].classList.toggle('slidert__body--show');
		sliderts[value-1].classList.toggle('slidert__body--show');
	}
})()