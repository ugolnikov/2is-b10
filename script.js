test = document.querySelector('.freddy');
test.addEventListener(
    "mouseover",
    (event) => {
        test.style.cssText = "height: 500px; width:500px";
        test.src="Jumpscare.png"
    },
    false,
);
test.addEventListener(
    "mouseout",
    (event) => {
        test.style.cssText = "height: 120px;";
        test.src="scale_1200.png"},
    false,
);
test.addEventListener(
    "touchstart",
    (event) => {
        test.style.cssText = "height: 500px; width:500px";
        test.src="Jumpscare.png"
    },
    false,
);
test.addEventListener(
    "touchend",
    (event) => {
        test.style.cssText = "height: 120px;";
        test.src="scale_1200.png"},
    false,
);

