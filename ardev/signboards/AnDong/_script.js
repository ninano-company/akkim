
let buttonKR = document.querySelector('.button.KR');
let buttonEN = document.querySelector('.button.EN');

let boardKR = document.querySelector('#AnDongHalfKR');
let boardEN = document.querySelector('#AnDongHalfEN');
let target = document.querySelector('#target');

target.setAttribute('emitevents', 'true');

let markerOn = false;
let smoothCount = 100;

buttonKR.addEventListener('click', function () {
})

let board = document.querySelector('#AnDongHalf');
let target = document.querySelector('#target');

// board.setAttribute('visible', false);
target.setAttribute('emitevents', 'true');

let markerOn = false;
let smoothCount = 100;

// let prevPosX = new Array();
// let prevPosY = new Array();
// let prevPosZ = new Array();
// let prevRotX = new Array();
// let prevRotY = new Array();
// let prevRotZ = new Array();
let prevPos = new Array();
let prevRot = new Array();

// target.addEventListener('markerFound', function() {
//   var pos = target.getAttribute('position');
//   alert(pos);
//   board.setAttribute('visible', true);
// })

// target.addEventListener('markerLost', function() {
  // board.setAttribute('visible', true);
// })

// AFRAME.registerComponent('marker', {
//   schema: {
//     enabled: { default: true }
//   },

//   init: function() {
//     this.el.addEventListener('markerFound', function() {
//       board.setAttribute('visible', true);
//       // alert('found');
//       markerOn = true;
//     });
//     this.el.addEventListener('markerLost', function() {
//       board.setAttribute('visible', false);
//       // alert('lost');
//       markerOn = false;
//     })
//   },

//   tick: function() {
//     if ( markerOn ) {
//       var pos = target.getAttribute('position');
//       var rot = target.getAttribute('rotation');
//       // alert('' + pos.x + pos.y + pos.z);
//       if ( prevPos.length < smoothCount + 1 ) {
//         prevPos.push(pos);
//         prevRot.push(rot);
//       } else {
//         avePos = { x : 0, y : 0, z : 0};
//         aveRot = { x : 0, y : 0, z : 0};
//         for ( i = 0; i < smoothCount; i++ ) {
//           prevPos[i+1] = prevPos[i];
//           prevRot[i+1] = prevRot[i];
//           avePos.x += prevPos[i+1].x;
//           avePos.y += prevPos[i+1].y;
//           avePos.z += prevPos[i+1].z;
//           aveRot.x += prevRot[i+1].x;
//           aveRot.y += prevRot[i+1].y;
//           aveRot.z += prevRot[i+1].z;
//         }
//         avePos.x = avePos.x / smoothCount;
//         avePos.y = avePos.y / smoothCount;
//         avePos.z = avePos.z / smoothCount;
//         aveRot.x = aveRot.x / smoothCount;
//         aveRot.y = aveRot.y / smoothCount;
//         aveRot.z = aveRot.z / smoothCount;
//         board.object3D.position.set(avePos.x, avePos.y, avePos.z);
//         board.object3D.rotation.set(aveRot.x, aveRot.y, aveRot.z);
//         prevPos[0] = pos;
//         prevRot[0] = rot;
//         // board.setAttribute('position', pos );
//         // board.setAttribute('rotation', aveRot);
//       }
//     }
//   }
// })