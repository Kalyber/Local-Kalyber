/*console.clear();
const colorArray = [
  "#111820",
  "#4ec3e0",
  "#1E76BC",
  "#1E76BC"
];
const slides = document.querySelectorAll(".slide");
const container = document.querySelector("#panelWrap");
let dur = 1;
let offsets = [];
let oldSlide = -1;
let activeSlide = -1;
let dots = document.querySelectorAll(".dot");
let navDots = [];
let iw = window.innerWidth;
const chat1Anim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const chat2Anim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const handAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
//const cursorAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
//const arrowAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const satliteAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const brushAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const upperarmAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const storeArmOneAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const flashAnim = gsap.timeline({ repeat: -1, repeatDelay: 1 });
const flash2Anim = gsap.timeline({ repeat: -1, repeatDelay: 2 });
const flash3Anim = gsap.timeline({ repeat: -1, repeatDelay: 1.5 });
const flash4Anim = gsap.timeline({ repeat: -1, repeatDelay: 3 });
const flash5Anim = gsap.timeline({ repeat: -1, repeatDelay: 0.5 });
const armslide4Anim = gsap.timeline({ repeat: -1, repeatDelay: 1 });

document.querySelector("#leftArrow").addEventListener("click", slideAnim);
document.querySelector("#rightArrow").addEventListener("click", slideAnim);



// set slides background colors and create the nav dots
for (let i = 0; i < slides.length; i++) {
  gsap.set(slides[i], { backgroundColor: colorArray[i] });
  //let newDot = document.createElement("div");
  //newDot.className = "dot";
  //newDot.index = i;
  //navDots.push(newDot);
  //newDot.addEventListener("click", slideAnim);
  //dots.appendChild(newDot);
}

for (let i = 0; i < dots.length; i++) {
  dots[i].index = i;
  dots[i].addEventListener("click", slideAnim);
}

// Chat Story 3
chat1Anim.fromTo(
  "#chat-1",
  { attr: { r: 10 } },
  { attr: { r: 40 }, duration: 0.25, stagger: 0.25 }
);
chat1Anim.fromTo(
  "#chat-1",
  { opacity: 0 },
  { opacity: 1, duration: 2, scale: 1, stagger: 0.25, transformOrigin: "center bottom" },
  0
);
chat1Anim.fromTo(
  "#chat-1",
  { opacity: 1 },
  { opacity: 0, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center bottom" },
  4
);


flashAnim.fromTo(
  "#flash-1",
  { opacity: 1 },
  { opacity: 0, duration: 1.5, scale: 1, stagger: 0.25, transformOrigin: "center" },
  0
);
flashAnim.fromTo(
  "#flash-1",
  { opacity: 0 },
  { opacity: 1, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center" },
  4
);

flash2Anim.fromTo(
  "#flash-2",
  { opacity: 1 },
  { opacity: 0, duration: 1.5, scale: 1, stagger: 0.25, transformOrigin: "center" },
  0
);
flash2Anim.fromTo(
  "#flash-2",
  { opacity: 0 },
  { opacity: 1, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center" },
  4
);

flash3Anim.fromTo(
  "#flash-3",
  { opacity: 1 },
  { opacity: 0, duration: 1.5, scale: 1, stagger: 0.25, transformOrigin: "center" },
  0
);
flash3Anim.fromTo(
  "#flash-3",
  { opacity: 0 },
  { opacity: 1, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center" },
  4
);

flash4Anim.fromTo(
  "#flash-4",
  { opacity: 1 },
  { opacity: 0, duration: 1.5, scale: 1, stagger: 0.25, transformOrigin: "center" },
  0
);
flash4Anim.fromTo(
  "#flash-4",
  { opacity: 0 },
  { opacity: 1, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center" },
  4
);
flash5Anim.fromTo(
  "#flash-5",
  { opacity: 1 },
  { opacity: 0, duration: 1.5, scale: 1, stagger: 0.25, transformOrigin: "center" },
  0
);
flash5Anim.fromTo(
  "#flash-5",
  { opacity: 0 },
  { opacity: 1, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center" },
  4
);



// Chat Story 3
chat2Anim.fromTo(
  "#chat-2",
  { attr: { r: 10 } },
  { attr: { r: 40 }, duration: 0.25, stagger: 0.25 }
);
chat2Anim.fromTo(
  "#chat-2",
  { opacity: 0 },
  { opacity: 1, duration: 2, scale: 1, stagger: 0.25, transformOrigin: "center bottom" },
  2
);
chat2Anim.fromTo(
  "#chat-2",
  { opacity: 1 },
  { opacity: 0, duration: 0, scale: 0, stagger: 0.25, transformOrigin: "center bottom" },
  6
);


satliteAnim.fromTo(
  "#satelite",
  { y: 200 },
  { y: 350, duration: 30, rotation: 72, transformOrigin: "center bottom"  },
  -2
);

satliteAnim.fromTo(
  "#satelite",
  { y: 350 },
  { y: 200, duration: 30, rotation: 0, transformOrigin: "center bottom" },
  30
);


armslide4Anim.fromTo(
  "#arm-slide-4",
  { y: 76, x: 337 },
  { y: 80, x: 337, duration: 0.5, rotation: 20, scaleY: 0.9, transformOrigin: "center bottom"  },
  0
);

armslide4Anim.fromTo(
  "#arm-slide-4",
  { y: 80, x: 337 },
  { y: 76, x: 337, duration: 0.5, rotation: 0, scaleY: 1, transformOrigin: "center bottom" },
  2
);

armslide4Anim.fromTo(
  "#arm-slide-4",
  { y: 76, x: 337 },
  { y: 80, x: 337, duration: 0.25, rotation: 20, scaleY: 0.9, transformOrigin: "center bottom"  },
  3
);

armslide4Anim.fromTo(
  "#arm-slide-4",
  { y: 80, x: 337 },
  { y: 76, x: 337, duration: 1, rotation: 0, scaleY: 1, transformOrigin: "center bottom" },
  4
);




brushAnim.fromTo(
  "#arm-brush",
  { y: 76, x: 132 },
  { y: 66, x: 140, duration: 1, rotation: 0, transformOrigin: "center bottom"  },
  0
);

brushAnim.fromTo(
  "#arm-brush",
  { y: 66, x: 140 },
  { y: 76, x: 132, duration: 1, rotation: 0, transformOrigin: "center bottom" },
  2
);


upperarmAnim.fromTo(
  "#upper-arm", 
  { rotation: 0, scaleY: 1 },
  { duration: 1, rotation: -20, scaleY: 0.8, transformOrigin: "center top" },
  0
);

upperarmAnim.fromTo(
  "#upper-arm", 
  { rotation: -20, scaleY: 0.8 },
  { duration: 1, rotation: 0, scaleY: 1, transformOrigin: "center top" },
  2
);


storeArmOneAnim.to("#arm-2", {
  duration: 0.75,
  rotation: 20,
  transformOrigin: "center bottom",
  scaleX: 1.2
});
storeArmOneAnim.to("#arm-2", { duration: 0.25, rotation: 0, scaleX: 1, ease: "none" });
storeArmOneAnim.to("#arm-2", {
  duration: 1,
  rotation: 0,
  transformOrigin: "center bottom",
  scaleX: 1,
});


storeArmOneAnim.to("#arm-3", {
  duration: 0.75,
  rotation: 0,
  transformOrigin: "center bottom",
  scaleX: 1
});
storeArmOneAnim.to("#arm-3", { duration: 0.25, rotation: 0, scaleX: 0.8, ease: "none" });
storeArmOneAnim.to("#arm-3", {
  duration: 0.25,
  rotation: 0,
  transformOrigin: "center bottom",
  scaleX: 0.8,
});

storeArmOneAnim.to("#arm-3", {
  duration: 0.75,
  rotation: 10,
  transformOrigin: "center bottom"
});
storeArmOneAnim.to("#arm-3", { duration: 1, rotation: 0, ease: "back.in" });
storeArmOneAnim.to("#arm-3", {
  duration: 1,
  rotation: 0,
  transformOrigin: "center bottom"
});





handAnim.to("#arm", {
  duration: 0.75,
  rotation: -5,
  transformOrigin: "center bottom"
});
handAnim.to("#arm", { duration: 2.5, rotation: 30, ease: "back.in" });
handAnim.to("#arm", {
  duration: 1,
  rotation: 0,
  transformOrigin: "center bottom"
});

cursorAnim.to("#cursor", { duration: 0.25, x: -22 });
cursorAnim.to(
  "#iconCircles circle",
  0.5,
  { duration: 0.5, attr: { r: 6 }, stagger: 0.15 },
  "expand"
);
cursorAnim.to("#cursor", { duration: 1.1, x: 40 }, "expand");
cursorAnim.to("#cursor", { duration: 0.75, x: 0 }, "contract");
cursorAnim.to(
  "#iconCircles circle",
  { duration: 0.5, attr: { r: 4 } },
  "contract"
);





arrowAnim.to("#caret", {
  duration: 0.5,
  attr: { points: "60 30, 35 50, 60 70" },
  repeat: 3,
  yoyo: true,
  ease: "power2.inOut",
  repeatDelay: 0.25
});

// get elements positioned
gsap.set(".dots, .titleWrap", { xPercent: -50 });
gsap.set(".arrow", { yPercent: -50 });
gsap.set(".title", { y: 30 });

// lower screen animation with nav dots and rotating titles
const dotAnim = gsap.timeline({ paused: true });
dotAnim.to(
  ".dot",
  {
    stagger: { each: 1, yoyo: true, repeat: 1 },
    scale: 1.2,
    rotation: 0.1,
    ease: "none",
    backgroundColor: "#F9423A"
  },
  0.5
);
dotAnim.to(
  ".title",
  slides.length + 1,
  { y: -(slides.length * 30), rotation: 0.01, ease: "none" },
  0
);
dotAnim.time(1);



const progressAnim = gsap.timeline({ paused: true });
progressAnim.to(
  ".progress-bar",
  {
    stagger: { each: 1, yoyo: true, repeat: 1 },
    scale: 1.2,
    rotation: 0.1,
    ease: "none",
    backgroundColor: "#F9423A"
  },
  0.5
);
progressAnim.to(
  ".title",
  slides.length + 1,
  { y: -(slides.length * 30), rotation: 0.01, ease: "none" },
  0
);
progressAnim.time(1);



// make the whole thing draggable
let dragMe = Draggable.create(container, {
  type: "x",
  edgeResistance: 1,
  snap: offsets,
  inertia: true,
  bounds: "#masterWrap",
  onDrag: tweenDot,
  onThrowUpdate: tweenDot,
  onDragEnd: slideAnim,
  allowNativeTouchScrolling: false,
  zIndexBoost: false
});

dragMe[0].id = "dragger";
sizeIt();

// main action check which of the 4 types of interaction called the function
function slideAnim(e) {
  oldSlide = activeSlide;
  // dragging the panels
  if (this.id === "dragger") {
    activeSlide = offsets.indexOf(this.endX);
  } else {
    if (gsap.isTweening(container)) {
      return;
    }
    // arrow clicks
    if (this.id === "leftArrow" || this.id === "rightArrow") {
      activeSlide =
        this.id === "rightArrow" ? (activeSlide += 1) : (activeSlide -= 1);
      // click on a dot
    } else if (this.className === "dot") {
      activeSlide = this.index;
      // scrollwheel
    } else {
      activeSlide = e.deltaY > 0 ? (activeSlide += 1) : (activeSlide -= 1);
    }
  }
  // make sure we're not past the end or beginning slide
  activeSlide = activeSlide < 0 ? 0 : activeSlide;
  activeSlide =
    activeSlide > slides.length - 1 ? slides.length - 1 : activeSlide;
  if (oldSlide === activeSlide) {
    return;
  }
  // if we're dragging we don't animate the container
  if (this.id != "dragger") {
    gsap.to(container, dur, { x: offsets[activeSlide], onUpdate: tweenDot });
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = "dot";
  }
  if (activeSlide > 0) {
    for (let i = 0; i < activeSlide; i++) {
      dots[i].className = "dot progressBar";
      
    }
  }
}

// update the draggable element snap points
function sizeIt() {
  offsets = [];
  iw = window.innerWidth;
  gsap.set("#panelWrap", { width: slides.length * iw });
  gsap.set(slides, { width: iw });
  for (let i = 0; i < slides.length; i++) {
    offsets.push(-slides[i].offsetLeft);
  }
  gsap.set(container, { x: offsets[activeSlide] });
  dragMe[0].vars.snap = offsets;
}

gsap.set(".hideMe", { opacity: 1 });
window.addEventListener("wheel", slideAnim);
window.addEventListener("resize", sizeIt);

// update dot animation when dragger moves
function tweenDot() {
  gsap.set(dotAnim, {
    time: Math.abs(gsap.getProperty(container, "x") / iw) + 1
  });
}


*/