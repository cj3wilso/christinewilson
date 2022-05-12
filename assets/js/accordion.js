const accordionSections = document.querySelectorAll(".accordion");
accordionSections.forEach((accordion) => {
	accordion.onclick = function () {
		this.classList.toggle("is-open");
		
		let content = this.getElementsByClassName("accordion-content")[0];;
		//console.log(content);

		if (content.style.maxHeight) {
		  //this is if the accordion is open
		  content.style.maxHeight = null;
		} else {
			//if the accordion is currently closed
			content.style.maxHeight = content.scrollHeight + "px";
			//console.log(content.style.maxHeight);
		}
	};
});