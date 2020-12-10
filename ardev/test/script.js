var board = document.querySelector('#AnDongModel');
board.setAttribute('visible', false);
// alert();
AFRAME.registerComponent("modelHandler", {
  
  schema: {
    rotationFactor: { default: 5 }
  },

  init: function() {
    this.el.sceneEl.addEventListener("markerFound", (e) => {
      this.isVisible = true;
      // board.setAttribute('visible', true);
      alert();
      // console.log(e);
    });
  },
})