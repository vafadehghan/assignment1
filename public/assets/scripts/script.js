var dragHead = dragula([document.querySelector('.hat'), document.querySelector('.head')], {
  accepts: function(el, target, source, sibling) {
    if (target.className === "head") {
      if (!($(target).find('img')[0])) {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }

  }
});

var dragBody = dragula([document.querySelector('.body'), document.querySelector('.upper')], {
  accepts: function(el, target, source, sibling) {
    if (target.className === "upper") {
      if (!($(target).find('img')[0])) {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }

  }
});

var dragHands = dragula([document.querySelector('.hand'), document.querySelector('.leftHand'), document.querySelector('.rightHand')], {
  accepts: function(el, target, source, sibling) {
    if (target.className === "leftHand" || target.className === "rightHand") {
      if (!($(target).find('img')[0])) {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }

  },
  copy: true
});

var dragFeet = dragula([document.querySelector('.foot'), document.querySelector('.leftFoot'), document.querySelector('.rightFoot')], {
  accepts: function(el, target, source, sibling) {
    if (target.className === "leftFoot" || target.className === "rightFoot") {
      if (!($(target).find('img')[0])) {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }

  },
  copy: true
});

/* Tooltip-on-Hover
------------------------------------------------------------------------------*/

let tooltip = document.querySelectorAll('.tooltip');

document.addEventListener('mousemove', function(e) {
    for (let i = tooltip.length; i--;) {
        tooltip[i].style.left = e.pageX + 'px';
        tooltip[i].style.top = e.pageY + 'px';
    }
}, false);