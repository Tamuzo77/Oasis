

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



    const navbar = document.querySelector("nav")
    window.addEventListener("scroll",()=>{
        if(window.innerWidth <= 991){
            if(window.scrollY > 160){
                navbar.style.position="absolute";
            }
            else{
                navbar.style.top = 0;
                navbar.style.position="fixed";
            }
        }
    })


    let fileInput = document.getElementById("file-upload-input");
    let fileSelect = document.getElementsByClassName("file-upload-select")[0];
    fileSelect.onclick = function() {
        fileInput.click();
    }
    fileInput.onchange = function() {
        let filename = fileInput.files[0].name;
        let selectName = document.getElementsByClassName("file-select-name")[0];
        selectName.innerText = filename;
    }

