var drake = dragula([document.querySelector('.hats'), document.querySelector('.head')], {
    accepts: function (el, target, source, sibling) {
        if (target.className === "head") {
            if (!($(target).find('img')[0])) {
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }

    }
});

var drake3 = dragula([document.querySelector('.upper'), document.querySelector('.tops')], {
    accepts: function (el, target, source, sibling) {
        if (target.className === "upper") {
            if (!($(target).find('img')[0])) {
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }

    }
});

var drake4 = dragula([document.querySelector('.hands'), document.querySelector('.leftHand'),document.querySelector('.rightHand')], {
    accepts: function (el, target, source, sibling) {
		console.log("left");
        if (target.className === "leftHand" || target.className === "rightHand") {
					console.log("TEST");
            if (!($(target).find('img')[0])) {
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }

    },
		copy:true
});

var drake5 = dragula([document.querySelector('.shoes'), document.querySelector('.leftFoot'),document.querySelector('.rightFoot')], {
    accepts: function (el, target, source, sibling) {
        if (target.className === "leftFoot" || target.className === "rightFoot") {
            if (!($(target).find('img')[0])) {
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }

    },
	copy:true
});

