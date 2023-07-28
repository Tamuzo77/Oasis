function myFunction() {
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}

let items = document.querySelectorAll(".carousel .carousel-item");
items.forEach((el) => {
    const minPerSlide = 3;
    let next = el.nextElementSibling;
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0];
        }
        let cloneChild = next.cloneNode(true);
        el.appendChild(cloneChild.children[0]);
        next = next.nextElementSibling;
    }
});

let copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);

//     const navbar = document.querySelector("nav")
//     window.addEventListener("scroll",()=>{
//         if(window.innerWidth <= 991){
//             if(window.scrollY > 160){
//                 navbar.style.position="absolute";
//             }
//             else{
//                 navbar.style.top = 0;
//                 navbar.style.position="fixed";
//             }
//         }
//     })

let fileInput = document.getElementById("file-upload-input");
let fileSelect = document.getElementsByClassName("file-upload-select")[0];
fileSelect.onclick = function () {
    fileInput.click();
};
fileInput.onchange = function () {
    let filename = fileInput.files[0].name;
    let selectName = document.getElementsByClassName("file-select-name")[0];
    selectName.innerText = filename;
};

let fileInput1 = document.getElementById("file-upload-input1");
let fileSelect1 = document.getElementsByClassName("file-upload-select1")[0];
fileSelect1.onclick = function () {
    fileInput1.click();
};
fileInput1.onchange = function () {
    let filename = fileInput1.files[0].name;
    let selectName = document.getElementsByClassName("file-select-name1")[0];
    selectName.innerText = filename;
};

$(document).ready(function () {
    $(".dropdown").hover(
        function () {
            $(this)
                .find(".dropdown-menu")
                .stop(true, true)
                .delay(100)
                .fadeIn(200);
        },
        function () {
            $(this)
                .find(".dropdown-menu")
                .stop(true, true)
                .delay(100)
                .fadeOut(200);
        }
    );
});



