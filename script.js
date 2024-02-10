test = document.querySelector('.freddy');
test.addEventListener(
    "mouseenter",
    (event) => {
        test.style.cssText = "height: 500px; width:500px";
        test.src="Jumpscare.png"
      setTimeout(() => {
        test.style.cssText = "height: 120px";
        test.src="scale_1200.png"
      }, 500);
    },
    false,
  );
  