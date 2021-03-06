/* global AFRAME, THREE */

AFRAME.registerComponent("gesture-handler", {
  schema: {
    enabled: { default: true },
    rotationFactor: { default: 5 },
    minScale: { default: 0.3 },
    maxScale: { default: 8 },
  },

  init: function () {
    this.handleScale = this.handleScale.bind(this);
    this.handlePosition = this.handlePosition.bind(this);

    this.isVisible = false;
    this.initialScale = this.el.object3D.scale.clone();
    this.scaleFactor = 1;

    this.el.sceneEl.addEventListener("markerFound", (e) => {
      this.isVisible = true;
      // board.setAttribute('visible', true);
      // alert();
      // console.log(e);
    });

    this.el.sceneEl.addEventListener("markerLost", (e) => {
      this.isVisible = false;
      // board.setAttribute('visible', false);
      // alert();
    });
  },

  update: function () {
    if (this.data.enabled) {
      this.el.sceneEl.addEventListener("onefingermove", this.handlePosition);
      this.el.sceneEl.addEventListener("twofingermove", this.handleScale);
    } else {
      this.el.sceneEl.removeEventListener("onefingermove", this.handlePosition);
      this.el.sceneEl.removeEventListener("twofingermove", this.handleScale);
    }
  },

  remove: function () {
    this.el.sceneEl.removeEventListener("onefingermove", this.handlePosition);
    this.el.sceneEl.removeEventListener("twofingermove", this.handleScale);
  },

  handlePosition: function (event) {
    if (true) {
      this.el.object3D.position.x +=
        event.detail.positionChange.x * this.data.rotationFactor;
      this.el.object3D.position.y -=
        event.detail.positionChange.y * this.data.rotationFactor;
    }
  },

  handleScale: function (event) {
    if (true) {
      this.scaleFactor *=
        1 + event.detail.spreadChange / event.detail.startSpread;

      this.scaleFactor = Math.min(
        Math.max(this.scaleFactor, this.data.minScale),
        this.data.maxScale
      );

      // this.el.object3D.position.x +=
      //   event.detail.positionChange.x * this.data.rotationFactor;
      // this.el.object3D.position.y -=
      //   event.detail.positionChange.y * this.data.rotationFactor;

      this.el.object3D.scale.x = this.scaleFactor * this.initialScale.x;
      this.el.object3D.scale.y = this.scaleFactor * this.initialScale.y;
      this.el.object3D.scale.z = this.scaleFactor * this.initialScale.z;
    }
  },
});
