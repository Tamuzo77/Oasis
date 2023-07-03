const { AOS } = NodeRequire("aos");

function myFunction() {
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    var x = document.getElementById("password")
    if (x.type === "password") {
      x.type = "text";
      y.style.display="block";
      z.style.display="none";
    } else {
      x.type = "password";
      y.style.display="none";
      z.style.display="block";
    }
}




let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 3
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

AOS.init();
